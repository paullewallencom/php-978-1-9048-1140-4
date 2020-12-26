<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

$results = array(
    'Management Team',
    'Customer Service',
    'Professional Services'
);
$search_keywords = 'professional service team';
$smarty->assign(array(
    'search_results' => $results,
    'keywords'       => $search_keywords
));

$smarty->display('example_google_highlight.tpl');
?>
