<?php
include "../include/conn.php";
$title = $_POST['employee_title'];
$sub_title = $_POST['employee_sub_title'];
$details = $_POST['employee_details'];
$employee_type = "employee";
$employee_image = $_FILES['employee_image']['name'];
$employee_image_tmp = $_FILES['employee_image']['tmp_name'];
$employee_image_upload_path = "../images/".$employee_image;
move_uploaded_file($employee_image_tmp,$employee_image_upload_path);
$sql_employee ="INSERT INTO `posts`(`tittle`, `subtitle`, `details`, `image`,`type`) VALUES ('$title','$sub_title','$details','$employee_image','$employee_type')";
$result = mysqli_query($conn,$sql_employee);
header("Location:../admin/index.php");
?>