const shoes_banner = document.querySelector(".inside-shoes")
const shoes_link = document.querySelector(".shoes-link")
const header = document.querySelector(".header-nav")


shoes_link.addEventListener('mouseover', () => {
 shoes_banner.classList.add("active")
})



shoes_link.addEventListener('mouseout', () => {
    shoes_banner.classList.remove("active")
})

shoes_banner.addEventListener('mouseout', () => {
    shoes_banner.classList.remove("active")
})


shoes_banner.addEventListener('mouseover', () => {
    shoes_banner.classList.add("active")
})



