<?php
include 'include/header.php';
?>
<?php
include 'include/conn.php';
$id = $_GET['id'];
$sql_blog = "SELECT `tittle`,`subtitle`,`details`,`image` FROM posts WHERE id = $id";
$result_blog = $conn->query($sql_blog);
$row_blog = $result_blog->fetch_assoc();
?>
<main class="space-top bg-secondary bg-opacity-25" style="margin-bottom: -16px;">
    <div class=" container container-fluid">
        <img src="images/<?php echo $row_blog["image"]; ?>" class="img-fluid" alt="">
        <hr class="mt-4">
        <h2 class="text-center px-3 my-4 fw-bolder"><?php echo $row_blog["tittle"]; ?></h2>
        <em class="fs-4 text-black-50 px-2 my-4"><?php echo $row_blog["subtitle"]; ?></em>
        <hr class="my-5">
        <p class="fs-5 pb-5"><?php echo $row_blog["details"]; ?></p>
    </div>
</main>
<?php
include 'include/footer.php';
?>