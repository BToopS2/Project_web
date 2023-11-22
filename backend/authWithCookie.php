<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie == null){
        header("Location: auth/login");
    }
?>