<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php  ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php  $rdf_namespaces; ?>><!--<![endif]-->
<head>
  <?php print $head; ?>
  <title>
  <?php
  if(drupal_is_front_page()){ 
	print 'Home | Office of Industrial Relations';
  }else{
	   print $head_title;
  }  ?>
  
  </title>

  <?php 
  if(drupal_is_front_page()){ 
	?>
<meta name="description" content="Office of Industrial Relations, Queensland Government, is the official site for work health and safety, electrical safety services, regulating workers’ compensation and industrial relations by supporting improved productivity and fairness in Queensland workplaces.">
<meta name="keywords" content="workplace, health, safety, Worksafe, electrical, electricity, workers compensation, rehabilitation, return to work, industrial relations, labour hire, Queensland">
	<?php 
  }
  ?>
  
  
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<meta http-equiv="cleartype" content="on">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php print $styles; ?>
<?php print $scripts; ?>
  <?php  #if ($add_html5_shim and !$add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php #print theme_to_path(); ?>/js/html5.js"></script>
    <![endif]-->
  <?php #elseif ($add_html5_shim and $add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php #print path_to_theme(); ?>/js/html5-respond.js"></script>
    <![endif]-->
  <?php #elseif ($add_respond_js): ?>
    <!--[if lt IE 9]>
    <script src="<?php #print theme_to_path(); ?>/js/respond.js"></script>
    <![endif]-->
  <?php #endif; ?>
 <!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

 <script> 
 $j10 = jQuery.noConflict();
 
 </script>
 

 
 
</head>
<body>

  <?php 
  $skip_link_text = 'skipcontent';
  $skip_link_anchor = "skiplink";
  if ($skip_link_text && $skip_link_anchor): ?>
      <a id="skip-link" href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
  <?php endif; ?>
 <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
