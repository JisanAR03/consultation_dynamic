<?php
include "../include/conn.php";
$title = $_POST['blog_title'];
$sub_title = $_POST['blog_sub_title'];
$_sub_title = mysqli_real_escape_string($conn,$sub_title);
$details = $_POST['blog_details'];
$_details = mysqli_real_escape_string($conn,$details);
$blog_image = $_FILES['blog_image']['name'];
$blog_image_tmp = $_FILES['blog_image']['tmp_name'];
$blog_image_upload_path = "../images/".$blog_image;
move_uploaded_file($blog_image_tmp,$blog_image_upload_path);
$sql ="INSERT INTO `posts` (`tittle`, `subtitle`, `details`, `image`, `type`) VALUES ('$title','$_sub_title','$_details','$blog_image','blog')";
$result = mysqli_query($conn,$sql);
header("Location:../admin/index.php");
?>