<?
include("libs/smarty.class.php");
$smarty = new smarty();
$mytext = <<< EOD
This is a single line with line break
But linebreaks are not visible in HTML.
They need to be replaced with a &lt;br&gt; tag.
EOD;
$smarty->assign("sometext",$mytext);
$smarty->display("nl2br.tpl");
?>
