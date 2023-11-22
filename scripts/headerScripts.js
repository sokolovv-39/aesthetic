function header_checkDimensions() {
    const mobHeader = document.querySelector('.HeaderMobile')
    const compHeader = document.querySelector('.HeaderComp')
    if (window.screen.availWidth > 722) {
        compHeader.style.display = "flex"
        mobHeader.style.display = "none"

        const compEls = document.querySelectorAll('.CompA')
        const tabletEls = document.querySelectorAll('.TabletA')
        if (window.screen.availWidth < 1364) {
            compEls.forEach(el => {
                el.style.display = "none"
            })
            tabletEls.forEach(el => {
                el.style.display = "block"
            })
        }
        else {
            compEls.forEach(el => {
                el.style.display = "block"
            })
            tabletEls.forEach(el => {
                el.style.display = "none"
            })
        }
    }
    else {
        compHeader.style.display = "none"
        mobHeader.style.display = "flex"
    }
}
window.addEventListener("resize", header_checkDimensions)

const mobileMenu = document.querySelector('.HiddenMenu')
const menuBar = document.querySelector('.MenuBar')
const xmark = document.querySelector('.Xmark')

menuBar.addEventListener('click', () => {
    mobileMenu.classList.remove('HiddenMenu')
    mobileMenu.classList.add('Menu')
})
xmark.addEventListener('click', () => {
    mobileMenu.classList.remove('Menu')
    mobileMenu.classList.add('HiddenMenu')
})

header_checkDimensions()

const headerMobile = document.querySelector('.Header')
window.addEventListener('scroll', () => {
    if (window.screen.availWidth <= 722) {
        if (window.scrollY > 0) {
            headerMobile.style.position = 'sticky'
            headerMobile.style.top = '0'
            headerMobile.style.zIndex = '11'
        }
    }
    else {
        headerMobile.style.position = 'relative'
    }
})

const mobMenuLinks = document.querySelectorAll('.MobileMenuLink')
mobMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.remove('Menu')
        mobileMenu.classList.add('HiddenMenu')
    })
})