<?php
include_once('libs/Smarty.class.php');
$smarty = new Smarty;

if (empty($_GET['language'])) {
    $smarty->assign('language', 'english');
} else {
    if ($_GET['language'] == 'en') {
        $smarty->assign('language', 'english');
    } elseif ($_GET['language'] == 'it') {
        $smarty->assign('language', 'italian');
    }
}

// list of available consulting types
$smarty->assign('types', array(
    'custom'   => 'Custom Functions',
    'review'   => 'Code Review',
    'database' => 'Database Design',
));

// list of possible payment options
$smarty->assign('payment', array(
    'pre'    => 'Pre-paid',
    'aswego' => 'Pay as we go',
));

// list of available languages
$languages = array(
    'en' => 'English',
    'it' => 'Italian',
    'de' => 'German',
    'pt' => 'Portuguese'
);
$smarty->assign('languages', $languages);

$smarty->display('request.tpl');
?>
