const leftPhoto = document.querySelectorAll('.MainPhoto')
const rightPhotos = document.querySelectorAll('.SamePhotos')
const leftRight_slider = document.querySelectorAll('.LeftRightPostMobile .swiper')

window.addEventListener('resize', leftRight_checkDimensions)
leftRight_checkDimensions()

function leftRight_checkDimensions() {
    if (window.screen.availWidth > 1161) {
        leftPhoto.forEach(el => {
            el.style.display = 'block'
        })
        rightPhotos.forEach(el => {
            el.style.display = 'grid'
        })
        leftRight_slider.forEach(el => {
            el.style.display = 'none'
        })
    }
    else {
        leftPhoto.forEach(el => {
            el.style.display = 'none'
        })
        rightPhotos.forEach(el => {
            el.style.display = 'none'
        })
        leftRight_slider.forEach(el => {
            el.style.display = 'block'
        })
    }
}
leftRight_slider.forEach(slider=> {
    new Swiper(slider, {
        pagination: {
            el: '.swiper-pagination'
        }
    })
})