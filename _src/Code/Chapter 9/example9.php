<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->caching = 1;
$smarty->use_sub_dirs = TRUE;

// $_GET['id'] holds the integer 8143
$news_entry_id = (integer) $_GET['id'];
if (!$smarty->is_cached('news.tpl', 'news|'.$news_entry_id)) {
    //$info = get_news_article_details($news_entry_id);
    $smarty->assign(array(
        'news_entry_id'    => 8143,//$info['news_id'],
        'news_entry_title' => 'Test',//$info['news_title']
    ));
}

$smarty->display('news.tpl', 'news|'.$news_entry_id);
?>