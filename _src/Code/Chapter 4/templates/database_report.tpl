<html>
<body>
<table cellpadding="4" border="0" cellspacing="1" id='report_table' ><tr>
{section name=id loop=$fields}
<th>{$fields[id]}</th>
{/section}
</tr>
{section name=data loop=$areas}
<tr bgcolor='{cycle values="#EBEBEB, #ACABAB"}'>
<td>{$areas[data]}</td>
 
<td>{$agents[data]}</td>
<td>{$items[data]}</td>
<td>{$quantities[data]}</td>
<td>{$total[data]}</td>
</tr>
{/section}
</table>
</body>
</html>
{literal}
<style>
#report_table th{
	border: 1px solid; 
	/*padding-left: 15px;*/
	padding-right: 30px;
	color: #EEEEEC;
	background-color: #25510D;
	text-align: left;
}
#report_table {
	border: 1px solid #cccccc;
}
</style>
{/literal}