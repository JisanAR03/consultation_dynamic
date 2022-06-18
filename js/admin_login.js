// admin_login js code start here
function clicked_login_btn(){
    $.ajax({
        url: "../pure_php/admin_login.php",
        method: "POST",
        data: {
            login_check: "login_check",
            admin_username: $("#admin_username").val(),
            admin_password: $("#admin_password").val()
        },
        success: function(data){
            if(data == 1){
                window.location.href = "index.php";
            }
            else{
                alert("Invalid email or password");
            }
        }
    });
}
// admin_login js code end here