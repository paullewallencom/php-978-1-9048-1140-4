<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
function highlight($output, &$smarty)
{
// highlight the word "smarty" on our template source
    return str_replace('smarty', '<b>smarty</b>', $output);
}
$smarty->register_outputfilter('highlight');
$smarty->display('example1.tpl');
?>