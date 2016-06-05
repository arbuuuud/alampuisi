<?php namespace Mindimedia\Enquire;

use Backend;
use Controller;
use System\Classes\PluginBase;
use Mindimedia\Enquire\Classes\TagProcessor;
use Event;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'mindimedia.enquire::lang.plugin.name',
            'description' => 'mindimedia.enquire::lang.plugin.description',
            'author'      => 'Mindimedia',
            'icon'        => 'icon-pencil',
            'homepage'    => 'http://mindimedia.com'
        ];
    }

    public function registerComponents()
    {
        return [
            'Mindimedia\Enquire\Components\Enquire'       => 'enquireEnquire',
            'Mindimedia\Enquire\Components\Enquiries'      => 'enquireEnquiries',
        ];
    }

    public function registerPermissions()
    {
        return [
            'mindimedia.enquire.access_enquiries'         => ['tab' => 'mindimedia.enquire::lang.enquire.tab', 'label' => 'mindimedia.enquire::lang.enquire.access_enquiries'],
            'mindimedia.enquire.access_other_enquiries'   => ['tab' => 'mindimedia.enquire::lang.enquire.tab', 'label' => 'mindimedia.enquire::lang.enquire.access_other_enquiries'],
            'mindimedia.enquire.access_import_export' => ['tab' => 'mindimedia.enquire::lang.enquire.tab', 'label' => 'mindimedia.enquire::lang.enquire.access_import_export']
        ];
    }

    public function registerNavigation()
    {
        return [
            'enquire' => [
                'label'       => 'mindimedia.enquire::lang.enquire.menu_label',
                'url'         => Backend::url('mindimedia/enquire/enquiries'),
                'icon'        => 'icon-pencil',
                'permissions' => ['mindimedia.enquire.*'],
                'order'       => 500,

                'sideMenu' => [
                    'enquiries' => [
                        'label'       => 'mindimedia.enquire::lang.enquire.enquiries',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('mindimedia/enquire/enquiries'),
                        'permissions' => ['mindimedia.enquire.access_enquiries']
                    ]
                ]
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Mindimedia\Enquire\FormWidgets\Preview' => [
                'label' => 'Preview',
                'code'  => 'preview'
            ]
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register()
    {
        /*
         * Register the image tag processing callback
         */
        TagProcessor::instance()->registerCallback(function($input, $preview){
            if (!$preview) return $input;

            return preg_replace('|\<img src="image" alt="([0-9]+)"([^>]*)\/>|m',
                '<span class="image-placeholder" data-index="$1">
                    <span class="upload-dropzone">
                        <span class="label">Click or drop an image...</span>
                        <span class="indicator"></span>
                    </span>
                </span>',
            $input);
        });
    }

    public function boot()
    {
        /*
         * Register menu items for the Mindimedia.Pages plugin
         */
        Event::listen('pages.menuitem.listTypes', function() {
            return [
               
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type) {
          
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
          
        });
    }
}
