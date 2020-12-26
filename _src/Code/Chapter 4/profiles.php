<?
include("libs/smarty.class.php");
$smarty = new Smarty ();

[.. your database connection done here ..]

$result = mysql_query("SELECT nick, name, born, blood_grp, email
                       FROM students st
                       LIMIT 10
                      "); //your sql
$students = array(); //just an empty array
while ($row = mysql_fetch_assoc($result))
{
	$students[] = $row; //append the whole $row array in $students
}

$smarty->assign("students",$students); //assign
$smarty->display("profiles.tpl"); //compile and render the output
?>
