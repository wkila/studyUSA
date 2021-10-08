const burger = document.getElementById("burger"),
    tabMenu = document.querySelector(".tab-bar"),
    navContainer = document.querySelector("nav"),
    itemsBurger = document.querySelectorAll(".item-burger"),
    submitBtn = document.querySelector(".submit-btn-form"),
    body = document.querySelector("body"),
    contactForm = document.querySelector(".contact-form"),
    links = document.querySelectorAll("li"),
    line = document.querySelector(".line-cross"),
    containerLins = document.querySelector(".nav-items"),
    tabBurgerMenu = document.querySelector(".tab-burger-menu"),
    backgroundBlack = document.querySelector(".background-black")

let currentPos = 0
const navHeight = navContainer.offsetHeight

line.style.width = `${links[0].getBoundingClientRect().width}px`
line.style.transform = `translate(${links[0].offsetLeft - line.offsetLeft}px, 5px)`

containerLins.addEventListener("click", switcherLine)
tabMenu.addEventListener("click", tabClick)
body.addEventListener("click", contactHandler)
tabBurgerMenu.addEventListener("click", linkHandler)
burger.addEventListener("click", burgerClick)
navContainer.addEventListener("click", navHandler)

function burgerClick(event) {
    let item = event.target
    
    if(item.classList.contains("burger") || item.classList.contains("line-burger") || item.classList.contains("burger-menu")) {
        burger.classList.toggle("handleActive")
        tabMenu.classList.toggle("handleActive")
        backgroundBlack.classList.toggle("handleActive")
    }
}

function linkHandler(event) {
    event.preventDefault()
    let item = event.target

    if (item.nodeName === "A") {
        backgroundBlack.classList.toggle("handleActive")
    }
}

function tabClick(event) {
    event.preventDefault

    const activeTab = event.target
    if (activeTab.nodeName === "A") {
        slowScroll(activeTab)
        
        activeTab.parentElement.classList.add("active")

        itemsBurger.forEach(element => {
            element !== activeTab.parentElement ? element.classList.remove("active") : false
        })

        burger.classList.toggle("handleActive")
        tabMenu.classList.toggle("handleActive")
    }
}

function contactHandler(event) {
    let item = event.target

    if (item.classList.contains("contact-btn")) {
        contactForm.style.display = "block"
        contactForm.classList.toggle("activeContact")

    }else if (item.classList.contains("contact-form")){

        contactForm.classList.toggle("activeContact")
        contactForm.style.display = "none"
    }
}

function switcherLine(event) {
    
    const activeLink = event.target
    const widthActive = activeLink.getBoundingClientRect().width

    if (activeLink.nodeName === 'A') {
        line.style.width = `${widthActive}px`

        const width = activeLink.offsetLeft - line.offsetLeft
        line.style.transform = `translate(${width}px, 5px)`
    }
}

function navHandler(event) {
    event.preventDefault()

    let link = event.target

    if (link.classList.contains("link-item")) {
        slowScroll(link)
    }
}

function slowScroll(link) {
    let href = link.getAttribute('href').substring(1)

    const scrollTarget = document.getElementById(href)
    const elementPosition = scrollTarget.getBoundingClientRect().top

    console.log("FIRST", currentPos, elementPosition, scrollTarget)

    if (currentPos === 0) {
        currentPos = elementPosition
    }else if (currentPos < elementPosition) {
        currentPos = (elementPosition + currentPos)
    }else if (currentPos > elementPosition) {
        currentPos = (currentPos + elementPosition)
    }

    console.log("SECOND", currentPos, elementPosition, scrollTarget)

    window.scrollTo({
        top: currentPos,
        behavior: 'smooth'
    })
}







