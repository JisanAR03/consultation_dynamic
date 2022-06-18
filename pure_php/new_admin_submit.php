<?php
include '../include/conn.php';

if(isset($_POST["new_admin_check"])){
    $admin_username = $_POST["admin_username"];
    $admin_email = $_POST["admin_email"];
    $admin_password = $_POST["admin_password"];
    $sql = "INSERT INTO `admin_user` (`admin_username`,`admin_email`,`admin_password`) VALUES ('$admin_username','$admin_email','$admin_password')";
    $result = $conn->query($sql);
    if($result){
        echo "success";
    }
    else{
        echo "fail";
    }
}
?>