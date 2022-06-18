    <!-- "footer" start here -->
    <footer class="bg-black bg-opacity-75">
        <div class="container m-auto row d-flex justify-content-between text-white-50 py-4">
            <div class="col-12 text-center text-lg-start col-lg-3">
                <div class="text-info fw-bold px-1 mb-4"><h3>Our Hearquarters</h3></div>
                <div class="d-flex py-2 justify-content-center justify-content-lg-start">
                    <i class="bi pe-2 bi-telephone"></i>
                    <p>+088 212 386 5575</p>
                </div>
                <div class="d-flex py-2 justify-content-center justify-content-lg-start">
                    <i class="bi pe-2 bi-envelope"></i>
                    <p>helloxpart@gmail.com</p>
                </div>
                <div class="d-flex py-2 justify-content-center justify-content-lg-start">
                    <i class="bi pe-2 bi-geo-alt"></i>
                    <p>1010 Avenue of The MoonNewyork,NY 10018 US.</p>
                </div>
            </div>
            <div class="col-12 text-center text-lg-start col-lg-3 mt-4 mt-lg-0">
                <div class="text-info fw-bold px-1 mb-4"><h3>Company</h3></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Consultancy Profile</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">About Us</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Our Services</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">TeamMember</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Latest News</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">FAQ's</a></div>
            </div>
            <div class="col-12 text-center text-lg-start col-lg-3 mt-4 mt-lg-0">
                <div class="text-info fw-bold px-1 mb-4"><h3>Userful Links</h3></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Creeate Account</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Our process</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">People</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Company Profilile</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Client</a></div>
                <div class="py-1"><a class="text-decoration-none text-white-50" href="#">Help Desk</a></div>
            </div>
            <div class="col-12 text-center text-lg-start col-lg-3 mt-4 mt-lg-0">
                <div class="text-info fw-bold px-1 mb-4"><h3>Newsletter</h3></div>
                <div class="px-1 mb-4"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut porro magnam eum cum voluptatibus temporibus.</p></div>
                <div>
                    <form class="d-flex justify-content-center justify-content-lg-start py-2 py-lg-0" action="">
                        <input id="email-input" type="email" placeholder="Enter Your Email">
                        <button id="email-button" type="submit" class="text-info"><i class="bi bi-cursor-fill"></i></button>
                    </form>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <!-- some php code for social media link -->
                    <?php
                    $sql_fb_link = "SELECT tittle FROM `posts` WHERE `type` = 'fb_link'";
                    $result_fb_link = $conn->query($sql_fb_link);
                    $row_fb_link = $result_fb_link->fetch_assoc();
                    $sql_tw_link = "SELECT tittle FROM `posts` WHERE `type` = 'tw_link'";
                    $result_tw_link = $conn->query($sql_tw_link);
                    $row_tw_link = $result_tw_link->fetch_assoc();
                    $sql_pin_link = "SELECT tittle FROM `posts` WHERE `type` = 'pin_link'";
                    $result_pin_link = $conn->query($sql_pin_link);
                    $row_pin_link = $result_pin_link->fetch_assoc();
                    $sql_yt_link = "SELECT tittle FROM `posts` WHERE `type` = 'yt_link'";
                    $result_yt_link = $conn->query($sql_yt_link);
                    $row_yt_link = $result_yt_link->fetch_assoc();
                    ?>
                    <div><a target="blank" href="<?php echo $row_fb_link["tittle"] ?>"><i class="bi bi-facebook px-3 text-info"></a></i></div>
                    <div><a target="blank" href="<?php echo $row_tw_link["tittle"] ?>"><i class="bi bi-twitter px-3 text-info"></a></i></i></div>
                    <div><a target="blank" href="<?php echo $row_pin_link["tittle"] ?>"><i class="bi bi-pinterest px-3 text-info"></a></i></div>
                    <div><a target="blank" href="<?php echo $row_yt_link["tittle"] ?>"><i class="bi bi-youtube px-3 text-info"></a></i></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="py-2 position-relative">
            <div class="text-center text-white-50">
                <p>Copyright © 2022. All rights reserved. Design by <a target="blank" href="<?php echo $row_fb_link["tittle"] ?>" class="text-decoration-none text-white-50">Someone</a></p>
            </div>
            <button id="send-to-top" class="position-absolute end-0 top-0 border-0 px-2 me-3 mb-3 text-info"><i class="bi bi-arrow-up-circle-fill"></i></button>
        </div>
    </footer>
    <!-- "footer" end here -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
</body>
</html>