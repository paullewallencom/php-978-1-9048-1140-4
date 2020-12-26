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

    $team = array(
        0 => array(
                'name'  => 'Julian Fox', // crazy like a fox!
                'title' => 'CEO',
                'description' => 'Julian handles all management issues related to 
                                  the company, such as dealing with potential 
                                  customers and providing a clear strategy 
                                  for services.',
            ),
        1 => array(
                'name'  => 'Ryan Foster',
                'title' => 'CTO',
                'description' => 'Ryan handles all technical aspects of 
                                  consulting services available through 
                                  Smarty LLC',
            ),
        2 => array(
                'name'  => 'Adam Salsbury', // he will sell you anything!
                'title' => 'VP Sales',
                'description' => 'Adam is the person who closes our consulting 
                                  deals and handles all interactions with 
                                  existing customers.',
            ),
    );
    $smarty->assign('team', $team);

    // list of available languages
    $languages = array(
        'en' => 'English',
        'it' => 'Italian',
        'de' => 'German',
        'pt' => 'Portuguese'
    );
    $smarty->assign('languages', $languages);

    $smarty->display('about.tpl');
    ?>
