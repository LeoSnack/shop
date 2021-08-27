const navMobileListContainer = document.querySelector(".navMobileListContainer");
const navBtn = document.querySelector(".navBtn");
const priceRowBtn = document.querySelector(".priceRowBtn");
const priceRowMenu = document.querySelector(".costlUUl");
const productCell = document.getElementsByClassName("productCell");
const productCellImg = document.getElementsByClassName("productCellImg");
const logInTrigger = document.querySelector(".logInTrigger");
const logInModal = document.querySelector(".logIn");
const logInClose = document.querySelector(".logInClose");
const navLogInTrigger = document.querySelector(".navLogInTrigger");

navBtn.addEventListener("click", function() {
    navMobileListContainer.classList.toggle("navExpand");
});

priceRowBtn.addEventListener("click", function() {
    priceRowMenu.classList.toggle("shown");
});
for (let i = 0; i < productCell.length; i++) {
    productCell[i].addEventListener("mouseover", () => {
        productCellImg[i].src = "./assets/img/testProduct.jpeg";
    });
    productCell[i].addEventListener("mouseout", () => {
        productCellImg[i].src = "./assets/img/testProductBefore.jpeg";
    });
}
logInTrigger.addEventListener("click", function() {
    logInModal.classList.toggle("expand");
});
logInClose.addEventListener("click", function() {
    logInModal.classList.toggle("expand");
});
navLogInTrigger.addEventListener("click", function() {
    logInModal.classList.toggle("expand");
});