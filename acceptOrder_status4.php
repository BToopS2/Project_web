<?php
    require_once("backend/filterUser.php");
    require_once("repository/cartRepository.php");
    $cartRepository = new cartRepository();
    $cartRepository->updateStatusById($_GET['id'],4);
    echo "<script>alert('Duyệt đơn thành công');
        window.location.href='cart_4.php';
        </script>";
    
?>