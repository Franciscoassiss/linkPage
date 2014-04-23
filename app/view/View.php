<?php
    
    class View
    {
        private $viewPath;
        private $header;
        private $footer;
        public $params;

        function __construct()
        {
            $this->viewPath = $_SERVER['DOCUMENT_ROOT'].'app/view/';
            $this->header = $this->viewPath.'blocks/header.php';
            $this->footer = $this->viewPath.'blocks/footer.php';
            $this->params = array();
        }

        public function addParameter($key,$value)
        {
            $this->params[$key] = $value;
        }

        public function constructView($view)
        {
            extract($this->params);
            include_once $this->header;
            include_once $this->viewPath . $view . '.php';
            include_once $this->footer;
        }
    }
