<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

include_once('libs/class.misc.php');
$smarty->register_modifier('auto_link_urls', array('Misc', 
'autoLinkURLs'));

$content = 'Welcome to our web site!

If you have any questions, please contact us by filling up the form at:
http://www.example.com/contact.php

The Management.';
$smarty->assign(array(
    'content' => $content
));

$smarty->display('example_auto_link_urls.tpl');
?>
