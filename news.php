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
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/edge.js"></script>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=815732011844412";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Carousel
================================================== -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <div class="row">
        <div class="col-md-12">
            <h2 class="featurette-heading">Aktuellt</span></h2>
        </div>
    </div>
    <div class="col-sm-12">

        <p><a href="assets/Presentreklam_Spring_2017.pdf">Klicka här för att ladda ned vår presentreklam för våren 2017&nbsp;<i class="fa fa-arrow-down"></i></a> </p>

    </div>
    <?php
    date_default_timezone_set('Europe/Stockholm');
    $page_id = '1628962010690920';
    $access_token = '1125859590757838|c3332ffde36d99a9a4411703a3a1a928';
    //Get the JSON
    $json_object = @file_get_contents('https://graph.facebook.com/' . $page_id .
        '/posts?fields=created_time,message,full_picture,likes.limit(0).summary(true),shares,comments.limit(0).summary(true)&limit=20&access_token=' . $access_token);
    //Interpret data
    $fbdata = json_decode($json_object);

    foreach ($fbdata->data as $post )
    {
        $date = date("Y-m-d", strtotime($post->created_time));
        $img = $post->full_picture;
        $link = "https://www.facebook.com/" . $post->id;
        $message = $post->message;
        $likes = $post->likes->summary->total_count;
        $shares = $post->shares->count;
        $comments = $post->comments->summary->total_count;

        if ($likes == "")
            $likes = 0;

        if ($shares == "")
            $shares = 0;

        if ($comments == "")
            $comments = 0;

        if ($img != "") {
            $posts .= '<hr class="featurette-divider">';
            $posts .= '<div class="row">';
            $posts .= '<div class="col-sm-2"><h4><span class="text-muted">' . $date . '</span></h4></div>';
            $posts .= '<div class="col-sm-6">
                   <img class="img-rounded orange-border center-block" width="320" src="' . $img . '"/>
                   <div style="text-align:center;">
                   <h4>
                        <span class="fb-stats"><i class="fa fa-thumbs-o-up"></i> ' . $likes . '</span>
                        <span class="fb-stats"><i class="fa fa-share"></i> ' . $shares . '</span>
                        <span class="fb-stats"><i class="fa fa-comment-o"></i> ' . $comments . '</span>
                   </h4>
                   </div>
                   <div style="text-align:center;"><a href="' . $link . '" target="_blank">Läs, kommentera, och gilla på Facebook</a></div>
                   </div>';
            $posts .= '<div class="col-sm-4"><h4>' . $message . '</h4></div>';
        } else {
            $posts .= '<hr class="featurette-divider">';
            $posts .= '<div class="row">';
            $posts .= '<div class="col-sm-2"><h4><span class="text-muted">' . $date . '</span></h4></div>';
            $posts .= '<div class="col-sm-10"><h4>' . $message . '</h4>
                   <div style="text-align:center;">
                   <h4>
                        <span class="fb-stats"><i class="fa fa-thumbs-o-up"></i> ' . $likes . '</span>
                        <span class="fb-stats"><i class="fa fa-share"></i> ' . $shares . '</span>
                        <span class="fb-stats"><i class="fa fa-comment-o"></i> ' . $comments . '</span>
                   </h4>
                   </div>
                   <div style="text-align:center;"><a href="' . $link . '" target="_blank">Läs, kommentera, och gilla på Facebook</a></div>
                   </div>';
        }

        $posts .= '</div>';
    }
    //Display the posts
    echo $posts;
    ?>

</div><!-- /.container -->

<!-- FOOTER -->
<?php include 'footer.php'?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


</body>
</html>
