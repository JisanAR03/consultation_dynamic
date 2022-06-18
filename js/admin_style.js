// admin navbar active class setup from here
var nav_link_btn = document.getElementsByClassName("nav-link");
for (var i = 0; i < nav_link_btn.length; i++) {
    nav_link_btn[i].addEventListener("click", function() {
        var nav_link_btn_active = document.getElementsByClassName("active");
        nav_link_btn_active[0].className = nav_link_btn_active[0].className.replace(" active", "");
        this.className += " active";
    });
}
// admin navbar clicked function setup from here
// let d_inline_element = document.querySelectorAll(".d-inline");
let admin_home = document.getElementById("home");
function home_clicked(){
    if(admin_home.className == "d-none"){
        var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    admin_home.classList.replace("d-none","d-inline");
    }
    else{
        admin_home.className == "d-none"
    }
    // var element = document.getElementById("home");
    // element.classList.add("d-inline");
    // admin_home.classList.replace('d-none','d-inline');
}
function menu_clicked() {
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
var element = document.getElementById("menu");
element.classList.replace("d-none","d-inline");
}
function slide_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("slide");
    element.classList.replace("d-none","d-inline");
}
function index_element_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("index_element");
    element.classList.replace("d-none","d-inline");
}
function blog_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("blog");
    element.classList.replace("d-none","d-inline");
}
function profile_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("profile");
    element.classList.replace("d-none","d-inline");
}
function about_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("about");
    element.classList.replace("d-none","d-inline");
}
function contact_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("contact");
    element.classList.replace("d-none","d-inline");
}
function footer_clicked(){
    var d_inline = document.getElementsByClassName("d-inline");
for (var i = 0; i < d_inline.length; i++) {d_inline[i].classList.replace('d-inline','d-none');
}
    var element = document.getElementById("footer");
    element.classList.replace("d-none","d-inline");
}

// nav item insertion start from here
function nav_item_submit(){
    $.ajax({
        url: "../pure_php/nav_item_submit.php",
        method: "POST",
        data: {
            nav_add_check: "nav_add_check",
            nav_name: $("#nav_name").val(),
            nav_link: $("#nav_link").val(),
        },
        success: function(data){
            if(data == "success"){
                alert("successfully added menu item");
            }
            else{
                alert("some error occured");
            }
        }
    });
}



// index element setup from here

let notes = document.getElementById("notes");
function after_slide_clicked(){
    let exampleRadios1 = document.getElementById("exampleRadios1");
    if(exampleRadios1.checked == true){
        notes.innerHTML = "Type After Slide Item details here </br>and use 1 element only";
    }
}
function service_clicked(){
    let exampleRadios2 = document.getElementById("exampleRadios2");
    if(exampleRadios2.checked == true){
        notes.innerHTML = "Type ur service details here </br>and use 3 element only";
    }
}
function works_clicked(){
    let exampleRadios3 = document.getElementById("exampleRadios3");
    if(exampleRadios3.checked == true){
        notes.innerHTML = "Type ur works details here </br>and use 3 element only";
    }
}


// footer setup from here
let link_notes = document.getElementById("link_notes");
function fb_link_clicked(){
    let fb_link = document.getElementById("fb_link");
    if(fb_link.checked == true){
        link_notes.innerHTML = "Type Ur Facebook link here </br>and use 1 link only";
    }
}
function tw_link_clicked(){
    let tw_link = document.getElementById("tw_link");
    if(tw_link.checked == true){
        link_notes.innerHTML = "Type Ur Twitter link here </br>and use 1 link only";
    }
}
function pin_link_clicked(){
    let pin_link = document.getElementById("pin_link");
    if(pin_link.checked == true){
        link_notes.innerHTML = "Type Ur Pinterest link here </br>and use 1 link only";
    }
}
function yt_link_clicked(){
    let yt_link = document.getElementById("yt_link");
    if(yt_link.checked == true){
        link_notes.innerHTML = "Type Ur Youtube link here </br>and use 1 link only";
    }
}


// Add new admin setup from here
function new_admin_submit(){
    $.ajax({
        url: "../pure_php/new_admin_submit.php",
        method: "POST",
        data: {
            new_admin_check: "new_admin_check",
            admin_username: $("#new_admin_name").val(),
            admin_email: $("#new_admin_email").val(),
            admin_password: $("#new_admin_password").val(),
        },
        success: function(data){
            if(data == "success"){
                alert("successfully added New admin");
            }
            else{
                alert("Invalid email or password");
            }
        }
    });
}