<?php
session_start();
if(isset($_SESSION["logedin"])){
    header("Location: index.php");
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/admin_login.css" />
    
    </head>
    
    <body>
    <form>
        <h2>Admin Login</h2>
        <input id="admin_username" type="text" name="admin_username" class="text-field" placeholder="Username" />
        <input id="admin_password" type="password" name="admin_password" class="text-field" placeholder="Password" />
        <a><input id="login_btn" type="submit" onclick="clicked_login_btn()"  class="button" value="Log In" /></a>
    </form>
    <script type="text/javascript" src="../js/admin_login.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    </body>