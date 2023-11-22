<?php      
class UploadFile{
    public function reArrayFiles(&$file_post)
    {
        $file_ary = array();
        $multiple = is_array($file_post['name']);
    
        $file_count = $multiple ? count($file_post['name']) : 1;
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++)
        {
            foreach ($file_keys as $key)
            {
                $file_ary[$i][$key] = $multiple ? $file_post[$key][$i] : $file_post[$key];
            }
        }
    
        return $file_ary;
    }
    public function upload($path){
        $files = $this->reArrayFiles($_FILES['files']);
        $arr = array();
        foreach($files as $file){
            $file_type = $file["type"];
            $file_size = $file["size"];
            if($file_size <= 2097152){
                move_uploaded_file($file["tmp_name"],$path."imageShoe/".$file["name"]);
                $link = "imageShoe/".$file["name"];
                array_push($arr,$link);
            }
        }
        return $arr;
    }
}
?>