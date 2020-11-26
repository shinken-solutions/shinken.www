    <footer>
      <div class="row">
        <div class="col-sm-4">
            <img alt="Logo Shinken Framework" src="img/LogoFrameworkWhite.png" class="Logo">   
        </div>
        <ul class="col-sm-2 col-xs-6">
            <li><a target="_blank" href="https://twitter.com/shinken_monitor">Twitter</a></li>
            <li><a target="_blank" href="https://github.com/naparuba/shinken/">Source Code</a></li>
        </ul>  
        <ul class="col-sm-2 col-xs-6">
            <li><a target="_blank" href="download.php">Download</a></li>
            <li><a href="mailto:naparuba@gmail.com">Contact Us</a></li>
        </ul>                   
        <div class="col-sm-4 col-xs-12">
    <!--
             <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Ok</button>
              </form>
    -->
            <p>2014 © All rights reserved | SAS SHINKEN Solutions | RCS Bordeaux 794 549 543 |</p>
        </div>
        </div>
    </footer>

<!--
    <script src="js/jquery-1.11.1.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>
-->

<!--    <script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jquery.easing.min.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>-->

<!--    <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>-->
<!--
    <script type="text/javascript" src="js/jquery.lavalamp.js"></script>
    <script type="text/javascript" src="js/scrollReveal.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
-->


<script>

$( document ).ready(function() {
    
    // Initialisation de la lightbox
    $(function(){
        $('[rel="lightbox"]').lightbox();
    }); 

    
    $( "#Menu li a" ).click(function() {
    $(this).next("ul").slideToggle("fast");   
    });   
    
    // Show Case : Commande la direction des hovers    
    $(function(){
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
    });
	
    $('#Lavalamp').lavalamp({
    easing:"swing",
    duration:300 
    });
    
    $('.lavalamp-object').css({
   "border-bottom":" 3px solid #71bf44"
    })
    
    $( ".dropdown" ).click(function() {
    $( "#Web_Map" ).slideToggle( "fast");
    });


    /*
    $( "#Lavalamp li" ).bind('mouseenter', function()  {
    $(this).next(".HoverMenu").slideDown( "fast")
    });

    $( "#Lavalamp li" ).next(".HoverMenu").bind('mouseleave', function()  {
    $(this).slideUp( "fast")
    });
*/
    
    
    var HeightSlide = $("#Slide1").innerHeight();
    $( ".Gradient" ).css("height",HeightSlide+"px");
    
    $( window ).resize(function() {
        var HeightSlide = $("#Slide1").innerHeight();
        $( ".Gradient" ).css("height",HeightSlide+"px");    
    });
    
    $("ul li a[href^='#']").on('click', function(e) {

       // prevent default anchor click behavior
       e.preventDefault();

       // animatex
       $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 450, function(){
   
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = this.hash;
         });

    });

});
     
</script>

</body>
</html>