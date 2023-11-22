<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role']==0)
            header("Location: ../../index.php");
    }
    else
        header('Location: ../../auth/login');
?>