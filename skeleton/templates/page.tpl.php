<?php 

	$thisnode = 'node/'.$node->nid; 
	$thispath = explode('/',request_path());
	$thispath = $thispath[0];

?>
<?php include 'header.tpl.php'; ?>
	<div class="container oir-page-container">
	<div class="row">
		<div class="twelve columns oir-breadcrumbs">
		<?php if ($breadcrumb): ?>
      		<div id="breadcrumb" class="md_bottom_margins"><?php print $breadcrumb; ?></div>
		<?php endif; ?>
			</div>
	</div>
	
	<div class="row oir-content-row">
			<div class="two columns oir-two-col"><?php print render($page['sidebar_first']); ?></div>
			<?php if(!$page['sidebar_second']){ ?>
				<div class="ten columns oir-ten-cols">
			<?php } 
			else{ ?>
					<div class="six columns oir-6-col">
			<?php }
			?>
			
				<h1 class="md_bottom_margins_sm moronefont">
				<?php 
				if($thispath != 'search'){
					print  render($title) ;
					}else{
						print 'Search';
				}
				?>
				</h1>
				<?php print render($page['content']); ?>
				</div>	
		</div>
		
		<?php 
			if($page['sidebar_second']){ ?>
				<div class="two columns oir_sidebar_grey">
				<?php print render($page['sidebar_second']); ?>	
				</div>
		<?php	} ?>
		
	</div>
</div>
	
<?php include 'footer.tpl.php'; ?>

	
