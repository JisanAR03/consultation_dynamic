<?php
include 'include/header.php';
?>
<?php
include 'include/conn.php';
$sql_contact = "SELECT `subtitle`,`details`,`image` FROM posts WHERE type = 'contact'";
$result_contact = $conn->query($sql_contact);
$row_contact = $result_contact->fetch_assoc();
?>
<div class="space-top container-fluid bg-success bg-opacity-10 h-100">
    <h1 class="text-center py-3">Contact US</h1>
    <div class="d-flex justify-content-evenly row px-5 pb-5">
        <img class="img-fluid w-25 d-none d-lg-inline col-md-6" src="images/<?php echo $row_contact["image"]; ?>" alt="image">
        <div class="col-12 col-lg-6">
            <h3 class="h3 pb-5">Call me - <?php echo $row_contact["subtitle"]; ?></h3>
            <h3 class="h3 py-5">Write me - <?php echo $row_contact["details"]; ?></h3>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>