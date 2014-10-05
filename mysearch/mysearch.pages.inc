<?php

/**
 * Menu callback; presents the search results.
 *
 * @param $keys
 *   Keywords to use for the search.
 */
function mysearch_searchpage($key = '') {
  $key = trim($key);
  // Default result output is an empty string.
  $results = array();
  // Determs title of the page
  $title = t('Search results');
  // Only search if there are keywords.
  if ($key && drupal_strlen($key) >= 3) {
    $title .= ' ' . t('for') . ' ' .  $key;
    // Collect the search results.
    $results['content'] = mysearch_search_data($key);

    // Log the search key.
    watchdog('mysearch', 'Searched for %key.', array('%key' => $key), WATCHDOG_NOTICE, l(t('mysearch results'), 'mysearch/' . $key));
  }
  else {
    $results['non_key'] = t('You must include keyword with 3 character or more.');
  }

  // Set the page title
  drupal_set_title($title);
  $results['pager'] = theme('pager');
  return theme('mysearch_results', $results);
}