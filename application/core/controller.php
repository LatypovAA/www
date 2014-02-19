<?php

class Controller {
    
    public $model;
    public $view;
    public $session;
            
    function __construct()
    {
        $this->view = new View();
    }
    
    function action_index()
    {
    }
}