const menuOpen = document.querySelector(".menuOpen");
const menuClose = document.querySelector(".menuClose");
const menuDrawer = document.querySelector(".menuDrawer");
const mobileMenus = document.querySelectorAll(".mobileMenus");
const menuModal = document.querySelector(".menuModal");

const toggleModal = () => {
    menuModal.classList.toggle("active");
};

if (menuOpen && menuClose && menuDrawer && menuModal) {
    menuOpen.addEventListener("click", toggleModal);
    menuClose.addEventListener("click", toggleModal);
    menuModal.addEventListener("click", toggleModal);
    menuDrawer.addEventListener("click", (e) => {
        e.stopPropagation();
    });
    mobileMenus.forEach((menu) => {
        menu.addEventListener("click", toggleModal);
    });
}
