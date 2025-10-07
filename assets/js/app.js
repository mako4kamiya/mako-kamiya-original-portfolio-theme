console.log("app.js is loaded");

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

    console.log("DOM loaded");

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e){

        //custom GSAP code goes here
        gsap.to('.inview', {
            scrollTrigger: {
                trigger: '.inview',
                start: 'top center',
                end: 'bottom center',
                markers: true,
                toggleActions: 'play reverse play reverse',
            },
            opacity: 1,
        })

        console.log("window loaded");
    }, false);

});