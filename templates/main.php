<?php include 'header.php'; ?>

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
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>


<?php include '../inc/footer.php'; ?>