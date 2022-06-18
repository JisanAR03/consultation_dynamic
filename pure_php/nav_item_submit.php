<?php
include '../include/conn.php';

if(isset($_POST["nav_add_check"]) && ($_POST["nav_name"])){
    $nav_name = $_POST["nav_name"];
    $nav_link = $_POST["nav_link"];
    $nav_type = "nav";
    $sql = "INSERT INTO `posts` (`tittle`,`link`,`type`) VALUES ('$nav_name','$nav_link','$nav_type')";
    $result = $conn->query($sql);
    if($result){
        echo "success";
    }
    else{
        echo "fail";
    }
}
?>