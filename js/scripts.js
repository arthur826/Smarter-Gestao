const BtnMenuMobile = document.getElementById("js-btnMobile");
const overlay = document.querySelector(".js-overlay");

function OpenMenuMobile() {
    document.documentElement.classList.add("menu-opened");
}

function CloseMenuMobile() {
    document.documentElement.classList.remove("menu-opened");
}

BtnMenuMobile.addEventListener("click", OpenMenuMobile);
overlay.addEventListener("click", CloseMenuMobile);

//*//////////////*/


function ScrolledHeader() {
    if(window.scrollY > 0) {
        document.documentElement.classList.add("header-scrolled");
    } else {
        document.documentElement.classList.remove("header-scrolled");
    }
}


window.addEventListener("scroll", ScrolledHeader);



