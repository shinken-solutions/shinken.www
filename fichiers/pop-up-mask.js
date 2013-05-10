
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