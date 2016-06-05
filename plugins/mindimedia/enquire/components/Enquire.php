<?php namespace Mindimedia\Enquire\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Mindimedia\Enquire\Models\Enquire as EnquireEnquire;

class Enquire extends ComponentBase
{
    /**
     * @var Mindimedia\Enquire\Models\Enquire The enquire model used for display.
     */
    public $enquire;


    public function componentDetails()
    {
        return [
            'name'        => 'mindimedia.enquire::lang.settings.enquire_title',
            'description' => 'mindimedia.enquire::lang.settings.enquire_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'mindimedia.enquire::lang.settings.enquire_slug',
                'description' => 'mindimedia.enquire::lang.settings.enquire_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->enquire = $this->page['enquire'] = $this->loadEnquire();
    }

    protected function loadEnquire()
    {
        $slug = $this->property('slug');
        $enquire = EnquireEnquire::isPublished()->where('slug', $slug)->first();


        return $enquire;
    }
}
