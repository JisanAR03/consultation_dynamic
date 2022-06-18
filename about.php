<?php
include 'include/header.php';
?>
<?php
include 'include/conn.php';
$sql_about = "SELECT `subtitle`,`details`,`image` FROM posts WHERE type = 'about'";
$result_about = $conn->query($sql_about);
$row_about = $result_about->fetch_assoc();
?>
<div class="space-top container-fluid bg-success bg-opacity-10 h-100">
    <h1 class="text-center py-3">About US</h1>
    <div class="d-flex justify-content-evenly row px-5 pb-5">
        <img class="img-fluid w-25 d-none d-lg-inline col-md-6" src="images/<?php echo $row_about["image"]; ?>" alt="image">
        <div class="col-12 col-lg-6">
            <h3 class="h3"><?php echo $row_about["subtitle"]; ?></h3>
            <p class="h5">
            <?php echo $row_about["details"]; ?>
            </p>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>