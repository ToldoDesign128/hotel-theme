// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function (e) {

        let tl = gsap.timeline()

        //Hero Animation
        tl
            .to("#hero > .textContainer > .heroAnimation1", { y: 0, duration: .6, opacity: 1 })
            .to("#hero > .textContainer > .heroAnimation2", { y: 0, duration: .6, opacity: 1 })
            .to("#hero > .textContainer > .heroAnimation3", { y: 0, duration: .6, opacity: 1 },"<");

    }, false);

});
