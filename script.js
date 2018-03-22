/************************************************************
Name: Vicky Mohammad 
Date: May 31, 2017
Readme: This code is for scrolling animation
************************************************************/

/*for the page scrolling when click*/
$(document).ready(function(){
    // Add smooth scrolling to all links and .not for close
    $("a")
    .not('[href="#close"]')
    .not('[href="#popup1"]').on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});

/************************************************************
custom functions
************************************************************/

function playScrollVideo(){
    var frameNumber = 0, // start video at frame 0
        // lower numbers = faster playback
        playbackConst = 500, 
        // get page height from video duration
        setHeight = document.getElementById("setHeight"), 
        // select video element         
        vid = document.getElementById('scrollVideo'); 
        // var vid = $('#v0')[0]; // jquery option
        // dynamically set the page height according to video length
        vid.addEventListener('loadedmetadata', function() {
        setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
    });
    // Use requestAnimationFrame for smooth playback
    function scrollPlay(){  
        var frameNumber  = window.pageYOffset/playbackConst;
        vid.currentTime  = frameNumber;
        window.requestAnimationFrame(scrollPlay);
    }//end if

    window.requestAnimationFrame(scrollPlay);
}//end func

function changeAosAt(){
    var x = window.matchMedia("(max-width: 1200px)");
    if(x.matches){//when media size match do something
        document.getElementById("contactID").removeAttribute("fade-left");
        document.getElementById("skillsID").removeAttribute("fade-right");
    }//end if
}//end func