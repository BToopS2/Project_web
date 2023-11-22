<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/cartRepository.php");
    $cartRepository = new cartRepository();
    $cartRepository->updateStatusById($_GET['id'],3);
    echo "<script>alert('Duyệt đơn thành công');
        window.location.href='order.php';
        </script>";
    
?>