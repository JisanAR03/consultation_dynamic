// fontend js code start here


let send_top = document.getElementById('send-to-top');
const goToTop = () => {
    document.body.scrollIntoView({
        behavior: "smooth",
    });
};
send_top.addEventListener('click', goToTop);


// fontend js code start here