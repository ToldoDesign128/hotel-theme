// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function (e) {

        //Hero Animation
        let tl = gsap.timeline();

        tl
            .to("#hero > .textContainer > .heroAnimation1", { y: 0, duration: .6, opacity: 1 })
            .to("#hero > .textContainer > .heroAnimation2", { y: 0, duration: .6, opacity: 1 })
            .to("#hero > .textContainer > .heroAnimation3", { y: 0, duration: .6, opacity: 1 }, "<");

        gsap.registerPlugin(ScrollTrigger);

        //Section Animation 2
        let tlScroll = gsap.timeline({
            scrollTrigger: {
                trigger: ".animationContainer",
                toggleActions: "restart none reverse none",
                start: "top center",
                end: "200px center",
                scrub: 1,
                markers: true,
            }
        });

        tlScroll
            .from(".animationContainer > .textAnimation", { y: 200, duration: .6, opacity: 0 })
            .from(".animationContainer > .imageAnimationContainer .imageAnimationUno", { scale: 1.2, duration: .6 }, "<")
            .from(".animationContainer > .imageAnimationContainer .imageAnimationDue", { scale: 1.1, duration: .6 });

        //Section Animation 3
        let tlScrollDue = gsap.timeline({
            scrollTrigger: {
                trigger: ".animationContainerDue",
                toggleActions: "restart none reverse none",
                start: "top center",
                end: "200px center",
                scrub: 1,
                markers: true,
            }
        });

        tlScrollDue
            .from(".animationContainerDue > .textAnimation", { y: 200, duration: .6, opacity: 0 })
            .from(".animationContainerDue > .imageAnimationContainer .imageAnimationTre", { scale: 1.2, duration: .6 }, "<");

    }, false);

});
