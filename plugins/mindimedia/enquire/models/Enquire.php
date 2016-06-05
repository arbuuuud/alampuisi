<?php namespace Mindimedia\Enquire\Models;

use App;
use Str;
use Html;
use Lang;
use Model;
use Markdown;
use ValidationException;
use Mindimedia\Enquire\Classes\TagProcessor;
use Backend\Models\User;
use Carbon\Carbon;
use DB;

class Enquire extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'mindimedia_enquire_enquiries';

    /*
     * Validation
     */
    public $rules = [
        // 'title' => 'required',
        // 'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:mindimedia_enquire_enquiries'],
        // 'content' => 'required',
        // 'excerpt' => ''
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * The attributes on which the enquire list can be ordered
     * @var array
     */
    public static $allowedSortingOptions = array(
        'title asc' => 'Title (ascending)',
        'title desc' => 'Title (descending)',
        'created_at asc' => 'Created (ascending)',
        'created_at desc' => 'Created (descending)',
        'updated_at asc' => 'Updated (ascending)',
        'updated_at desc' => 'Updated (descending)',
        'published_at asc' => 'Published (ascending)',
        'published_at desc' => 'Published (descending)',
        'random' => 'Random'
    );

    /*
     * Relations
     */
    public $belongsTo = [
        'user' => ['Backend\Models\User']
    ];

    public $belongsToMany = [

    ];

    public $attachMany = [
        'featured_images' => ['System\Models\File', 'order' => 'sort_order'],
        'content_images' => ['System\Models\File']
    ];

    /**
     * @var array The accessors to append to the model's array form.
     */
    protected $appends = ['summary', 'has_summary'];

    public $preview = null;

    public function afterValidate()
    {
        if ($this->published && !$this->published_at) {
            throw new ValidationException([
               'published_at' => Lang::get('mindimedia.enquire::lang.enquire.published_validation')
            ]);
        }
    }

    public function beforeSave()
    {
   //     $this->content_html = self::formatHtml($this->content);
    }

    public function afterSave()
    {
        return 'asd';
   //     $this->content_html = self::formatHtml($this->content);
    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];


        return $this->url = $controller->pageUrl($pageName, $params);
    }

    /**
     * Used to test if a certain user has permission to edit enquire,
     * returns TRUE if the user is the owner or has other enquiries access.
     * @param User $user
     * @return bool
     */
    public function canEdit(User $user)
    {
        return ($this->user_id == $user->id) || $user->hasAnyAccess(['mindimedia.enquire.access_other_enquiries']);
    }

    public static function formatHtml($input, $preview = false)
    {
        $result = Markdown::parse(trim($input));

        if ($preview) {
            $result = str_replace('<pre>', '<pre class="prettyprint">', $result);
        }

        $result = TagProcessor::instance()->processTags($result, $preview);

        return $result;
    }

    //
    // Scopes
    //

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
        ;
    }
    public function scopeIsWaiting($query)
    {
        return $query
            ->whereNotNull('status')
            ->where('status','WL')
        ;
    }
    public function scopeIsProcess($query)
    {
        return $query
            ->whereNotNull('status')
            ->where('status','P')
        ;
    }
    public function scopeIsRead($query)
    {
        return $query
            ->whereNotNull('status')
            ->where('status','R')
        ;
    }
    public function scopeIsConfirm($query)
    {
        return $query
            ->whereNotNull('status')
            ->where('status','C')
        ;
    }

    /**
     * Lists enquiries for the front end
     * @param  array $options Display options
     * @return self
     */
    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'sort'       => 'created_at',
            'search'     => '',
            'published'  => true
        ], $options));

        $searchableFields = ['title', 'slug', 'excerpt', 'content'];

        if ($published) {
            $query->isPublished();
        }

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {

            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                if ($sortField == 'random') {
                    $sortField = DB::raw('RAND()');
                }
                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }


        return $query->paginate($perPage, $page);
    }


    //
    // Summary / Excerpt
    //

    /**
     * Used by "has_summary", returns true if this enquire uses a summary (more tag)
     * @return boolean
     */
    public function getHasSummaryAttribute()
    {
        return strlen($this->getSummaryAttribute()) < strlen($this->content_html);
    }

    /**
     * Used by "summary", if no excerpt is provided, generate one from the content.
     * Returns the HTML content before the <!-- more --> tag or a limited 600
     * character version.
     *
     * @return string
     */
    public function getSummaryAttribute()
    {
        $excerpt = array_get($this->attributes, 'excerpt');
        if (strlen(trim($excerpt))) {
            return $excerpt;
        }

        $more = '<!-- more -->';
        if (strpos($this->content_html, $more) !== false) {
            $parts = explode($more, $this->content_html);
            return array_get($parts, 0);
        }

        return Str::limit(Html::strip($this->content_html), 600);
    }
    public function sendEmailNotification(){
        // return $this->createHTML($this->processemail);
        // multiple recipients
        $to  = $this->email;

        // subject
        $subject = 'Alam Puisi- Villas That Capture the Poetry of Nature, Quotation # '.$this->quotationnumber.'';

        // message

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'To: '.$this->fullname.' <'.$this->email.'>' . "\r\n";
        $headers .= 'From: Alam Puisi- Villas That Capture the Poetry of Nature <reservation.bali@alampuisivilla.com>' . "\r\n";
        $headers .= 'Cc: alampuisi.reservation@gmail.com' . "\r\n";
        $headers .= 'Bcc: bdm@mindimedia.com' . "\r\n";

        // Mail it
        mail($to, $subject, $this->createHTML($this->processemail), $headers);
    }
    public function sendEmailBckp(){

        $mail = new PHPMailer;
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages

        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "delica.websitewelcome.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "transbali@mindimedia.com";
        $mail->Password = "transbali11a";
        $mail->setFrom('reservation.bali@alampuisivilla.com', 'Alam Puisi- Villas That Capture the Poetry of Nature');
        // $mail->addCC('reservation.bali@alampuisivilla.com', 'Alam Puisi- Villas That Capture the Poetry of Nature');
        $mail->addCC('alampuisi.reservation@gmail.com', 'Alam Puisi- Villas That Capture the Poetry of Nature');
        // $mail->addCC('bdm@mindimedia.com', 'Alam Puisi- Villas That Capture the Poetry of Nature');
        $mail->addAddress(''.$this->email.'', ''.$this->fullname.'');
        $mail->Subject = 'Alam Puisi- Villas That Capture the Poetry of Nature, Quotation # '.$this->quotationnumber.'';
        // $mail->AddEmbeddedImage("po-content/po-upload/".$currentHeader->picture, "image-header", $currentHeader->picture);
        // $mail->AddEmbeddedImage("po-content/po-upload/".$currentFooter->picture, "image-footer", $currentFooter->picture);
        $mail->msgHTML($this->createHTML($this->processemail));

        //send the message, check for errors
        if (!$mail->send()) {
            header("location:404.php");
        } else {
            header("location:enquire-success");
        }
    }
    public function createHTML($html){
        $htmlString ="";
        $htmlString .= "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";
        $htmlString .= "<html>";
        $htmlString .= "<head>";
        $htmlString .= "    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
        $htmlString .= "</head>";
        $htmlString .= "<style>";
        $htmlString .= "    @import url(https://fonts.googleapis.com/css?family=Open+Sans);";
        $htmlString .= "    table,tbody,tfoot,thead,tr, th,td {vertical-align: top !important;}";
        $htmlString .= "    body { background-color: #efefef; }";
        $htmlString .= "    #box {";
        $htmlString .= "        BORDER-RIGHT: #cccccc 1px solid;";
        $htmlString .= "        PADDING-RIGHT: 10px;";
        $htmlString .= "        BORDER-TOP: #cccccc 1px solid;";
        $htmlString .= "        PADDING-LEFT: 10px;";
        $htmlString .= "        FLOAT: left;";
        $htmlString .= "        PADDING-BOTTOM: 10px;";
        $htmlString .= "        OVERFLOW: hidden;";
        $htmlString .= "        BORDER-LEFT: #cccccc 1px solid;";
        $htmlString .= "        PADDING-TOP: 10px;";
        $htmlString .= "        BORDER-BOTTOM: #cccccc 1px solid;}";
        $htmlString .= "    #line {";
        $htmlString .= "        BACKGROUND: #CCCCCC;}";
        $htmlString .= "    #list {";
        $htmlString .= "        padding: 2px;";
        $htmlString .= "        border: 1px solid;";
        $htmlString .= "        border-color: #FEFEFE #C3C8CB #C3C8CB #FEFEFE; }";
        $htmlString .= "    input {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #737373;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #cccccc 1px solid;";
        $htmlString .= "        BORDER-TOP: #cccccc 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #cccccc 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #cccccc 1px solid;";
        $htmlString .= "        BACKGROUND: #ffffff no-repeat 10px 50%;}";
        $htmlString .= "    select {";
        $htmlString .= "        color: #737373;";
        $htmlString .= "        background-color: #ffffff;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;}";
        $htmlString .= "    #radio {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #737373;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: 0px;";
        $htmlString .= "        BORDER-TOP: 0px;";
        $htmlString .= "        BORDER-BOTTOM: 0px;";
        $htmlString .= "        BORDER-RIGHT: 0px;}";
        $htmlString .= "    textarea {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #737373;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #cccccc 1px solid;";
        $htmlString .= "        BORDER-TOP: #cccccc 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #cccccc 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #cccccc 1px solid;";
        $htmlString .= "        BACKGROUND: #ffffff no-repeat 10px 50%; }";
        $htmlString .= "    #A {";
        $htmlString .= "        COLOR: #025196;";
        $htmlString .= "        text-decoration: none;";
        $htmlString .= "        font-weight: none; }";
        $htmlString .= "    td {";
        $htmlString .= "        COLOR: #737373;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        line-height: 150%;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;}";
        $htmlString .= "    #font1 {";
        $htmlString .= "        COLOR: #ffffff;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        line-height: 150%;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;}";
        $htmlString .= "    #font1 A {";
        $htmlString .= "        COLOR: #ffffff;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;}";
        $htmlString .= "    #font1 A:hover {";
        $htmlString .= "        COLOR: #ffffff;";
        $htmlString .= "        text-decoration: underline;}";
        $htmlString .= "    #font1 input {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #737373;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #e4e4e4 1px solid;";
        $htmlString .= "        BORDER-TOP: #cccccc 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #cccccc 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #cccccc 1px solid;";
        $htmlString .= "        BACKGROUND: #e4e4e4 no-repeat 10px 50%;}";
        $htmlString .= "    #font2 {";
        $htmlString .= "        COLOR: #025196;";
        $htmlString .= "        font-size: 10pt;";
        $htmlString .= "        font-weight: bold;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif; }";
        $htmlString .= "    #admmnu {";
        $htmlString .= "        background-color: #FFEBCC;}";
        $htmlString .= "    #tabmnu,.tabmnu {";
        $htmlString .= "        background-color: #e9e2dd;}";
        $htmlString .= "    #searchtab {";
        $htmlString .= "        background-color: #fff;}";
        $htmlString .= "    #contents,.contents {";
        $htmlString .= "        background-color: #ffffff;}";
        $htmlString .= "    #qbody {";
        $htmlString .= "        background: none;";
        $htmlString .= "        scrollbar-face-color: #000000;";
        $htmlString .= "        scrollbar-shadow-color: #e4e4e4;";
        $htmlString .= "        scrollbar-highlight-color: #e4e4e4;";
        $htmlString .= "        scrollbar-3dlight-color: #ffffff;";
        $htmlString .= "        scrollbar-darkshadow-color: #ffffff;";
        $htmlString .= "        scrollbar-track-color: #ffffff;";
        $htmlString .= "        scrollbar-arrow-color: #ffffff;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif; }";
        $htmlString .= "    #qtd {";
        $htmlString .= "        background: none;";
        $htmlString .= "        COLOR: #fff;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif;}";
        $htmlString .= "    #qtextarea {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #333;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #000000 1px solid;";
        $htmlString .= "        BORDER-TOP: #000000 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #000000 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #000000 1px solid;";
        $htmlString .= "        BACKGROUND: #ffffff no-repeat 10px 50%;";
        $htmlString .= "        width: 200px;";
        $htmlString .= "        height: 40px;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif;}";
        $htmlString .= "    #qinput {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #333;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #000000 1px solid;";
        $htmlString .= "        BORDER-TOP: #000000 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #000000 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #000000 1px solid;";
        $htmlString .= "        BACKGROUND: #ffffff no-repeat 10px 50%;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif;}";
        $htmlString .= "    #qselect {";
        $htmlString .= "        color: #333;";
        $htmlString .= "        background-color: #fffffff;";
        $htmlString .= "        border-style: solid;";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif; }";
        $htmlString .= "    #qbutton {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #333;";
        $htmlString .= "        font-family: Arial, Helvetica, sans-serif;";
        $htmlString .= "        border: none;";
        $htmlString .= "        BACKGROUND: #b6b09a;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif;";
        $htmlString .= "        padding: 4px !important;";
        $htmlString .= "        display: block;";
        $htmlString .= "        width: 150px;}";
        $htmlString .= "    #qradio {";
        $htmlString .= "        font-size: 13px;";
        $htmlString .= "        COLOR: #333;";
        $htmlString .= "        font-family: 'Open Sans', sans-serif;";
        $htmlString .= "        BORDER-LEFT: 0px;";
        $htmlString .= "        BORDER-TOP: 0px;";
        $htmlString .= "        BORDER-BOTTOM: 0px;";
        $htmlString .= "        BORDER-RIGHT: 0px;";
        $htmlString .= "        background: none; }";
        $htmlString .= "    #jbody {";
        $htmlString .= "        background: none;}";
        $htmlString .= "    #jtd {";
        $htmlString .= "        background: none;";
        $htmlString .= "        COLOR: #000000;}";
        $htmlString .= "    #jtd h3 {";
        $htmlString .= "        color: #676767;}";
        $htmlString .= "    #jinput {";
        $htmlString .= "        font-size: 8 pt;";
        $htmlString .= "        COLOR: #000000;";
        $htmlString .= "        font-family: Helvetica, Tahoma, Geneva, sans-serif;";
        $htmlString .= "        BORDER-LEFT: #000000 1px solid;";
        $htmlString .= "        BORDER-TOP: #000000 1px solid;";
        $htmlString .= "        BORDER-BOTTOM: #000000 1px solid;";
        $htmlString .= "        BORDER-RIGHT: #000000 1px solid;";
        $htmlString .= "        BACKGROUND: #ffffff no-repeat 10px 50%;}";
        $htmlString .= "    #tabmnu td {";
        $htmlString .= "        padding: 10px !important;}";
        $htmlString .= "    #tabmnu img {";
        $htmlString .= "        margin-right: 15px !important;}";
        $htmlString .= "    #tabmnu b {";
        $htmlString .= "        font-family: Lovelo, sans-serif;";
        $htmlString .= "        text-transform: uppercase;";
        $htmlString .= "        letter-spacing: 2px;";
        $htmlString .= "        font-size: 16px;";
        $htmlString .= "        line-height: 20px;";
        $htmlString .= "        font-weight: regular; }";
        $htmlString .= "    .main-content {";
        $htmlString .= "        max-width: 980px !important; }";
        $htmlString .= "    .prod_heropic {";
        $htmlString .= "        margin-right: 15px;}";
        $htmlString .= "    .prod_pic_column {";
        $htmlString .= "        width: 110px; }";
        $htmlString .= "</style>";
        $htmlString .= "<body>";
        $htmlString .= $html;
        $htmlString .= "</body>";
        $htmlString .= "</html>";
        return $htmlString;
    }
}
