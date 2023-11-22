<?php
    require_once(__DIR__."../../connect.php");
    class OrderRepository{
        public function insert($cart_id){
            global $conn;
            $sql = "insert into orders(cart_id,date) values($cart_id,'".date("Y-m-d")."')"; 
            mysqli_query($conn,$sql);
        }
        public function getAll(){
            global $conn;
            $sql = "select u.*,c.*,o.*,s.*, o.id as order_id, c.id as cart_id from user u join cart c on u.id=c.user_id join orders o on o.cart_id = c.id join shoe s on s.id = c.shoe_id"; 
            return mysqli_query($conn,$sql);
        }
        public function deleteById($id){
            global $conn;
            $sql = "delete from orders where id=$id"; 
            mysqli_query($conn,$sql);
        }
        
    }
?>