<?php namespace Mindimedia\Enquire\Components;

use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Mindimedia\Enquire\Models\Enquire as EnquireEnquire;

class Enquiries extends ComponentBase
{
    /**
     * A collection of enquiries to display
     * @var Collection
     */
    public $enquiries;

    /**
     * Parameter to use for the page number
     * @var string
     */
    public $pageParam;


    /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noEnquiriesMessage;

    /**
     * Reference to the page name for linking to enquiries.
     * @var string
     */
    public $enquirePage;


    /**
     * If the enquire list should be ordered by another attribute.
     * @var string
     */
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'mindimedia.enquire::lang.settings.enquiries_title',
            'description' => 'mindimedia.enquire::lang.settings.enquiries_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'       => 'mindimedia.enquire::lang.settings.enquiries_pagination',
                'description' => 'mindimedia.enquire::lang.settings.enquiries_pagination_description',
                'type'        => 'string',
                'default'     => '{{ :page }}',
            ],
            'enquiriesPerPage' => [
                'title'             => 'mindimedia.enquire::lang.settings.enquiries_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'mindimedia.enquire::lang.settings.enquiries_per_page_validation',
                'default'           => '10',
            ],
            'noEnquiriesMessage' => [
                'title'        => 'mindimedia.enquire::lang.settings.enquiries_no_enquiries',
                'description'  => 'mindimedia.enquire::lang.settings.enquiries_no_enquiries_description',
                'type'         => 'string',
                'default'      => 'No enquiries found',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'mindimedia.enquire::lang.settings.enquiries_order',
                'description' => 'mindimedia.enquire::lang.settings.enquiries_order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc'
            ],
            'enquirePage' => [
                'title'       => 'mindimedia.enquire::lang.settings.enquiries_enquire',
                'description' => 'mindimedia.enquire::lang.settings.enquiries_enquire_description',
                'type'        => 'dropdown',
                'default'     => 'enquire/enquire',
                'group'       => 'Links',
            ],
        ];
    }
    
    public function getEnquirePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        return EnquireEnquire::$allowedSortingOptions;
    }

    public function onRun()
    {
        $this->prepareVars();

        $this->enquiries = $this->page['enquiries'] = $this->listEnquiries();

        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->enquiries->lastPage()) && $currentPage > 1)
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noEnquiriesMessage = $this->page['noEnquiriesMessage'] = $this->property('noEnquiriesMessage');

        /*
         * Page links
         */
        $this->enquirePage = $this->page['enquirePage'] = $this->property('enquirePage');
  }

    protected function listEnquiries()
    {
     
        /*
         * List all the enquiries, eager load their categories
         */
        $enquiries = EnquireEnquire::listFrontEnd([
            'page'       => $this->property('pageNumber'),
            'sort'       => $this->property('sortOrder'),
            'perPage'    => $this->property('enquiriesPerPage'),
        ]);

        /*
         * Add a "url" helper attribute for linking to each enquire and category
         */
        $enquiries->each(function($enquire) {
            $enquire->setUrl($this->enquirePage, $this->controller);

        });

        return $enquiries;
    }

}
