<div class="oir_wrapper">
<div class="container bg-image-top">
		<div class="row">
			<!-- logo --><div class="three columns">
			<a href="<?php print $base_path; ?>">
			<img src="<?php print $logo ?>" id="oir_logo" alt="<?php echo $site_name; ?>">
			</a>
			</div><!-- end logo -->
			<!-- search --><div class="three columns"></div><!-- end search -->
			<!-- quick links --><div class="six columns"><?php print render($page['quicklinksmenu']); ?></div><!-- end quick links -->
		</div>
		<div class="row oir_moron">
			<div class="three columns">
			<H2 class="sm_left_margins oir_title_h2">
			<a href="<?php print $base_path; ?>" class="site_title"><?php echo $site_name; ?></a>
			</H2>
			</div>
			<div class="eight columns md-center-align ori-main-menu"><?php print render($page['oirmainmenu']); ?></div>
		</div>
		
</div>
