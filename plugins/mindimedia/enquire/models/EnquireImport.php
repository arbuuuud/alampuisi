<?php namespace Mindimedia\Enquire\Models;

use Backend\Models\ImportModel;
use Backend\Models\User as AuthorModel;
use ApplicationException;

/**
 * Enquire Import Model
 */
class EnquireImport extends ImportModel
{
    public $table = 'mindimedia_enquire_enquiries';

    /**
     * Validation rules
     */
    public $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    protected $authorEmailCache = [];


    public function getDefaultAuthorOptions()
    {
        return AuthorModel::all()->lists('full_name', 'email');
    }


    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);


        /*
         * Import
         */
        foreach ($results as $row => $data) {
            try {

                if (!$title = array_get($data, 'title')) {
                    $this->logSkipped($row, 'Missing enquire title');
                    continue;
                }

                /*
                 * Find or create
                 */
                $enquire = Enquire::make();

                if ($this->update_existing) {
                    $enquire = $this->findDuplicateEnquire($data) ?: $enquire;
                }

                $enquireExists = $enquire->exists;

                /*
                 * Set attributes
                 */
                $except = ['id', 'author_email'];

                foreach (array_except($data, $except) as $attribute => $value) {
                    $enquire->{$attribute} = $value ?: null;
                }

                if ($author = $this->findAuthorFromEmail($data)) {
                    $enquire->user_id = $author->id;
                }

                $enquire->forceSave();


                /*
                 * Log results
                 */
                if ($enquireExists) {
                    $this->logUpdated();
                }
                else {
                    $this->logCreated();
                }
            }
            catch (Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }
        }
    }

    protected function findAuthorFromEmail($data)
    {
        if (!$email = array_get($data, 'email', $this->default_author)) {
            return null;
        }

        if (isset($this->authorEmailCache[$email])) {
            return $this->authorEmailCache[$email];
        }

        $author = AuthorModel::where('email', $email)->first();
        return $this->authorEmailCache[$email] = $author;
    }

    protected function findDuplicateEnquire($data)
    {
        if ($id = array_get($data, 'id')) {
            return Enquire::find($id);
        }

        $title = array_get($data, 'title');
        $enquire = Enquire::where('title', $title);

        if ($slug = array_get($data, 'slug')) {
            $enquire->orWhere('slug', $slug);
        }

        return $enquire->first();
    }


}