<?php
//DB Connection
include "../include/conn.php";
//image uploading
$slide_name = $_FILES['slide']['name'];
$slide_tmp = $_FILES['slide']['tmp_name'];
$slide_upload_path = '../images/'.$slide_name;
if($slide_name){
    move_uploaded_file($slide_tmp,$slide_upload_path);
    $sql = "INSERT INTO `posts`(`image`, `type`) VALUES ('$slide_name','slide_img')";
    $result = mysqli_query($conn,$sql);
    header('location:../admin/index.php');
}
?>