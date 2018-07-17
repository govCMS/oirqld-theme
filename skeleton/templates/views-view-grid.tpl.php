<?php

/**
 * @file
 * Override Drupals Grid tables with skeleton rows and cols
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>


<!-- start home buttons  div -->
<div class="container">
	<div class="row oir-featured-row">
		<div class="md_top_margins">&nbsp;</div>
	</div>
</div>

<div class="container bg-image">
    <?php foreach ($rows as $row_number => $columns): ?>
      <div class="row oir_grey md_bottom_margins">
        <?php foreach ($columns as $column_number => $item): ?>
         <div class="three columns oir_white offset-by-quarter offset-bt-by-one">
            <?php print $item; ?>
          </div>
	<?php endforeach; ?>
      </div>
    <?php endforeach; ?>
</div><!-- closing div -->





