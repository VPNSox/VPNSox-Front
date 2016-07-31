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
            <h1>Utilisez notre web proxy gratuit et securisé pour surfer de façon anonyme sur internet.</h1>

            <form action="proxy.php" method="post" style="margin-bottom:0;">
                <input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
                <input type="submit" value="Go" />
            </form>
        </div>



		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		

	</div>
	
</div>


<?php include 'inc/footer.php'; ?>
