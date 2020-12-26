<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 1;
$smarty->use_sub_dirs = TRUE;

// expiration is 1 hour
$expiration_secs = 1 * 60 * 60;
$smarty->clear_cache(null, 'news', null, $expiration_secs);
?>