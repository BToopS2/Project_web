<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/orderRepository.php");
    $orderRepository = new OrderRepository();
    $orderRepository->deleteById($_GET['id']);
    echo "<script>alert('Hủy đơn thành công');
        window.location.href='order.php';
        </script>";
?>