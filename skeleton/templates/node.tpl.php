<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

if (!isset($title_tag) || empty($title_tag)) :
  $title_tag = 'h2';
endif;
$urlpath = explode('/',request_path());
$lastpart = array_pop($urlpath);

?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <<?php print $title_tag; ?><?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></<?php print $title_tag; ?>>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if (isset($unpublished)): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
  hide($content['comments']);
  hide($content['links']);
  print render($content);
   if(($node->type =='news_article') AND ($lastpart =='news')){
	  print '<p style="margin-top:25px;"><span class="oir_news_page_date">Published '.date("d", $node->created).' '.date("F",$node->created) . ' ' .date("Y",$node->created) .'</span></p>'; 
  }
  elseif(($node->type =='news_article') AND ($lastpart !='news')){
	 print '<p style="margin-top:25px;"><span>Published '.date("d", $node->created).' '.date("F",$node->created) . ' ' .date("Y",$node->created);  
	print '</span><br><span class="oir_news_page_date">Last updated '. format_date($node->changed,'custom', 'd F Y')."</span></p>";
  }

  else{
        if($title != 'Contact us' AND  $title != 'Thank you'){
	print '<p style="margin-top:25px;"><span class="oir_news_page_date">Last updated '. format_date($node->changed,'custom', 'd F Y')."</span></p>";
	}
  }
  ?>

  <?php print render($content['links']); ?>



</article>
