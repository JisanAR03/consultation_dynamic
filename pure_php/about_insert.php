<?php
include "../include/conn.php";
$sub_title = $_POST['about_sub_title'];
$details = $_POST['about_details'];
$about_image = $_FILES['about_image']['name'];
$about_image_tmp = $_FILES['about_image']['tmp_name'];
$about_image_upload_path = "../images/".$about_image;
move_uploaded_file($about_image_tmp,$about_image_upload_path);
$sql ="INSERT INTO `posts` (`subtitle`, `details`, `image`, `type`) VALUES ('$sub_title','$details','$about_image','about')";
$result = mysqli_query($conn,$sql);
header("Location:../admin/index.php");
?>