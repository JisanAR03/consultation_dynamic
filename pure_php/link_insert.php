<?php
include "../include/conn.php";
$link_name = $_POST['link_name'];
$radio_checked = $_POST['link'];
if($radio_checked){
    $sql ="INSERT INTO `posts` (`tittle`, `type`) VALUES ('$link_name','$radio_checked')";
    $result = mysqli_query($conn,$sql);
    header("Location:../admin/index.php");
}
?>