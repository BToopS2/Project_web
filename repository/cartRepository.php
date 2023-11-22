<?php
    require_once(__DIR__."../../connect.php");
    class CartRepository{
        public function insert($user_id,$shoe_id,$shoe_color,$shoe_size,$status){
            global $conn;
            $sql = "insert into cart(user_id,shoe_id,shoe_color,shoe_size,status) values($user_id,$shoe_id,'$shoe_color',$shoe_size,$status)"; 
            mysqli_query($conn,$sql);
            return mysqli_insert_id($conn); 
        }
        public function findByUserIdAndShoeId($user_id,$shoe_id){
            global $conn;
            $sql = "select * from cart where user_id=$user_id and shoe_id=$shoe_id"; 
            return mysqli_query($conn,$sql);
        }
        public function findByUserIdAndShoeIdAndStatus($user_id,$shoe_id,$status){
            global $conn;
            $sql = "select * from cart where user_id=$user_id and shoe_id=$shoe_id and status=$status"; 
            return mysqli_query($conn,$sql);
        }
        public function findByUserId($user_id){
            global $conn;
            $sql = "select * from cart where user_id=$user_id"; 
            return mysqli_query($conn,$sql);
        }
        public function deleteByUserIdAndShoeId($user_id,$shoe_id){
            global $conn;
            $sql = "delete from cart where user_id=$user_id and shoe_id=$shoe_id"; 
            mysqli_query($conn,$sql);
        }
        public function findByUserIdAndStatus($user_id,$status){
            global $conn;
            $sql = "select * from cart where user_id=$user_id and status=$status"; 
            return mysqli_query($conn,$sql);
        }
        public function updateStatusByUserIdAndShoeId($user_id,$shoe_id,$status){
            global $conn;
            $sql = "update cart set status = $status where user_id = $user_id and shoe_id = $shoe_id"; 
            return mysqli_query($conn,$sql);
        }
        public function updateStatusById($id,$status){
            global $conn;
            $sql = "update cart set status = $status where id = $id"; 
            return mysqli_query($conn,$sql);
        }
    }
?>