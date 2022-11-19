<?php 
    class Article{
        private $main;
        private $data;

        public function __construct($main,$data){
            $this->main = $main;
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function getMain(){
            return $this->main;
        }
    }
?>