const anchors = document.querySelectorAll('#about, #lingerie, #eyebrows, #contacts, #cosmetology')
window.addEventListener('resize', global_checkDimensions)
global_checkDimensions()

function global_checkDimensions() {
    if (window.screen.availWidth > 722) {
        anchors.forEach(el => {
            el.style.scrollMargin = '50px'
        })
    }
    else {
        anchors.forEach(el => {
            el.style.scrollMargin = '100px'
        })
        anchors[0].style.scrollMargin = '25px'
    }
}