<?php

/**
 * @file
 * Theme implementation for displaying search results.
 *
 * Available variables:
 * - $content: All results as it is rendered through mysearch-result-item.tpl.php
 *
 */
?>
<?php if ($content): ?>
  <div class="mysearch-results">
    <?php print $content; ?>
  </div>
  <?php print $pager; ?>
<?php else : ?>
  <div class="mysearch-results empty">
    <?php if (isset($non_key)): ?>
      <?php print $non_key;?>
    <?php else : ?>
      <?php print t('Your search yielded no results');?>
    <?php endif; ?>
  </div>
<?php endif; ?>