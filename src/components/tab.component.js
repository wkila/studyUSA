
export class contactContainer {
    constructor(burger, tabMenu, itemsBurger) {
        this.burger = burger
        this.tabMenu = tabMenu
        this.itemsBurger = itemsBurger
    }

    tabClick(event) {
        const activeTab = event.target
    
        if (activeTab.nodeName === "A") {

            activeTab.parentElement.classList.add("active")

            this.itemsBurger.forEach(element => {
                element !== activeTab.parentElement ? element.classList.remove("active") : false
            })

            this.burger.classList.toggle("handleActive")
            this.tabMenu.classList.toggle("handleActive")
        }
    }

    switcherLine(event) {
        event.preventDefault()
    
        const activeLink = event.target
        const widthActive = activeLink.getBoundingClientRect().width

        if (activeLink.nodeName === 'A') {
            line.style.width = `${widthActive}px`

            const width = activeLink.offsetLeft - line.offsetLeft
            line.style.transform = `translate(${width}px, -5px)`
        }
    }
}

export function switcherLine(event) {
    event.preventDefault()
    
    const activeLink = event.target
    const widthActive = activeLink.getBoundingClientRect().width

    if (activeLink.nodeName === 'A') {
        line.style.width = `${widthActive}px`

        const width = activeLink.offsetLeft - line.offsetLeft
        line.style.transform = `translate(${width}px, -5px)`
    }
}


