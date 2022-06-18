<!-- "slide" start here -->
<?php
include 'conn.php';
$sql = "SELECT `image` FROM `posts` where `type` = 'slide_img'";
$result = $conn->query($sql);
?>

<div class="h-75 position-relative d-none d-lg-inline">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner space-top">
                <?php $i = 0;
                while($row = $result->fetch_assoc()) { ?>
                    <div class='carousel-item <?php if($i === 0){echo "active"; $i++;} ?>' data-bs-interval='10000'>
                        <img src='images/<?php echo $row["image"];?>' class='d-block w-100' alt="...">
                        <div class='position-absolute slider-heading'>
                            <h1>Positive<span class='text-info'>Thinking</span> <br> Breeds Success</h1>
                            <!-- <button class="btn btn-info rounded-pill btn-outline-dark px-3 mt-2">Read More</button> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- "slide" end here -->