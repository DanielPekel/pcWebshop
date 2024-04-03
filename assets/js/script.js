// first set the body to hide and show everyhthing when fully loaded ;)
// document.write("<style>body{display:none;}</style>");

$(document).ready(function () {

    $('.openmenu').on('click',function () {
        $('.sidebar').addClass('active');
        $('.openmenu').addClass('hide');
    });
    $('.closemenu').on('click',function () {
        $('.sidebar').removeClass('active');
        $('.openmenu').removeClass('hide');
    });
    $('.closeoutclick').on('click',function () {
        $('.sidebar').removeClass('active');
        $('.openmenu').removeClass('hide');
    });

});