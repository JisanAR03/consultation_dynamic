<?php
include 'conn.php';
$sql = "SELECT `tittle`,`link` FROM `posts` WHERE `type` = 'nav'";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- external css linked -->
    <link rel="stylesheet" href="css/style.css">
    <!-- icon cdn adden -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- favicon added -->
    <link rel="icon" type="images/x-icon" href="images/favicon.ico">
    <title>Home - Consult</title>
</head>
<body>
    <!-- "navbar" start here -->
    <div id="top-place" class="d-flex bg-info justify-content-between px-5 py-1 fixed-top">
        <nav class="navbar navbar-expand-lg ps-2 navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 fw-normal">
                    <?php
                        while($row = $result->fetch_assoc()) { ?>
                    <li class="nav-item pe-3">
                    <a class="nav-link <?php if($row["tittle"] === "Home"){ echo "fw-bold";} ?>" aria-current="page" href="<?php echo $row["link"];?>">
                        <?php echo $row["tittle"];?>
                    </a>
                    </li>
                    <?php } ?>
                </ul>
                </div>
            </div>
        </nav>
        <div class="p-2">
            <a href="index.php"><img src="images/logo.png" alt="website logo"></a>
        </div>
    </div>
    <!-- "navbar" end here -->