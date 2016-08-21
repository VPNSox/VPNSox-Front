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
				<p><a href="https://openvpn.net/index.php/open-source/downloads.html" class="btn btn-warning"> Télécharger OpenVPN</a></p>
                <div class="col-md-4">
					<img src="img/pays/Netherlands-flag.png" alt="Netherlands" />
					<p>OpenVPN</p>
					<p><?= _("Traffic Illimité"); ?></p>
					<p><?= _("Connexion 1GBPS"); ?></p>
					<p><?= _("Anti-DDoS"); ?></p>
                    <p><?= _("No-Logs"); ?></p>
					<p><?= _("Tunnel Chiffré"); ?></p>
                    <p><?= _("99.9% Uptime"); ?></p>
                    <p>&nbsp;</p>
					<a href="vpn/VPNSox-NLD.zip" class="btn-blue"><?= _("#NLD1 Télécharger (.zip)"); ?></a>
                    <a href="vpn/VPNSox-NLD2.zip" class="btn-blue"><?= _("#NLD2 Télécharger (.zip)"); ?></a>
				</div>
				<div class="col-md-4">
                    <img src="img/pays/United-states-flag.png" alt="USA" />
                    <p>OpenVPN</p>
                    <p><?= _("Traffic Illimité"); ?></p>
                    <p><?= _("Connexion 100Mbps"); ?></p>
                    <p><?= _("No-Logs"); ?></p>
                    <p><?= _("Tunnel Chiffré"); ?></p>
                    <p><?= _("99.9% Uptime"); ?></p>
                    <a href="vpn/VPNSox-US.zip" class="btn-blue"><?= _("#US1 Télécharger (.zip)"); ?></a>
		    <a href="vpn/VPNSox-US-OBFS.zip" class="btn-blue"><?= _("#US1 Télécharger (obsfproxy)"); ?></a>
				</div>
				<div class="col-md-4">
					<h1><?= _("Don"); ?></h1>
					<p><?= _("Vous souhaitez plus de serveurs ? Faites un don pour VPNSox ! "); ?></p>
                    <p><?= _("Chaque don nous aide à faciliter l'accès a la protection des données sur internet !  "); ?></p>

                    <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script>
                    <script type ='text/javascript'>kofiwidget2.init('Soutenez nous !', '#009cde', 'A2246SE');kofiwidget2.draw();</script>
                    <p>&nbsp;</p>
				</div>

                <!-- ADVERTS
                <div class="col-md-4">

                    <div class="adbit-display-ad" data-adspace-id="72BCB618EF" style="margin-bottom: 10px;"></div>
                    <div class="adbit-display-ad" data-adspace-id="798963BBF7"></div>

                </div>-->
			</div>

            <!-- ADVERTS -->
            <div id="soyezcool" style="text-align: center;">
                <p>
                    <?= _("Pour vous offrir un service totalement gratuit, nous avons besoin de la pub si vous désactivez adblock sur notre site
                            vous contribuez à l'avenir de notre service néanmoins si cela vous importe peu vous pouvez garder adblock activé ou faire un don pour
                            ne plus voir la pub !gitg"); ?>

                </p>
            </div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:728px;height:90px;text-align: center;"
                 data-ad-client="ca-pub-2576728198449645"
                 data-ad-slot="4747566219"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
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
