/************************************************************
Name: Vicky Mohammad 
Date: May 31, 2017
Readme: This code is for scrolling animation
************************************************************/

/*for the page scrolling when click*/
$(document).ready(function () {
  //animate the button scroll
  animateScroll();
  // make tans to solid nav bar when scroll
  transToSolidNavBar();
  //change animation
  changeAosAt(1000);
});

/************************************************************
custom functions
************************************************************/

function transToSolidNavBar() {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $('.navbar').css('background-color', 'black');
      // $('.navbar').css('opacity', 1);
    } else {
      $('.navbar').css('background-color', 'transparent');
      // $('.navbar').css('opacity', 0.8);
    }//end if
  });
}//end func

function animateScroll() {
  // Add smooth scrolling to all links and .not for close
  $(".navpage a")
    .not('[href="#close"]')
    .not('[href="#popup1"]').on('click', function (event) {
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
        }, 800, function () {
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
}//end func

function playScrollVideo() {
  var frameNumber = 0, // start video at frame 0
    // lower numbers = faster playback
    playbackConst = 500,
    // get page height from video duration
    setHeight = document.getElementById("setHeight"),
    // select video element         
    vid = document.getElementById('scrollVideo');
  // var vid = $('#v0')[0]; // jquery option
  // dynamically set the page height according to video length
  vid.addEventListener('loadedmetadata', function () {
    setHeight.style.height = Math.floor(vid.duration) * playbackConst + "px";
  });
  // Use requestAnimationFrame for smooth playback
  function scrollPlay() {
    var frameNumber = window.pageYOffset / playbackConst;
    vid.currentTime = frameNumber;
    window.requestAnimationFrame(scrollPlay);
  }//end if

  window.requestAnimationFrame(scrollPlay);
}//end func

//removeattributees for aos
function changeAosAt(width) {
  var dimension = window.matchMedia("(max-width: +" + width + "px)");
  if (dimension.matches) {//when media size match do something
    //remove attributes
    document.getElementById("contactID").removeAttribute("data-aos");
    document.getElementById("skillsID").removeAttribute("data-aos");
    document.getElementById("firstPersonalID").removeAttribute("data-aos");
    document.getElementById("secondPersonalID").removeAttribute("data-aos");
    document.getElementById("personalID").removeAttribute("data-aos");
    document.getElementById("githubID").removeAttribute("data-aos");
    //set attributes
    // function setDefaultAos(id){
    //     document.getElementById(id).setAttribute("data-aos", "fade-up");
    // }//end func
    // setDefaultAos("contactID");
    // setDefaultAos("skillsID");
    // setDefaultAos("firstPersonalID");
    // setDefaultAos("secondPersonalID");
    // setDefaultAos("personalID");
    // setDefaultAos("githubID");
  }//end if
}//end func