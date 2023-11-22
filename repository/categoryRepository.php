<?php
    require_once("../../connect.php");
    class CategoryRepository{
        public function insert($name,$price,$sale,$size,$color,$category_id,$file){
            global $conn;
            $sql = "insert into shoe(name,price,sale,size,color) values('$name',$price,$sale,$size,'$color')"; 
            mysqli_query($conn,$sql);     
        }
        public function getAll(){
            global $conn;
            $sql = "select * from category"; 
            return mysqli_query($conn,$sql);     
        }
    }
?>