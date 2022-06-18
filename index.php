<?php
include 'include/header.php';
?>
<?php
require_once 'include/slider.php';
?>
<?php
include 'include/conn.php';

$sql_after_slide = "SELECT `tittle`,`details`,`image` FROM posts WHERE type = 'after_slide'";
$result_after_slide = $conn->query($sql_after_slide);
$row_after_slide = $result_after_slide->fetch_assoc();
$sql_service = "SELECT `tittle`,`details`,`image` FROM posts WHERE type = 'service'";
$result_service = $conn->query($sql_service);
$sql_works = "SELECT `tittle`,`details`,`image` FROM posts WHERE type = 'works'";
$result_works = $conn->query($sql_works);
$sql_blog = "SELECT `id`,`tittle`,`subtitle`,`image`,`datetime` FROM posts WHERE type = 'blog'";
$result_blog = $conn->query($sql_blog);
?>
    <hr class="mt-2">
    <!-- "after slide" contant start here -->
    <div class="container mb-5">
    <div class="d-flex justify-content-between py-5 row">
        <div class="pe-4 col-10 m-auto col-lg-8 col-xl-6">
            <h3 class="text-info fw-bold mb-3 px-1"><?php echo $row_after_slide["tittle"]; ?></h3>
            <div class="we-are text-black-50 mb-4"><?php echo substr(($row_after_slide["details"]),0,250); ?></div>
            <div class="we-are text-black-50"><?php echo substr(($row_after_slide["details"]),0,450); ?></div>
        </div>
        <div class="col-10 m-auto col-lg-4 col-xl-6">
            <img class="img-fluid" src="images/<?php echo $row_after_slide["image"]; ?>" alt="we_are_alwayes">
        </div>
    </div>
    <!-- "after slide" contant end here -->
    <!-- "our service" start here -->
    <div class="mt-5">
        <h1 class="fw-bolder text-info text-center py-3">Our Services</h1>
        <div class="d-flex justify-content-between row">
            <?php while($row_service = $result_service->fetch_assoc()){ ?>
            <div class="col-xl-4 text-center">
                <img class="py-3 image-fluid" src="images/<?php echo $row_service["image"]; ?>" alt="why_choos_us">
                <h3 class="py-2"><?php echo $row_service["tittle"]; ?></h3>
                <p class="py-2 text-black-50"><?php echo $row_service["details"]; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- "our service" end here -->
    <!-- "our work" start here -->
    <div class="mt-4 mb-3">
        <h1 class="fw-bolder text-info text-center py-2">Our Works</h1>
        <div class="d-flex justify-content-between row py-4">
            <?php while($row_works =$result_works->fetch_assoc()){ ?>
            <div class="col-xl-4 text-center">
                <div><img class="py-3 image-fluid" width="50px" src="images/<?php echo $row_works["image"]; ?>" alt="Our Works"></div>
                <h3 class="py-2"><?php echo $row_works["tittle"]; ?></h3>
                <p class="py-2 text-black-50"><?php echo $row_works["details"]; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- "our work" end here -->
    <!-- "latest Blog" start here -->
    <div class="mt-5">
        <h1 class="fw-bolder text-info text-center py-3">Old Blog</h1>
        <div class="d-flex justify-content-between row">
            <?php $i = 0; while(($row_blog = $result_blog->fetch_assoc()) && $i<3){
                //if wanna show datetime using variable use below line
                // $show_date = date_create($row_blog["datetime"]);
                // $_show_date = date_format(date_create($row_blog["datetime"]),'d M Y')?>
            <div class="col-xl-4 text-center">
                <a class="text-decoration-none" href="blog_show.php?id=<?php echo $row_blog['id'];?>">
                <img class="py-3 image-fluid img-thumbnail" src="images/<?php echo $row_blog["image"]; ?>" alt="why_choos_us"></a>
                <br>                
                <div class="btn btn-info rounded-0 text-black fw-bold px-2 my-2 cursor-fix"><?php echo date_format(date_create($row_blog["datetime"]),'d M Y') ?></div>
                <h3 class="py-2"><?php echo substr($row_blog["tittle"],0,30); ?></h3>
                <p class="py-2 text-black-50"><?php echo substr($row_blog["subtitle"],0,180); ?></p>
            </div>
            <?php $i++;} ?>
        </div>
    </div>
    <!-- "latest news" end here -->
    </div>
<?php
include 'include/footer.php';
?>