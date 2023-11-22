window.addEventListener("resize", sliderLogic)
sliderLogic()

function sliderLogic() {
    if (window.screen.availWidth >= 1360) {
        document.querySelector('.SliderComputer').style.display = 'block'
        document.querySelector('.SliderMobile').style.display = 'none'

        new Swiper('.SliderComputer .swiper', {
            pagination: {
                el: '.swiper-pagination'
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            slidesPerView: 2,
            spaceBetween: 100
        })
    }
    else {
        document.querySelector('.SliderComputer').style.display = 'none'
        document.querySelector('.SliderMobile').style.display = 'block'

        new Swiper('.SliderMobile .swiper', {
            spaceBetween: 100,

            pagination: {
                el: '.swiper-pagination'
            }
        })
    }
}

