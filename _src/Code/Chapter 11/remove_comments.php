<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

function remove_html_comments($source, &$smarty)
{
    // remove any html comments from the template source, even 
    // if they span multiple lines
    return preg_replace('/<!--.*-->/Ums', '', $source);
}

$smarty->register_prefilter('remove_html_comments');
$smarty->load_filter('output', 'trimwhitespace');
$smarty->display('remove_comments.tpl');
?>
