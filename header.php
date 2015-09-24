<?php
/**
 * Created by PhpStorm.
 * User: patrikjohansson
 * Date: 04/08/15
 * Time: 19:35
 */
echo '
    <div class="navbar-wrapper">
        <div class="container">

            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand visible-xs visible-sm" href="index.php"><img alt="Brand" src="images/edgelogo_grey.png"></a>
                        <a class="navbar-brand visible-md visible-lg" href="index.php"><img alt="Brand" src="images/edgelogo-full_grey.png" style="max-width:390px;"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><i class="fa fa-home"></i> Hem</a></li>
                            <li><a href="about.php">Om oss</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Affärsområden<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profilklader.php">Profilkläder</a></li>
                                    <li><a href="yrkesklader.php">Yrkeskläder</a></li>
                                    <li><a href="giveaways.php">Gåvor/Giveaways</a></li>
                                </ul>
                            </li>
                            <li><a href="suppliers.php">Leverantörer</a></li>
                            <li><a href="news.php">Aktuellt</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kontakt<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact.php"><i class="fa fa-envelope-o"></i> Kontaktuppgifter</a></li>
                                    <li><a href="medarbetare.php"><i class="fa fa-users"></i> Vi som jobbar här</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
';

