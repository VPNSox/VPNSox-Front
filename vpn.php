<?php
include 'inc/header.php';
require 'localization.php';
?>

	<div class="box3">
		<h1><?= _("SERVEURS VPN"); ?></h1>
	</div>

	<div class="container">
		<div class="offers">
			<div class="row">
                <p style="font-size: 13px;">You (the user) are responsible for your actions or damages caused by using our free VPN service. <span style="color: red;"> Do NOT use this VPN for doing evil </span>. If you do abuse the system, your IP will be banned. To report abuse, please email abuse@vpnsox.org. This free VPN service is for personal use only. Please contact us for options if you need VPN service for business or commercial use. </p>
				<div class="col-md-4">
					<img src="img/pays/nl.png" alt="Netherlands" />
					<p>OpenVPN</p>
					<p><?= _("Traffic Illimité"); ?></p>
					<p><?= _("Connexion 100Mbps"); ?></p>
					<p><?= _("No-Logs"); ?></p>
					<p><?= _("Tunnel Chiffré"); ?></p>
                    <p><?= _("99.9% Uptime"); ?></p>
                    <p>&nbsp;</p>
					<a href="vpn/VPNSox-NLD.zip" class="btn-blue"><?= _("#NLD1 Télécharger (.zip)"); ?></a>
                    <a href="vpn/VPNSox-NLD2.zip" class="btn-blue"><?= _("#NLD2 Télécharger (.zip)"); ?></a>
				</div>
				<!--<div class="col-md-4">
					<h1>€10 EUR<span class="month">/Mois</span></h1>
                    <p>OpenVPN</p>
					<p>Traffic Illimité</p>
					<p>Connexion 100Mbps</p>
					<p>No-Logs</p>
					<p>Tunnel Chiffré</p>
					<a href="#" class="btn-blue">Commander</a>
				</div>-->
				<div class="col-md-4">
					<h1><?= _("Don"); ?></h1>
					<p><?= _("Vous souhaitez plus de serveurs ? Faites un don pour VPNSox ! "); ?></p>
                    <p><?= _("Chaque don nous aide à faciliter l'accès a la protection des données sur internet !  "); ?></p>

                    <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script>
                    <script type ='text/javascript'>kofiwidget2.init('Soutenez nous !', '#009cde', 'A2246SE');kofiwidget2.draw();</script>
                    <p>&nbsp;</p>
				</div>
                <!-- ADVERTS -->
                <div class="col-md-4">
                    <div id="soyezcool">
                        <p>
                            <?= _("Pour vous offrir un service totalement gratuit, nous avons besoin de la pub si vous désactivez adblock sur notre site
                            vous contribuez à l'avenir de notre service néanmoins si cela vous importe peu vous pouvez garder adblock activé ou faire un don pour
                            ne plus voir la pub !"); ?>

                        </p>
                    </div>
                    <div class="adbit-display-ad" data-adspace-id="74BDA4006C"></div>
                </div>
			</div>
		</div>

        <div class="about">
            <h1><?= _("Statistiques"); ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <h1>NLD1</h1>
                    <img src="https://munin.vpnsox.org/chart2.php?graphid=554&screenid=20&width=400&height=100&updateProfile=0&profileIdx=&profileIdx2=&period=3600" alt="NLD1">
                </div>
                <div class="col-md-6">
                    <h1>NLD2</h1>
                    <img src="https://munin.vpnsox.org/chart2.php?graphid=565&screenid=20&width=400&height=100&updateProfile=0&profileIdx=&profileIdx2=&period=3600" alt="NLD2">
                </div>
            </div>
        </div>
	</div>


<?php include 'inc/footer.php'; ?>