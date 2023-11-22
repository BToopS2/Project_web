<?php
    require_once("repository/cartRepository.php");
    $cartRepository = new CartRepository();
    $cartRepository->deleteByUserIdAndShoeId($_GET['userId'],$_GET['shoeId']);
    echo "<script>alert('Xóa thành công');
        window.location.href='cart.php';
        </script>";
?>