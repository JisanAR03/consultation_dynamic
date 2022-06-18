<?php
include '../include/conn.php';

if(isset($_POST["login_check"]) && ($_POST["admin_username"]) && ($_POST["admin_password"])){
    $admin_username = $_POST["admin_username"];
    $admin_password = $_POST["admin_password"];
    $sql = "SELECT admin_username,admin_password FROM admin_user WHERE admin_username = '".$admin_username."' AND admin_password = '".$admin_password."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    if($row === 1){
        session_start();
        $_SESSION["logedin"] = true;
        $_SESSION["admin_username"] = $admin_username;
        echo ($row);
    }
    else{
        echo ($row);
    }
}
?>