<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'patrik@marchingant.se';
    $headers = 'From: webmaster@marchingant.se' . "\r\n" .
        'Reply-To: webmaster@marchingant.se' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $to = 'patrik@marchingant.se';
    $subject = 'Message from marchingant.se ';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Var god fyll i ditt namn';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Var god fyll i en giltig email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Var god fyll i ett meddelande';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Ditt anti-spam svar är felaktigt';
    }
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $headers)) {
            $result='<div class="alert alert-success">Tack så mycket för visat intresse! Vi svarar så snart vi kan</div>';
        } else {
            $result='<div class="alert alert-danger">Något gick fel... Var god försök igen senare</div>';
        }
    }
}
?>

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


<!-- Send email dialog -->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Maila oss</h4>
            </div>
            <form class="form-horizontal" role="form" method="post" action="contact.php">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Ditt namn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="För & Efternamn" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="exampel@domän.se" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Meddelande</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Ditt svar">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>
                            </div>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <div class="col-sm-10 col-sm-offset-2">-->
<!--                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Stäng</button>
    <!--                <button type="button" class="btn btn-primary">Skicka</button>-->
                    <input id="submit" name="submit" type="submit" value="Skicka" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>



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
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#emailModal" data-whatever="@getbootstrap"><i class="fa fa-envelope-square fa-2x"></i>&nbsp; Maila oss här</button>
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

<script>
    // Show modal dialog for email sent success or failure
    $('#emailModal').modal('show');
</script>

</body>
</html>
