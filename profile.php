<?php
include 'include/header.php';
?>
<?php
include 'include/conn.php';
$sql_employee = "SELECT `tittle`,`subtitle`,`details`,`image` FROM posts WHERE type = 'employee'";
$result_employee = $conn->query($sql_employee);
?>
<div class="space-top container-fluid">
    <h1 class="text-center pt-5">
        Our Employees profile
    </h1>
    <div>
        <div class="container-fluid py-5 row">
            <?php while($row_employee = $result_employee->fetch_assoc()){ ?>
            <div class="card px-2 py-4 col-4">
                <img src="images/<?php echo $row_employee["image"]; ?>" class="card-img-top img-fluid img-thumbnail" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?php echo $row_employee["tittle"]; ?></h5>
                <p class="card-subtitle fs-6 text-black-50"><?php echo $row_employee["subtitle"]; ?></p>
                <p class="card-text"><?php echo $row_employee["details"]; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>