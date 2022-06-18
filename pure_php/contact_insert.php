<?php
include "../include/conn.php";
$sub_title = $_POST['contact_sub_title'];
$details = $_POST['contact_details'];
$contact_image = $_FILES['contact_image']['name'];
$contact_image_tmp = $_FILES['contact_image']['tmp_name'];
$contact_image_upload_path = "../images/".$contact_image;
move_uploaded_file($contact_image_tmp,$contact_image_upload_path);
$sql ="INSERT INTO `posts` (`subtitle`, `details`, `image`, `type`) VALUES ('$sub_title','$details','$contact_image','contact')";
$result = mysqli_query($conn,$sql);
header("Location:../admin/index.php");
?>