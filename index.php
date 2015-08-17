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

<!-- Carousel
================================================== -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <div class="row featurette">
        <div class="col-md-5">
            <h2 class="featurette-heading">Välkommen till <span class="text-muted">Edge!</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-7">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide" src="images/edgelogo_text.png" alt="Företagsprofilering">
                    </div>
                    <div class="item">
                        <img class="second-slide" src="images/edgeres2.png" alt="Yrkeskläder">
                        <div class="container">
                            <div class="carousel-caption carousel-caption-dark">
                                <h1>Yrkeskläder</h1>
                                <p>Att personalen har de rätta arbetskläderna som skyddar dem i alla väder, oavsett yrke och på alla typer av arbetsplatser ser vi som vår främsta uppgift. Att personalen även ser välvårdad ut och att de själva känner en stolthet i både sig själva och i sitt företag ser vi som en bonus men precis lika viktig.</p>
                                <p><a class="btn btn-lg btn-default" href="yrkesklader.php" role="button">Läs mer</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="third-slide" src="images/edgeres3.png" alt="Profilkläder">
                        <div class="container">
                            <div class="carousel-caption carousel-caption-dark">
                                <h1>Profilkläder</h1>
                                <p>När du möter en person för första gången är en stor del av det intrycket du får grundat på personens klädsel och synliga framtoning. Att använda sig av profilkläder är ett enkelt sätt att ge ett snyggt och enhetligt intryck på arbetet  - oavsett om du arbetar inomhus eller utomhus på kontor eller på lager.</p>
                                <p><a class="btn btn-lg btn-default" href="profilklader.php" role="button">Läs mer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>




</div><!-- /.container -->

<!-- FOOTER -->
<?php include 'footer.php'?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/edge.js"></script>


</body>
</html>
