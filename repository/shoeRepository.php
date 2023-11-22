<?php
    require_once(__DIR__."../../connect.php");
    class ShoeRepository{
        public function insert($name,$price,$sale,$size,$color,$review,$category_id){
            global $conn;
            $sql = "insert into shoe(name,price,sale,size,color,review,category_id) values('$name',$price,$sale,'$size','$color','$review',$category_id)"; 
            mysqli_query($conn,$sql);
            return mysqli_insert_id($conn); 
        }
        public function getAll($limit){
            global $conn;
            $sql = "select s.id as shoe_id, s.name as shoe_name, s.*, c.* from shoe s join category c on c.id=s.category_id order by s.id desc "; 
            if($limit != null)
                $sql.="limit 0,".$limit;
            return mysqli_query($conn,$sql);     
        }
        public function getById($id){
            global $conn;
            $sql = "select s.id as shoe_id, s.name as shoe_name, s.*, c.* from shoe s join category c on c.id=s.category_id and s.id=$id"; 
            return mysqli_query($conn,$sql);
        }
        public function deleteById($id){
            global $conn;
            $sql = "delete from shoe where id=$id"; 
            mysqli_query($conn,$sql);
        }
        public function update($id,$name,$price,$sale,$size,$color,$review,$category_id){
            global $conn;
            $sql = "update shoe set name='$name', price=$price, sale=$sale, size='$size', color='$color',review='$review',category_id=$category_id where id=$id"; 
            mysqli_query($conn,$sql);  
        }
        public function countShoeByCategoryName($name){
            global $conn;
            $sql = "select * from shoe s join category c on c.id=s.category_id";
            if($name != '')
                $sql = "select * from shoe s join category c on c.id=s.category_id and c.name='$name'"; 
            return mysqli_query($conn,$sql)->num_rows;
        }
        public function addImage($id,$linkImage){
            global $conn;
            $sql = "insert into shoe_image(shoe_id,link_image) values($id,'$linkImage')";
            mysqli_query($conn,$sql);
        }
        public function getImage($id){
            global $conn;
            $sql = "select link_image from shoe_image where shoe_id=$id";
            return mysqli_query($conn,$sql);
        }
        public function deleteImage($id){
            global $conn;
            $sql = "delete from shoe_image where id=$id";
            mysqli_query($conn,$sql);
        }
    }
?>