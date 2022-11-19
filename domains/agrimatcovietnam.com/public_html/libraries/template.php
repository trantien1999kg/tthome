<?php
    require_once "constant.php";
    class template{

        /**Main class for template*/

        private $module = array();

        private $func;

        /**
         * @param $main String
         * 
         * Contruct 
        */
        public function __construct($func){
            $this->func = $func;
        }

        public function push($module){
            if(is_array($module)){
                foreach($module as $key => $value){
                    $this->module[$key] = $value;
                }
            }
        }

        public function getData($name){
            return $this->module[$name]->getData();
        }
        public function getMain($name){
            return $this->module[$name]->getMain();
        }

        public function getTemplate($name,$article,$template){
            global $config;
            $this->push([$name=>$article]);
            $data = $this->getData($name);
            $main = $this->getMain($name);
            $func = $this->func;
            $lang = isset($_SESSION['lang'])?$_SESSION['lang'] : 'vi';
            include $template.'.php';
        }

        public function getModule(){
            return $this->module;
        }

        public function getCustom($template,$status = false){
            if($status){
                $str = 'templates/custom/'.$template.'.php';
            }else{
                $str = '../templates/custom/'.$template.'.php';
            }        
            include $str;
        }
    }
?>