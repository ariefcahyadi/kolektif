<?php

class Controller extends CI_Controller 
{
    public $models;
    public $controllerId;
    public $isDefaultController;
    
    public function __construct()
    {
        parent::__construct();
        $this->controllerId = strtolower(get_class($this));
        $this->load->model($this->models);
    }
    public function render($view, Array $params = [])
    {
        $this->load->view('layouts/app', [
            'view' => $view,
            'params' => $params,
            'controllerId'=> $this->controllerId,
            'title' => ucfirst($this->controllerId),
        ]);
    }
}
