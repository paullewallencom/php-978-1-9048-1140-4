<?
mysql_connect("localhost", "root", "root");
mysql_select_db("smarty");
$result = mysql_query("select  semester_id,  courses.course_id, course_title, course_credit, grade from grade, courses where id='97016' and courses.course_id = grade.course_id");
while ($row = mysql_fetch_assoc($result))
{
	$semester[$row['semester_id']][$row['course_id']]=array("title"=>$row['course_title'], "grade"=>$row['grade'], "credit"=>$row['course_credit']);
	$total_credit += $row['course_credit'];
}

include("libs/smarty.class.php");
$smarty = new smarty();
$smarty->assign("data", $semester);
$smarty->assign("roll","97016");
$smarty->assign("total",$total_credit);
$smarty->display("transcript.tpl");
?>
