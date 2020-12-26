<?php

require("libs/Smarty.class.php");
require_once("get_data.php");
require_once("books.php");

$book = new bo_books();
$book->apply_discount();

$smarty = new Smarty; 

$smarty->assign("book",$book);

$smarty->display('index.tpl');

?>
