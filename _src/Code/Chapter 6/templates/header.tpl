<html>
<head>
 <title>Smarty LLC</title>
</head>
<body>
{literal}
<script language="JavaScript">
<!--
function printMessage(str)
{
    alert(str);
}
//-->
</script>
{/literal}
<img src="images/new.gif">
{insert name="getCurrentTime" assign="current_time" script="time_functions.inc.php"}
The current time is: {$current_time}
