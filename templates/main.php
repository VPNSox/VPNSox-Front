<?php include 'inc/header.php'; ?>


	<div id="container">

	<div class="box3">
		<h1>WEB PROXY</h1>
	</div>


	<?php if(isset($error_msg)){ ?>
	
	<div class="alert alert-danger">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
        <div class="proxy">
            <iframe data-aa='215151' src='https://ad.a-ads.com/215151?size=468x15' scrolling='no' style='width:468px; height:15px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>

            <h1>Utilisez notre web proxy gratuit et securisé pour surfer de façon anonyme sur internet.</h1>

            <form action="proxy.php" method="post" style="margin-bottom:0;">
                <input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
                <input type="submit" value="Go" class="btn btn-primary" />
            </form>

            <p>Grace à notre WebProxy, débloquez Youtube, Facebook et d'autre sites, nous chiffrons votre connection et masquons votre ip vous êtes protégé si votre reseau est surveillé ou censuré et pour finir tout ce passe en ligne, pas besoin de logiciel !</p>


            <iframe data-aa='215151' src='https://ad.a-ads.com/215151?size=468x15' scrolling='no' style='width:468px; height:15px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
        </div>



		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		

	</div>
	
</div>


<?php include 'inc/footer.php'; ?>
