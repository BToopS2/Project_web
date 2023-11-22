<?php
    class CheckEmpty{
        public function __construct() {}
        public static function checkEmpty($arr){
            foreach ($arr as $a) {
                if(empty($_POST[$a])){
                    echo '<script>alert("'.$a.' không được để trống")</script>';
                    return false;
                }
            }
            return true;
        }
    }
?>