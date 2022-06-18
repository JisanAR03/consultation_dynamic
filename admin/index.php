<?php
session_start();
if(!isset($_SESSION["logedin"]) || $_SESSION["logedin"] != true){
    header("Location: login.php");
    exit;
}
?> 
<?php
include '../include/conn.php';
include '../include/admin_header.php';
?>

<main id="admin_index">
    <!-- admin home start from here -->
    <div id="home" class="d-inline">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="card" style="width: 18rem; top:5rem;">
                <div class="card-body">
                    <h5 class="card-title">Menu</h5>
                    <h6 class="card-subtitle mb-2 text-muted">item of menu</h6>
                    <p class="card-text h2"><?php
                                $sql = "SELECT `id` FROM `posts` WHERE `type` = 'nav'";
                                $result = $conn->query($sql);
                                echo $result->num_rows;
                                ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem; top:5rem;">
                <div class="card-body">
                    <h5 class="card-title">Employee</h5>
                    <h6 class="card-subtitle mb-2 text-muted">item of menu</h6>
                    <p class="card-text h2"><?php
                                $sql = "SELECT `id` FROM `posts` WHERE `type` = 'employee'";
                                $result = $conn->query($sql);
                                echo $result->num_rows;
                                ?></p>
                </div>
            </div>
            <div class="card" style="width: 18rem; top:5rem;">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                    <h6 class="card-subtitle mb-2 text-muted">item of menu</h6>
                    <p class="card-text h2"><?php
                                $sql = "SELECT `id` FROM `posts` WHERE `type` = 'blog'";
                                $result = $conn->query($sql);
                                echo $result->num_rows;
                                ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- admin nav start from here -->
    <div id="menu" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div>
                <form>
                    <div class="form-group">
                        <label for="nav_name" class="h2 mt-5">Add Menu<br><em class="text-black-50 fs-6">use more then 10 meno is not good for ur site</em></label>
                        <input id="nav_name" type="text" class="form-control py-2 my-2" placeholder="type Menu name">
                        <label for="nav_link" class="fs-5 mt-5">location<br><em class="text-black-50 fs-6">make a file on ur index folder then use use this file name with ext</em></label>
                        <input id="nav_link" type="text" class="form-control py-2 my-2" placeholder="type file name">
                    </div>
                    <input type="submit" onclick="nav_item_submit()" class="btn btn-primary mt-3" value="Submit">
                </form>
                <div>
                    <label class="h2 mt-5">Add ur Logo <br><em class="text-black-50 fs-6">make sure that ur logo name is "logo.png" and size (208*55)px</em></label>
                    <form action="../pure_php/logo.php" method="post" enctype="multipart/form-data" class="input-group mb-3 my-3">
                        <input name="logo" type="file" class="form-control px-1" id="inputGroupFile01">
                        <button type="submit" class="input-group-text px-1">Upload</button>
                    </form>
                </div>
            </div>
            <div>
                <table class="table table-bordered table-striped mt-5">
                    <thead class="bg-secondary bg-opacity-10 text-black">
                        <tr>
                            <th>Nav Item</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                            <?php
                            $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'nav'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo '<tr><td>'.$row["tittle"].'</td><td>
                                <form action="../pure_php/delete_nav.php" method="POST">
                                <input type="hidden" name="id" value="'.$row["id"].' ">
                                <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                </form>
                                </td></tr>';
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- admin slide start from here -->
    <div id="slide" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div>
                <div>
                    <label class="h2 mt-5">Add Slide image <br><em class="text-black-50 fs-6">make sure that only use 4 image for slide and <br> for better experiance use (1920*700)px image</em></label>
                    <form action="../pure_php/slide.php" method="post" enctype="multipart/form-data" class="input-group mb-3 my-3">
                        <input name="slide" type="file" class="form-control px-1" id="inputGroupFile02">
                        <button type="submit" class="input-group-text px-1">Upload</button>
                    </form>
                </div>
            </div>
            <div>
                <table class="table table-bordered table-striped mt-5">
                    <thead class="bg-secondary bg-opacity-10 text-black">
                        <tr>
                            <th>Slide image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                            <?php
                            $sql = "SELECT `id`,`image` FROM `posts` WHERE `type` = 'slide_img'";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo '<tr><td>'.$row["image"].'</td><td>
                                <form action="../pure_php/slide_delete.php" method="POST">
                                <input type="hidden" name="id" value="'.$row["id"].' ">
                                <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                </form>
                                </td></tr>';
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- admin index_element start from here -->
    <div id="index_element" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/index_element.php" method="post" enctype="multipart/form-data">
                    <em id="notes" class="text-black fs-5 h3"></em>
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bolder text-secondary">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label fw-bolder text-secondary">Details</label>
                        <textarea type="text" name="details" class="form-control" id="details">
                        </textarea>
                    </div>
                    <div>
                        <label for="element_image" class="form-label fw-bolder text-secondary">Element Image</label>
                        <input name="element_image" type="file" class="form-control px-1" id="element_image">
                    </div>
                    <div class="mt-4">
                        <div id="after_slide" class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="after_slide" onclick="after_slide_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="exampleRadios1">
                                After slide Data
                            </label>
                            </div>
                            <div id="service" class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="service" onclick="service_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="exampleRadios2">
                                Our Service Data
                            </label>
                            </div>
                            <div id="works" class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="works" onclick="works_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="exampleRadios3">
                                Our Works Data
                            </label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>After Slider</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'after_slide'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>After Slider</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'service'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>After Slider</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'works'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- admin blog start from here -->
    <div id="blog" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/blog_insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="blog_title" class="form-label fw-bolder text-secondary">Title</label>
                        <input type="text" name="blog_title" class="form-control" id="blog_title">
                    </div>
                    <div class="mb-3">
                        <label for="blog_sub_title" class="form-label fw-bolder text-secondary">Sub Title</label>
                        <input type="text" name="blog_sub_title" class="form-control" id="blog_sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="blog_details" class="form-label fw-bolder text-secondary">Details</label>
                        <textarea type="text" name="blog_details" class="form-control" id="blog_details">
                        </textarea>
                    </div>
                    <div>
                        <label for="blog_image" class="form-label fw-bolder text-secondary">Blog Image</label>
                        <input name="blog_image" type="file" class="form-control px-1" id="blog_image">
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Blog Title</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'blog'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.substr($row["tittle"],0,60).'</td><td>
                                    <form action="../pure_php/delete_blog.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- admin profile start from here -->
    <div id="profile" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/employee_insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="employee_title" class="form-label fw-bolder text-secondary">Employee Name</label>
                        <input type="text" name="employee_title" class="form-control" id="employee_title">
                    </div>
                    <div class="mb-3">
                        <label for="employee_sub_title" class="form-label fw-bolder text-secondary">Employee Qualification</label>
                        <input type="text" name="employee_sub_title" class="form-control" id="employee_sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="employee_details" class="form-label fw-bolder text-secondary">Employee Details</label>
                        <textarea type="text" name="employee_details" class="form-control" id="employee_details">
                        </textarea>
                    </div>
                    <div>
                        <label for="employee_image" class="form-label fw-bolder text-secondary">Employee Image</label>
                        <input name="employee_image" type="file" class="form-control px-1" id="employee_image">
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Employee Name</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'employee'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_employee.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- admin about start from here -->
    <div id="about" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/about_insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="about_sub_title" class="form-label fw-bolder text-secondary">About Sub title</label>
                        <input type="text" name="about_sub_title" class="form-control" id="about_sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="about_details" class="form-label fw-bolder text-secondary">Employee Details</label>
                        <textarea type="text" name="about_details" class="form-control" id="about_details">
                        </textarea>
                    </div>
                    <div>
                        <label for="about_image" class="form-label fw-bolder text-secondary">Employee Image</label>
                        <input name="about_image" type="file" class="form-control px-1" id="about_image">
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>About Sub Title</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`subtitle` FROM `posts` WHERE `type` = 'about'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["subtitle"].'</td><td>
                                    <form action="../pure_php/delete_about.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- admin contact start from here -->
    <div id="contact" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/contact_insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="contact_sub_title" class="form-label fw-bolder text-secondary">Type ur Number for contact</label>
                        <input type="text" name="contact_sub_title" class="form-control" id="contact_sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="contact_details" class="form-label fw-bolder text-secondary">Type ur email for contact</label>
                        <input type="text" name="contact_details" class="form-control" id="contact_details">
                    </div>
                    <div>
                        <label for="contact_image" class="form-label fw-bolder text-secondary">Contact page image</label>
                        <input name="contact_image" type="file" class="form-control px-1" id="contact_image">
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Number</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`subtitle` FROM `posts` WHERE `type` = 'contact'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["subtitle"].'</td><td>
                                    <form action="../pure_php/delete_contact.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- admin footer start from here -->
    <div id="footer" class="d-none">
        <div class="m-auto text-center d-flex justify-content-evenly">
            <div class="mt-5">
                <form action="../pure_php/link_insert.php" method="post" enctype="multipart/form-data">
                    <em id="link_notes" class="text-black fs-5 h3"></em>
                    <div class="mb-3">
                        <label for="link_name" class="form-label fw-bolder text-secondary">Type ur Link here</label>
                        <input type="text" name="link_name" class="form-control" id="link_name">
                    </div>
                    <div class="mt-4">
                            <div class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="link" id="fb_link" value="fb_link" onclick="fb_link_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="fb_link">
                                Facebook Link
                            </label>
                            </div>
                            <div class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="link" id="tw_link" value="tw_link" onclick="tw_link_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="tw_link">
                                Twitter Link
                            </label>
                            </div>
                            <div class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="link" id="pin_link" value="pin_link" onclick="pin_link_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="pin_link">
                                Pinterest Link
                            </label>
                            </div>
                            <div class="form-check py-1 my-1">
                            <input class="form-check-input" type="radio" name="link" id="yt_link" value="yt_link" onclick="yt_link_clicked()">
                            <label class="form-check-label fw-bold text-secondary" for="yt_link">
                                Youtube Link
                            </label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-2 my-3">Submit</button>
                </form>
            </div>
            <div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Facebook Link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'fb_link'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Twitter Link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'tw_link'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Pinterest Link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'pin_link'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table class="table table-bordered table-striped mt-5">
                        <thead class="bg-secondary bg-opacity-10 text-black">
                            <tr>
                                <th>Youtube Link</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="table_body">
                                <?php
                                $sql = "SELECT `id`,`tittle` FROM `posts` WHERE `type` = 'yt_link'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_assoc()){
                                    echo '<tr><td>'.$row["tittle"].'</td><td>
                                    <form action="../pure_php/delete_after_slider.php" method="POST">
                                    <input type="hidden" name="id" value="'.$row["id"].' ">
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
                                    </form>
                                    </td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include '../include/admin_footer.php';
?>
