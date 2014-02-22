<?php

class Controller {
    
    public $model;
    public $view;
    public $session;
    public $get_url;
            
    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
    }
}