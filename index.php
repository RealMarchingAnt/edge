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
            <h2>Välkommen till <span class="companyName">Edge</span>!</h2>
            <h3>Vi på <span class="companyName">Edge</span> önskar gamla och nya kunder välkomna till Södertäljes nyaste och fräschaste Profil & Yrkesklädsbutik!</h3>
            <h4>Nytt namn, ny plats men med välkända trygga ansikten.</h4>
            <h4><span class="companyName">Edge</span> står för kvalité, erfarenhet, kunskap och framförallt pålitlighet och flexibilitet!</h4>
            <h4>En samarbetspartner som leder dig i processen på ett tryggt sätt från start till mål.</h4>
            <h4>Kontakta oss så hjälper vi Er att hitta till den rätta profilen för just Ditt företag oavsett om de gäller yrkeskläder, profilkläder eller gåvor och giveaways.</h4>
        </div>
        <div class="col-md-7">

            <!-- Jssor Slider Begin -->
            <!-- To move inline styles to css file/block, please specify a class name for each element. -->
            <!-- ================================================== -->
            <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; width: 650px; height: 300px; overflow: hidden;">

                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url(images/jsslider/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div>

                <!-- Slides Container -->
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 650px; height: 300px;
            overflow: hidden; border: 1px solid #EF8223; border-radius: 8px;">
                    <div>
                        <img u="image" src2="images/edgelogo_text.png" alt="Företagsprofilering">
                    </div>
                    <div class="pickgradient">
                        <img u="image" src2="images/carousel/blaklader.png" />
                        <div class="container">
                            <div class="carousel-caption">
                                <p><a class="btn btn-lg btn-default" href="yrkesklader.php" role="button">Yrkeskläder</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="pickgradient">
                        <img u="image" src2="images/carousel/newwave.png" />
                        <div class="container">
                            <div class="carousel-caption">
                                <p><a class="btn btn-lg btn-default" href="profilklader.php" role="button">Profilkläder</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="pickgradient">
                        <img u="image" src2="images/carousel/kostaboda.png" />
                        <div class="container">
                            <div class="carousel-caption">
                                <p><a class="btn btn-lg btn-default" href="giveaways.php" role="button">Gåvor</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="pickgradient">
                        <img u="image" src2="images/carousel/plastprint2.png" />
                        <div class="container">
                            <div class="carousel-caption">
                                <p><a class="btn btn-lg btn-default" href="giveaways.php" role="button">Giveaways</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                <style>
                    /* jssor slider bullet navigator skin 01 css */
                    /*
                    .jssorb01 div           (normal)
                    .jssorb01 div:hover     (normal mouseover)
                    .jssorb01 .av           (active)
                    .jssorb01 .av:hover     (active mouseover)
                    .jssorb01 .dn           (mousedown)
                    */
                    .jssorb01 {
                        position: absolute;
                    }
                    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                        position: absolute;
                        /* size of bullet elment */
                        width: 12px;
                        height: 12px;
                        filter: alpha(opacity=70);
                        opacity: .7;
                        overflow: hidden;
                        cursor: pointer;
                        border: #000 1px solid;
                    }
                    .jssorb01 div { background-color: gray; }
                    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                    .jssorb01 .av { background-color: #fff; }
                    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
                </style>
                <!-- bullet navigator container -->
                <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                    <!-- bullet navigator item prototype -->
                    <div u="prototype"></div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                <style>
                    /* jssor slider arrow navigator skin 19 css */
                    /*
                    .jssora19l                  (normal)
                    .jssora19r                  (normal)
                    .jssora19l:hover            (normal mouseover)
                    .jssora19r:hover            (normal mouseover)
                    .jssora19l.jssora19ldn      (mousedown)
                    .jssora19r.jssora19rdn      (mousedown)
                    */
                    .jssora19l, .jssora19r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                        background: url(images/jsslider/a21.png) no-repeat;
                        overflow: hidden;
                    }
                    .jssora19l { background-position: -5px -35px; }
                    .jssora19r { background-position: -65px -35px; }
                    .jssora19l:hover { background-position: -125px -35px; }
                    .jssora19r:hover { background-position: -185px -35px; }
                    .jssora19l.jssora19ldn { background-position: -245px -35px; }
                    .jssora19r.jssora19rdn { background-position: -305px -35px; }
                </style>
                <!-- Arrow Left -->
        <span u="arrowleft" class="jssora19l" style="top: 123px; left: 8px;">
        </span>
                <!-- Arrow Right -->
        <span u="arrowright" class="jssora19r" style="top: 123px; right: 8px;">
        </span>
                <!--#endregion Arrow Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
            </div>
            <!-- Jssor Slider End -->

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

<!-- jssor slider scripts-->
<!-- use jssor.js + jssor.slider.js instead for development -->
<!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
<script>

    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
            $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            },

            $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                $Scale: false                                   //Scales bullets navigator or not while slider scale
            }
        };

        //Make the element 'slider1_container' visible before initialize jssor slider.
        $("#slider1_container").css("display", "block");
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 30);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
</body>
</html>
