<?php
    class TrocarUrl{
        public function trocarUrl($url){
            if(empty($url)){
                $url = "../../admin/tela/home.php";
            }else{
                $url = "../../admin/tela/$url.php";
            }
            include_once($url);
        }
    }
?>