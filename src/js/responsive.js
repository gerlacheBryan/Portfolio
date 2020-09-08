const burgerMenu = document.querySelector(".burger")
const menuUl = document.querySelector("ul")
const span = document.querySelector(".burger span")
console.log(burgerMenu,menuUl)

burgerMenu.addEventListener('click' ,(e)=>{
    menuUl.classList.toggle("responsiveMenu")
    span.classList.toggle('closeResponsiveMenu')

})