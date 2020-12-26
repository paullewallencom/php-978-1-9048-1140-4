<body>
{literal}
<style>
.border_bottom
{
	border-bottom: 1px solid;
}
</style>
{/literal}
<h2>Transcript of {$roll}</h2>
<h4>Total Credit Completed : {$total}</h4>
<hr noshade />
<table width="791" align="center">
{foreach key=semester item=subjects from=$data}
  <tr>
    <td width="134" class="border_bottom"><strong>semester:</strong></td>
    <td width="248" class="border_bottom"><strong>{$semester}</strong></td>
    <td width="126" class="border_bottom">&nbsp;</td>
    <td width="61" class="border_bottom">&nbsp;</td>
    <td width="61" class="border_bottom">&nbsp;</td>
  </tr>
 {foreach key=course_code item=data from=$subjects name=subject}
   <tr>
    <td>&nbsp;{$smarty.foreach.subject.iteration}</td>
    <td>&nbsp;{$course_code}</td>
    <td>&nbsp;{$data.title}</td>
    <td>&nbsp;{$data.credit}</td>
    <td>&nbsp;{$data.grade}</td>
  </tr>
 {/foreach}
 {/foreach}

</table>
</body>
