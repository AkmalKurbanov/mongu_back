<?php namespace Cbt\Media\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Photo extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Cbt.Media', 'Media', 'Photo');
    }
}
