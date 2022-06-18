<?php
include "../include/conn.php";
$title = $_POST['title'];
$details = $_POST['details'];
$element_image = $_FILES['element_image']['name'];
$element_image_tmp = $_FILES['element_image']['tmp_name'];
$element_image_upload_path = "../images/".$element_image;
$radio_checked = $_POST['exampleRadios'];
if($radio_checked){
    move_uploaded_file($element_image_tmp,$element_image_upload_path);
    $sql ="INSERT INTO `posts` (`tittle`, `details`, `image`, `type`) VALUES ('$title','$details','$element_image','$radio_checked')";
    $result = mysqli_query($conn,$sql);
    header("Location:../admin/index.php");
}
?>