<?
include_once("libs/smarty.class.php");
$smarty =new smarty();

$smarty->assign("name", "Junayed Ahnaf");
$smarty->assign("email", "junayed@sampledomain.com");

$countries = array("Bangladesh", "India", "Pakistan", "Nepal", "Maldives", "Srilanka", "Bhutan");
$country = 0;
$smarty->assign("countries", $countries);
$smarty->assign("country", $country);

$states = array("state1", "state2", "state3", "state4", "state5");
$state = 3;
$smarty->assign("states", $states);
$smarty->assign("state", $state);

$smarty->assign("company_name", "My World");
$smarty->assign("company_start_date", "12/2001");


$smarty->assign('revenues', array(
			1 => '$0-$10000',
			2 => '$10000-$20000',
			3 => '$20000-$50000',
			4 => '$50000+'));
$smarty->assign('revenue', 2);

$smarty->assign('oses', array(
			1 => 'Windows XP',
			2 => 'Linux',
			3 => 'Sun Solaris',
			4 => 'Mac OS'));
$smarty->assign("os", array(2,1));
$smarty->display("survey.tpl");
?>	
