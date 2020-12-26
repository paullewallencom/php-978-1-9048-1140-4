<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;

$language_code = 'pt_BR';
putenv("LANG=$language_code");
setlocale(LC_ALL, $language_code);

$domain = 'smartybook';
bindtextdomain($domain, './locale');
textdomain($domain);

$smarty->display('gettext1.tpl');
?>