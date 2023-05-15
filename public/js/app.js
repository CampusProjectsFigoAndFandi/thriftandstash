const aboutNav = document.querySelector('#aboutNav');
if (aboutNav) { // just to check if user currently in about page
    const faqMain = document.querySelectorAll('.faqMain');
    faqMain.forEach(element => element.addEventListener('click', function () {
        element.querySelector('.faqAnswer').classList.toggle("faqAnswerHidden");
    }));
    window.onscroll = function aboutNavScroll() {
        if (document.body.scrollTop > 170 || document.documentElement.scrollTop > 170) {
            aboutNav.style.backgroundColor = '#b0e5b3'
        } else {
            aboutNav.style.backgroundColor = 'rgba(0, 0, 0, 0)'
        }
    }
}
const myAlert = document.querySelector('#myAlert');
if (myAlert) {
    const alert = bootstrap.Alert.getOrCreateInstance('#myAlert');
    alert.close()
}