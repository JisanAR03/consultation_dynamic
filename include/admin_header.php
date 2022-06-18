<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark float-start" style="width: 18rem; height: 40rem;">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-dash-square-fill mx-2 fs-4"></i>
            <span class="fs-4 px-3">Dashboard</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item" onclick="home_clicked()">
                <a href="#" class="nav-link text-white active">
                    <i class="bi bi-house-fill me-2"></i>
                    Home
                </a>
            </li>
            <li onclick="menu_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-menu-button-wide"></i>
                    Header
                </a>
            </li>
            <li onclick="slide_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-file-easel"></i>
                    Slide
                </a>
            </li>
            <li onclick="index_element_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-x-diamond"></i>
                    Index Element
                </a>
            </li>
            <li onclick="blog_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-blockquote-right"></i>
                    Blog
                </a>
            </li>
            <li onclick="profile_clicked()">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-person-circle me-2"></i>
                    Employees profile
                </a>
            </li>
            <li onclick="about_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-clipboard-plus-fill"></i>
                    About
                </a>
            </li>
            <li onclick="contact_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-person-rolodex"></i>
                    Contact
                </a>
            </li>
            <li onclick="footer_clicked()">
                <a href="#" class="nav-link text-white">
                <i class="bi me-2 bi-file-ruled"></i>
                    footer
                </a>
            </li>
        </ul>
        <hr>
        <div class="d-flex justify-content-evenly">
            <div class="text-black">
                <i class="bi bi-file-person-fill rounded-circle me-2" width="32" height="32"></i>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary rounded-pill text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Admin
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="form-group">
                        <div class="modal-body">
                            <div>
                                <label for="new_admin_name" class="fw-bold">Admin user name</label>
                                <input id="new_admin_name" type="text" class="form-control py-2 my-2" placeholder="type new admin user name">
                            </div>
                            <div>
                                <label class="fw-bold">Admin Email</label>
                                <input id="new_admin_email" type="email" class="form-control py-2 my-2" placeholder="type new admin email">
                            </div>
                            <div>
                                <label class="fw-bold">Admin Password</label>
                                <input id="new_admin_password" type="password" class="form-control py-2 my-2" placeholder="type new admin password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" onclick="new_admin_submit()" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
            </div>
            <div>
                <button class="btn btn-light btn-outline-secondary">
                    <a href="../include/logout.php" class="text-decoration-none fw-bold"><i class="bi bi-box-arrow-in-left me-2"></i>logout</a>
                </button>
            </div>
        </div>
    </div>