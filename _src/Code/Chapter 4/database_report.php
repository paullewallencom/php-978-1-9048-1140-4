<?
include("libs/smarty.class.php");
$smarty= new smarty();
mysql_connect("localhost","root","root");
mysql_select_db("smarty");
$result = mysql_query("SELECT area,
                              agent_name, 
                              item_name, 
                              quantity, 
                              item_price, 
                              (quantity*item_price) as total 
                       FROM   agents 
          INNER JOIN sales on agents.agent_id = sales.agent_id
          INNER JOIN items on sales.item_id = items.item_id 
          ORDER BY area ASC");
while ($row = mysql_fetch_assoc($result))
{
	$areas[] = $row['area'];
	$agents[] = $row['agent_name'];
	$items[] = $row['item_name'];
	$quantities[] = $row['quantity'];
	$total[] = $row['total'];
}

$fields = array("area", "agent", "item", "quantity", "total");

$smarty->assign("areas", $areas);
$smarty->assign("agents", $agents);
$smarty->assign("items", $items);
$smarty->assign("quantities", $quantities);
$smarty->assign("total", $total);
$smarty->assign("fields", $fields);
$smarty->display("database_report.tpl");
mysql_free_result($result);
?>
