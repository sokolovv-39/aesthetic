window.addEventListener("resize", sliderLogic)
sliderLogic()

let isFirstSliderChange = true

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

            on: {
                slideChange: function() {
                    if (isFirstSliderChange) {
                        let ee = setInterval(function () {
                            if (typeof window.ym != 'undefined') {
                                ym(95629810,'reachGoal','slider-scroll')
                                ym(95629805,'reachGoal', 'slider-scroll')
                                clearInterval(ee)
                            }
                        }, 1000)
                        isFirstChange = false
                        return true
                    }
                }
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
            },

            on: {
                slideChange: function() {
                    if (isFirstSliderChange) {
                        let ee = setInterval(function () {
                            if (typeof window.ym != 'undefined') {
                                ym(95629810,'reachGoal','slider-scroll')
                                ym(95629805,'reachGoal', 'slider-scroll')
                                clearInterval(ee)
                            }
                        }, 1000)
                        isFirstChange = false
                        return true
                    }
                }
            },
        })
    }
}

