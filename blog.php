<?php
include 'include/header.php';
?>
<?php
include 'include/conn.php';
$sql_blog = "SELECT `id`,`tittle`,`subtitle`,`details`,`image` FROM posts WHERE type = 'blog'";
$result_blog = $conn->query($sql_blog);
?>
<div class="space-top bg-success bg-opacity-10">
<div class="space-top d-flex container m-auto justify-content-evenly row">
    <?php while($row_blog = $result_blog->fetch_assoc()){ ?>
    <div class="py-3 col-6">
        <div class="card" style="width: 33rem;">
            <img src="images/<?php echo $row_blog["image"]; ?>" class="card-img-top img-fluid img-thumbnail" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $row_blog["tittle"]; ?></h5>
            <p class="card-text"><?php echo substr($row_blog["subtitle"],0,200); ?></p>
            <a href="blog_show.php?id=<?php echo $row_blog['id'];?>" class="btn btn-primary">click here for more</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div>
<?php
include 'include/footer.php';
?>