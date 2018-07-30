<div class="page_wrapper">

<?php include 'header.tpl.php'; ?>		

	<div class="container">
		<!--<span class="darkpanel"><span class="overlaytxt">Event text / announcement05.jpg</span></span>-->
		<div class="row md_top_margins oir_grey">
			
			<div class="one-half column">
			<?php  print render($page['homebannertxt']); ?>	
	
			<img src="<?php print path_to_theme(); ?>/images/20151019DT_565v1_sml.jpg" id="" style="max-width:630px;width:100%;height:auto;"></div>
			<div class="one-half column sm_padding">
			
			<?php print render($page['homebanner']); ?>
			</div>
			
			
		</div>
	</div>	

	<?php print render($page['featured']); ?>

	
	<!-- end container -->

	<script>
	$j10('#menu-961-7').removeClass('active-trail'); 
	
	
	</script>
	
<?php include 'footer.tpl.php'; ?>
	
	</div>
