<?
include_once("libs/smarty.class.php");
class student
{
	var $name;
	var $roll;
}
 
$student = new student();
$student->name = "Arifin";
$student->roll = "29";

$smarty = new smarty();

$smarty->assign("student", $student);
$smarty->display("oop_style.tpl");
?>
