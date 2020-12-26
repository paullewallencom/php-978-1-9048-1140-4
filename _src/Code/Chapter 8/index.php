<?php

require("libs/Smarty.class.php");

$publisher='Packt Publishing';
$website = 'http://www.packtpub.com';

$smarty = new Smarty; 

$smarty->assign_by_ref('publisher',$publisher);
$smarty->assign('website',$website);

$smarty->display('index.tpl');

print ' <hr> 
	<h3> Hello, I am index.php. First, I displayed the index.tpl template. </h3>
	Now we will see what happened to the content our variables: <br>
	The $publisher variable was sent using <b> assign_by_ref </b> method 
	and now contains <font color=red> '. $publisher .'</font><br>
	and the $website variable was sent using <b> assign </b> method 
	and now contains <font color=red> '. $website ;

?>
