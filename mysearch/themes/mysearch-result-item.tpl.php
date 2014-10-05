<?php

/**
 * @file
 * Theme implementation for displaying a single search result.
 *
 * This template renders a single search result and is collected into
 * mysearch-results-page.tpl.php.
 *
 * Available variables:
 * - $url: URL of the result.
 * - $title: Title of the result.
 */
?>
<div class="mysearch-item">
  <h3 class="title">
    <a href="<?php print $url; ?>"><?php print $title; ?></a>
  </h3>
</div>