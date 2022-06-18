<?php
//DB Connection
include "../include/conn.php";
//image uploading
$logo_name = $_FILES['logo']['name'];
$logo_tmp = $_FILES['logo']['tmp_name'];
$logo_upload_path = '../images/'.$logo_name;
if($logo_name){
    move_uploaded_file($logo_tmp,$logo_upload_path);
    header('location:../admin/index.php');
}
?>