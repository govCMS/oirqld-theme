<div class="oir_wrapper">
<div class="container bg-image-top">
		<div class="row">
			<!-- logo --><div class="three columns oir_header_3">
			<a href="<?php print $base_path; ?>">
			<img src="<?php print $logo ?>" id="oir_logo" alt="<?php echo $site_name; ?>">
			</a>
			<H2 class="sm_left_margins oir_title_h2">
			<a href="<?php print $base_path; ?>" class="site_title"><?php echo $site_name; ?></a>
			</H2>
			</div><!-- end logo -->
			
			<div class="two columns"></div>
			<div class="four columns oir_header_4">
			<?php print render($page['quicklinksmenu']); ?>
			</div>
			<div class="three columns">
			<?php print render($page['searcharea']); ?>
			</div>
			
			
			
		</div>
		<div class="row oir_moron">
			<div class="three columns">
			&nbsp;
			</div>
			<div class="eight columns md-center-align ori-main-menu">
			<?php print render($page['oirmainmenu']); ?>
			</div>
		</div>
</div>

