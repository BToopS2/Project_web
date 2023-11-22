<?php
    require_once(__DIR__."../../connect.php");
    class UserRepository{
        public function getAll(){
            global $conn;
            $sql = "select * from user"; 
            return mysqli_query($conn,$sql);
        }
        public function getById($id){
            global $conn;
            $sql = "select * from user where id=$id"; 
            return mysqli_query($conn,$sql)->fetch_assoc();
        }
        public function deleteById($id){
            global $conn;
            $sql = "delete from user where id=$id"; 
            mysqli_query($conn,$sql);
        }
        public function updateById($id,$fullname,$email,$phone,$role){
            global $conn;
            $sql = "update user set fullname='$fullname', email='$email', phone='$phone', role=$role where id=$id"; 
            mysqli_query($conn,$sql);
        }
    }
?>