<?php
    
    class Controller
    {
        public $view;
        public $model;

        function __construct()
        {
            $this->view = new View();
            
            if(isset($_GET['model'])) {
                $class = ucfirst($_GET['model']);
                $this->model = new $class();
                $this->view->addParameter('param', $this->model);
                
                if (isset($_GET['action'])) {
                    $action = $_GET['action'];
                    $result = $this->model->$action();
                    $this->view->addParameter('result', $result);    
                }
            }
            
            (isset($_GET['view'])) ? $this->view->constructView($_GET['view']) : $this->view->constructView('home');

        }
    }
