<?php
require 'localization.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VPNSOX :: VPN COMMUNAUTAIRE</title>
    <meta name="keywords" content="2016 ,vpn gratuit, gratuit, opensource, new vpn, socks, vpn, vpn gratis, free vpn, free vpn service, free vpn server, free vpn account, openvpn, pptp vpn, web proxy" />
    <meta name="description" content="VPNSox un VPN communautaire qui vous permet de garder le controle sur votre vie privée en ligne !">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script type="text/javascript">
        window.cookieconsent_options = {"message":"Ce site utilise des cookies pour vous fournir une meilleure expérience utilisateur","dismiss":"J'ai compris","learnMore":"Plus d'informations","link":"","theme":"light-bottom"};
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
</head>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">VPNSox Mobile</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><?= _("Accueil"); ?></a></li>
                    <li><a href="irc.php"><?= _("IRC"); ?></a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <h1><?= _("Téléchargez nos VPN sur Mobile"); ?></h1>
                <a href="vpn/vpnsox.ovpn" class="btn btn-danger btn-lg"><?= _("#NLD1 VPN Pays-Bas"); ?></a>
                <br />
                <a href="vpn/vpnsox-nld2.ovpn" class="btn btn-danger btn-lg"><?= _("#NLD2 VPN Pays-Bas"); ?></a>

                <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script>
                <script type ='text/javascript'>kofiwidget2.init('Soutenez nous !', '#009cde', 'A2246SE');kofiwidget2.draw();</script>
            </div>
            <div class="col-md-6">
                <h1><?= _("Partenaires"); ?></h1>
                <a href="http://cathost.fr" target="_blank"> <img src="img/partenaires/cathost.png" alt="cathost" height="50px"></a>
            </div>
        </div>
    </div>


    <script src="//static.getclicky.com/js" type="text/javascript"></script>
    <script type="text/javascript">try{ clicky.init(100974859); }catch(e){}</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
