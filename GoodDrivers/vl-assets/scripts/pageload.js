/**************************************************
 * @author Vicky Mohammad
 * @description js for fade page load when first arrived
 **************************************************/

/*for the page scrolling when click*/
$(document).ready(function () {
    loadImg(".loadingPage");
});

// load white page for fade effect
function loadImg(query) {
    $(query).css("opacity", 1);
    setTimeout(function () {
        $(query).css("opacity", 0);
    }, 300);
    setTimeout(function () {
        $(query).remove();
    }, 1000);
}//end func