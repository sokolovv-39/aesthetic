const feedbackComp = document.querySelector('.FeedbackComp')
const feedbackMobile = document.querySelector('.FeedbackMobile')

window.addEventListener('resize', feedback_checkDimensions)
feedback_checkDimensions()

function feedback_checkDimensions() {
    if (window.screen.availWidth > 800) {
        feedbackComp.style.display = 'block'
        feedbackMobile.style.display = 'none'
    }
    else {
        feedbackComp.style.display = 'none'
        feedbackMobile.style.display = 'block'
    }
}