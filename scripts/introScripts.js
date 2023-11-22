const introComp = document.querySelector('.IntroComputer')
const introMobile = document.querySelector('.IntroMobile')

window.addEventListener('resize', intro_checkDimensions)
intro_checkDimensions()

function intro_checkDimensions() {
    if (window.screen.availWidth < 731) {
        introComp.style.display = 'none'
        introMobile.style.display = 'flex'
    }
    else {
        introComp.style.display = 'grid'
        introMobile.style.display = 'none'
    }
}