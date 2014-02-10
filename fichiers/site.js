
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
    
    $('.gallery').each(function( index, elt ){
	var elt = $(elt);
	var nav_id = elt.data('nav-id');
	$(elt).code4netslideshow({
            'navigation' : [
		{
                    'id' : nav_id,//'gallery-nav-'+nav_id,
                    'type' : 'bullet'           //bullet/arrow
		}
            ],
            'slideInterval' : 5,
            'pauseInterval' : 10, 
            'type' : 'horizontal',
            'autoSlide' : false
	}
			     );
    });
});






var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-9459994-2']);
_gaq.push(['_setDomainName', 'shinken-monitoring.org']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
