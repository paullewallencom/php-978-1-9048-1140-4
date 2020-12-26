<?
	include("libs/smarty.class.php");
	$smarty = new smarty();
	
	$date = "10/01/2005"; //October 01, 2005
 
	$week_days = array("Sat"=>1, "Sun"=>2, "Mon"=>3,"Tue"=>4,"Wed"=>5, "Thu"=>6,"Fri"=>7);
	
	$total_day_of_month = get_total_day($date);
	$starting_day = $week_days[Date("D",strtotime($date))] - 1;
	foreach (array_keys($week_days) as $day)
	$days[] = $day;
	for ($i=0; $i<$starting_day; $i++)
	$days[] = "&nbsp;";
	for ($i=1; $i< ($total_day_of_month+1); $i++)
	$days[] = $i;
	
	$smarty->assign("title","October 2005");
	$smarty->assign("special_days", $days);
	$smarty->display("calendar.tpl");
	
function get_total_day($date)
{
	$time_stamp = strtotime($date);
	$month_ar = split("/", $date);
	$month = $month_ar[0];
	$year = Date("Y",$time_stamp);
	for ($i=28; $i<33; $i++)
	{
		if (!checkdate($month, $i, $year)){
			return ($i - 1);
		}
	}
}
	
?>
