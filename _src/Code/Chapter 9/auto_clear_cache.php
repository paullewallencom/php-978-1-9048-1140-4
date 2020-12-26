<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;
$smarty->compile_check = true;

// expiration is of 2 hours
$expiration_secs = 2 * 60 * 60;
$smarty->clear_all_cache($expiration_secs);
?>