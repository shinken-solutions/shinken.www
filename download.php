<?php
$title = "Shinken Monitoring - Download";
?>

<?php include 'header.php'; ?>

    <div id="Body_Content">
        <p class="Title">Download</p>
        <ul id="download" class="row">
            <li class="col-md-2"></li>
            <li class="col-md-8">
                <h3>Common linux : </h3>
                <p># adduser shinken </p>
                <p># pip install shinken</p>
                <hr>
                <h3>Another OS ? get the tarball : </h3>
                <a href="https://github.com/naparuba/shinken/archive/2.2.tar.gz" class="btn btn-danger">2.2 version</a>
                <hr>
                <h4>Then you can follow the <a target='_blank' href="https://shinken.readthedocs.org/en/latest/02_gettingstarted/installations/shinken-installation.html">10min startup</a> guide and enjoy your new monitoring system. </h4>
            </li>
            <li class="col-md-2"></li>
        </ul>
    </div>

<?php include'footer.php' ?>

<script>

    $(".navbar ul li:nth-child(2)").addClass("active");

</script>
        
<script src="js/jquery.hoverdir.js"></script>	
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.lightbox.min.js"></script>