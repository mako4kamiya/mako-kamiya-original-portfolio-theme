// console.log("app.js is loaded");

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

    // console.log("DOM loaded");

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e){

        //custom GSAP code goes here
        let targets = gsap.utils.toArray(".inview");
        targets.forEach((target) => {
            gsap.to(target, {
                scrollTrigger: {
                    trigger: target,
                    start: "top center",
                    end: "bottom center",
                    toggleActions: "play reverse play reverse",
                    // markers: true,
                },
                opacity: 1,
            });
        });

        // console.log("window loaded");
    }, false);

});