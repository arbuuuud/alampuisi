<?php namespace Mindimedia\Enquire\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Mindimedia\Enquire\Models\Enquire;
use DateTime;

class Enquiries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = ['mindimedia.enquire.access_other_enquiries', 'mindimedia.enquire.access_enquiries'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mindimedia.Enquire', 'enquire', 'enquiries');
    }

    public function index()
    {
        $this->vars['enquiriesTotal'] = Enquire::count();
        $this->vars['enquiriesWaiting'] = Enquire::isWaiting()->count();
        $this->vars['enquiriesProcess'] = Enquire::isProcess()->count();
        $this->vars['enquiriesRead'] = Enquire::isRead()->count();
        $this->vars['enquiriesConfirm'] = Enquire::isConfirm()->count();

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        //test
        BackendMenu::setContextSideMenu('new_enquire');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/mindimedia/enquire/assets/css/mindimedia.enquire-preview.css');
        $this->addJs('/plugins/mindimedia/enquire/assets/js/enquire-form.js');

        return $this->asExtension('FormController')->create();
    }

    public function viewenquire($recordId = null){
        return json_encode(Enquire::all());
    }
    public function update($recordId = null)
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/mindimedia/enquire/assets/css/mindimedia.enquire-preview.css');
        $this->addJs('/plugins/mindimedia/enquire/assets/js/enquire-form.js');
        
        return $this->asExtension('FormController')->update($recordId);
    }

    public function listExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['mindimedia.enquire.access_other_enquiries'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function formExtendQuery($query)
    {
        if (!$this->user->hasAnyAccess(['mindimedia.enquire.access_other_enquiries'])) {
            $query->where('user_id', $this->user->id);
        }
    }

    public function index_onDelete()
    {
        if (($checkedIds = enquire('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $enquireId) {
                if ((!$enquire = Enquire::find($enquireId)) || !$enquire->canEdit($this->user))
                    continue;

                $enquire->delete();
            }

            Flash::success('Successfully deleted those enquiries.');
        }

        return $this->listRefresh();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->published)
            return 'safe disabled';
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function onRefreshPreview()
    {
        $data = enquire('Enquire');

        $previewHtml = Enquire::formatHtml($data['content'], true);

        return [
            'preview' => $previewHtml
        ];
    }

    public function submitenquire(){
        // return 'done';
        $input = post();
        $enquire = new \Mindimedia\Enquire\Models\Enquire();
        // return $this->processemailbuild($enquire);
        // return $input['dayin'];
        $enquire->quotation_number = uniqid();
        $enquire->full_name = isset($input["fullname"])?$input["fullname"]:"";
        $enquire->email = isset($input["email"])?$input["email"]:"";
        $enquire->phone_number = isset($input["phonenum"])?$input["phonenum"]:"";
        $enquire->mobile_number = isset($input["mobilenum"])?$input["mobilenum"]:"";
        $enquire->address = isset($input["address"])?$input["address"]:"";
        $enquire->city = isset($input["city"])?$input["city"]:"";
        $enquire->postal_code = isset($input["postcode"])?$input["postcode"]:"";
        $enquire->country = isset($input["country"])?$input["country"]:"";
        $enquire->state = isset($input["state"])?$input["state"]:"";
        $enquire->region = isset($input["region"])?$input["region"]:"";
        $enquire->enquire_type = isset($input["enquire_type"])?$input["enquire_type"]:"";
        // $format = "mm/dd/yyyy";
        $format = 'd/m/Y';
        try{
            $datein = DateTime::createFromFormat($format, $input['dayin']);
            $dateout = DateTime::createFromFormat($format, $input['dayout']);
        }catch(Exception $e){

            throw new Exception('error',44405);
        }
        $enquire->day_in = $datein->format('Y-m-d H:i:s');
        $enquire->day_out = $dateout->format('Y-m-d H:i:s');
        $enquire->room_type = isset($input["room_type"])?$input["room_type"]:"";
        $enquire->quantity = isset($input["quantity"])?$input["quantity"]:"";
        $enquire->adult = isset($input["adult"])?$input["adult"]:"";
        $enquire->children = isset($input["children"])?$input["children"]:"";
        $enquire->infant = isset($input["infant"])?$input["infant"]:"";
        // $enquire->template = isset($input["transportcheck"]):
        $enquire->airport_name = isset($input["airport_name"])?$input["airport_name"]:"";
        $enquire->airport_location = isset($input["airport_location"])?$input["airport_location"]:"";
        $enquire->flight_number = isset($input["flightnum"])?$input["flightnum"]:"";
        $enquire->arrival_time = isset($input["arrival_time"])?$input["arrival_time"]:"";
        $enquire->other_transport = isset($input["other_trasport"])?$input["other_trasport"]:"";
        $enquire->comment = isset($input["comment"])?$input["comment"]:"";
        $enquire->info_special_check = isset($input["info_special_check"])?$input["info_special_check"]:"";
        $enquire->info_special = isset($input["info_special"])?json_encode($input["info_special"]):"";
        // $enquire->template = isset($input["info_special_check"]):
        $enquire->how_did_enquire = isset($input["how_did_enquire"])?$input["how_did_enquire"]:"";
        $enquire->status ="WL";
        // $enquire->processemail ="WL";

        $enquire->save();
        $enquire->processemail = $this->processemailbuild($enquire);
        // return $enquire->processemail;
        $enquire->save();
        // return $enquire->sendEmailNotification();
        


        return json_encode($input);
        return 'test success'; 
    }
    public function formExtendFields($form)
    {
         $form->addFields([
            'commentprocess' => [
                'label'   => 'Check EMAIL DRAFT FOR PROCESS STATUS',
                'type'   => 'section',
                'trigger'=>[
                    'action'=> 'show',
                    'field'=> 'status',
                    'condition'=> 'value[P]'
                ]
            ],
        ]);
         $form->addSecondaryTabFields([
            'processemail' => [
                'tab'   => 'Process email Draft',
                'type'   => 'richeditor',
                'size'   => 'huge',
                'attributes'   => '<div>testtt</div>',
                'trigger'=>[
                    'action'=> 'show',
                    'field'=> 'status',
                    'condition'=> 'value[P]'
                ]
            ],
        ]);

    }
    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    public function processemailbuild($enquire) {
        $htmlstring ="";
        $htmlstring =  "<table border='0' width='100%' cellspacing='0' cellpadding='0'>";
        // return $htmlstring;
        $htmlstring .= "<tbody><tr><td>";
        $htmlstring .= "<p>Dear ".$enquire->full_name."</p>";
        $htmlstring .= "<p>Thank you for the opportunity to quote on your&nbsp;stay at Alam Puisi. At this stage we have availability for your requested dates <strong>in one of our ".$enquire->room_type.".</strong></p>";
        $htmlstring .= "<p><strong><span style='line-height: 1.6em;'>Room rate inclusive of:</span></strong></p>";
        $htmlstring .= "<ul>";
        $htmlstring .= "<li><strong><span style='line-height: 1.6em;'>21% tax and service charge</span></strong></li>";
        $htmlstring .= "<li><strong><span style='line-height: 1.6em;'>Welcome drink</span></strong></li>";
        $htmlstring .= "<li><strong><span style='line-height: 1.6em;'>American Buffet Breakfast</span></strong></li>";
        $htmlstring .= "</ul>";
        $htmlstring .= "<p>To secure a booking request we require a deposit equivalent to one night\'s stay. This can be&nbsp;<span style='line-height: 1.6em;'>made via our Secure Online Payment form by clicking on the Request Booking button below or&nbsp;</span><span style='line-height: 1.6em;'>you may prefer to telephone direct <a href='tel:+623618981234' target='_blank'>+62 361 8981234</a> with your payment details on We will then&nbsp;</span><span style='line-height: 1.6em;'>process and confirm your booking.</span></p>";
        $htmlstring .= "<p>Relax and enjoy one of the most beautiful places in the world....Bali, the famed Island of the&nbsp;<span style='line-height: 1.6em;'>Gods.</span></p>";
        $htmlstring .= "<p>Regards, <br /><strong>The Reservations Team</strong></p>";
        $htmlstring .= "</td></tr></tbody></table>";
        $htmlstring .= "<table border='0' width='100%' cellspacing='0' cellpadding='0'><tbody><tr><td>";
        $htmlstring .= "<p align='center'><strong>QUOTATION No. : #".$enquire->quotation_number."</strong><br /><br /> created on : ".$enquire->created_at."</p>";
        $htmlstring .= "</td></tr></tbody></table>";
        $htmlstring .= "<table border='0' width='100%' cellspacing='0' cellpadding='0'>";
        $htmlstring .= "<tbody><tr><td>";
        $htmlstring .= "<p>&nbsp;</p>";
        $htmlstring .= "</td></tr><tr><td colspan='3'><strong>Client Details</strong></td></tr><tr>";
        $htmlstring .= "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
        $htmlstring .= "<td>Enquiry Type</td>";
        $htmlstring .= "<td>: <strong>Group Enquiry</strong></td></tr>";
        $htmlstring .= "<tr><td>&nbsp;</td><td>Date</td>";
        $htmlstring .= "<td>: <strong>01 May 2017 - 15 May 2017</strong></td>";
        $htmlstring .= "</tr><tr>";
        $htmlstring .= "<td>&nbsp;</td><td># of nights</td><td>: <strong>14</strong></td></tr><tr><td>&nbsp;</td>";
        $htmlstring .= "<td>Quantity</td><td>: <strong>0 - ( type : ".$enquire->room_type." )</strong></td>";
        $htmlstring .= "</tr><tr><td>&nbsp;</td><td># of Persons</td>";
        $htmlstring .= "<td>: <strong>10 Adult, 8 Children, 0 Infant</strong></td>";
        $htmlstring .= "</tr><tr><td>&nbsp;</td><td>Name</td>";
        $htmlstring .= "<td>: <strong>".$enquire->full_name."</strong></td></tr><tr><td>&nbsp;</td><td valign='top'>Address</td>";
        $htmlstring .= "<td><strong>".$enquire->address.", <br />Ph. <br />Mobile. <br /><a href='mailto:".$enquire->email."'>".$enquire->email."</a></strong></td>";
        $htmlstring .= "</tr></tbody></table>";
        $htmlstring .= "<table border='0' width='100%' cellspacing='0' cellpadding='0'>";
        $htmlstring .= "<tbody><tr><td><p>&nbsp;</p></td></tr><tr>";
        $htmlstring .= "<td><strong>Accommodation Options</strong></td>";
        $htmlstring .= "</tr><tr><td>";
        $htmlstring .= "<p>The Trans Resort is The Best Hotels in Seminyak - Bali has been described as a palace of refined luxury and privileged hospitality having welcomed Kings, Queens, Presidents and other dignitaries over the years.</p>";
        $htmlstring .= "<p>Located 25-minute away from Bali\'s International Airport, the tranquility of the Bali resort spreads over 23 acres with an oasis of tropical gardens and sun-drenched shores. Immerse yourself in this five-star diamond hotel with its vibrant Balinese culture.</p>";
        $htmlstring .= "<p>Please don\'t hesitate to contact us if you have any further questions or would like some more information about the The Trans Resort is The Best Hotels in Seminyak - Bali.</p>";
        $htmlstring .= "</td></tr></tbody></table>";
        $htmlstring .= "<table border='0' width='100%' cellspacing='0' cellpadding='0'>";
        $htmlstring .= "<tbody><tr><td>";
        $htmlstring .= "<p><strong>Insert quotation details here</strong></p>";
        $htmlstring .= "</td></tr></tbody></table>";
        return $htmlstring;
    }

}