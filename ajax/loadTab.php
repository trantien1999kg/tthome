<?php 
    require_once 'ajaxConfig.php';
    
    if($func->isAjax()){
        if(isset($_POST['com'])){      
            $com = $_POST['com'];         
            $template ="";
            switch($com){
                case 'product':
                    $template="product";
                    break;
                case 'spmoi':
                    $template="product_thanhxuan";
                    break;
            }
            if($template != ""){
                include 'template/'.$template.'_tpl.php';
            }   
        }           
    }
   
?>