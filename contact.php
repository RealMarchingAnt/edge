<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edge Profil</title>

    <?php include 'includes.php'?>
</head>
<!-- NAVBAR
================================================== -->
<body>

<!-- HEADER -->
<?php include 'header.php'?>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">


    <!-- START THE FEATURETTES -->

    <div class="row contactinfo">
        <div class="col-sm-12">
            <h2>Kontakta oss</h2>
            <p class="lead">Välkommen att kontakta oss! Vi hjälper dig gärna. </p>
            <address>
                <strong>Edge Profil &amp; Yrkeskläder</strong><br>
                Wedavägen 1<br>
                171 30, Södertälje<br>
                <abbr title="Telefon">Telefon:</abbr> (123) 456-7890
            </address>

            <address>
                <strong>E-post</strong><br>
                <a href="mailto:edgeprofil@email.se">edgeprofil@email.se</a>
            </address>
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-12">
            <div id="map-canvas" class="orange-border"></div>
        </div>
    </div>

    <!-- /END THE FEATURETTES -->


</div><!-- /.container -->

<!-- FOOTER -->
<?php include 'footer.php'?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/maps.js"></script>
<script src="js/edge.js"></script>
</body>
</html>
