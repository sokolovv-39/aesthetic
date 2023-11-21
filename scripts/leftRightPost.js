const leftPhoto = document.querySelector('.MainPhoto')
const rightPhotos = document.querySelector('.SamePhotos')
const slider = document.querySelector('.LeftRightPostMobile .swiper')

window.addEventListener('resize', checkDimensions)
checkDimensions()

function checkDimensions() {
    if (window.screen.availWidth > 1161) {
        leftPhoto.style.display = 'block'
        rightPhotos.style.display = 'grid'
        slider.style.display = 'none'
    }
    else {
        leftPhoto.style.display = 'none'
        rightPhotos.style.display = 'none'
        slider.style.display = 'block'
    }
}

new Swiper(slider, {
    pagination: {
        el: '.swiper-pagination'
    }
})