
$(document).ready(function() {     
    $(window).resize(function () {
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});        
    });         
});

function popUpMask() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('#mask').css({'width':maskWidth,'height':maskHeight});   
    $('#mask').fadeTo("quick",0.7);
} 

$(document).ready(function() {
    $(window).load(function(){
	$('#loading').hide();
        $('.doc-loader').fadeOut('quick');
    });
})




$(window).load(function() {
    $('.gallery').code4netslideshow({
        'navigation' : [
            {
                'id' : 'gallery-nav',
                'type' : 'bullet'           //bullet/arrow
            }
        ],
        'slideInterval' : 5,
        'pauseInterval' : 10, 
        'type' : 'horizontal',
        'autoSlide' : false
    });
});
