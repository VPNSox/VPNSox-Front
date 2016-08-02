<?php
include 'inc/header.php';
require 'localization.php';
require_once('lib/TwitterAPIExchange.php');
$settings = array(
	'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
	'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
	'consumer_key' => "YOUR_CONSUMER_KEY",
	'consumer_secret' => "YOUR_CONSUMER_SECRET"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=VPNSox_Project&count=20';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest(),$assoc = TRUE);
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

?>
    <div class="ip">
        <div class="col-md-8" id="tweets">
            <marquee width="85%" >
                <?php foreach($string as $items): ?>
                    <?=  $items['text'] . "   ||   "; ?>
                <?php endforeach; ?>
            </marquee> :FLUX TWITTER
        </div>
		<div class="col-md-4">
			<p><span id="text"> Votre IP : <?= $ip; ?> | </span><span id="secure" class=" label label-<?= $label; ?> label-sm"><?= $text; ?></span></p>
		</div>
	</div>
	<div id="particles-js"></div>
		<div class="box1">
			<h1><?= _("VPN RAPIDE, SECURISE, COMMUNAUTAIRE !"); ?></h1>
			<p><?= _("Vous gardez le controle !"); ?></p>
		</div>


	<div class="container">
		<div class="row features-block">
			<div class="col-md-4 features">
				<img src="img/icons/support.png" alt="clock"  />
				<h1><?= _("Communauté"); ?></h1>
				<p><?= _("Participez a la communauté VPNSox depuis notre forum !"); ?></p>
			</div>
			<div class="col-md-4 features">
				<img src="img/icons/rocket.png" alt="clock"  />
				<h1><?= _("Uptime 99.9%"); ?></h1>
				<p><?= _("Profitez d'un service sans interruption"); ?></p>
			</div>
			<div class="col-md-4 features">
				<img src="img/icons/umbrella.png" alt="clock"  />
				<h1><?= _("Securisé"); ?></h1>
				<p><?= _("Nous chiffrons tout votre traffic !"); ?></p>
			</div>
		</div>

	</div>


	<div class="container ">
		<div class="about">
			<h1><?= _("Serveurs VPN"); ?></h1>
			<img src="img/dell.png" alt="server" />
			<p><?= _("L'accès a nos serveurs est gratuit et sans inscription ! Avec VPNSox tout devient très intuitif, nous tentons de faciliter l'accès à la protection sur le web pour tous !"); ?></p>


			<a href="vpn.php" class="btn-blue"><?= _("Accèdez à nos VPN !"); ?> </a>
		</div>

		<div class="partenaires">
			<h1><?= _("Partenaires"); ?></h1>
			<a href="http://cathost.fr" target="_blank"><img src="img/partenaires/cathost.png" alt="cathost"></a>
		</div>
	</div>



<?php include 'inc/footer.php'; ?>