<?php

require_once '../include/conn.php';

$id = $_POST['id'] ;

$sql = "DELETE FROM posts WHERE id='$id'";
$result = $conn->query($sql);

if($result){
    header('Location:../admin/index.php');
}
?>