let btn = document.querySelector("#sidenavBtn");
let sidenav = document.querySelector("#sideNav");
btn.onclick = function () {

    if (window.innerWidth < 768) {
        sidenav.classList.toggle("customActive");
    }
}