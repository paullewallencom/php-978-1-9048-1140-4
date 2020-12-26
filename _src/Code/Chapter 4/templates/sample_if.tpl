<table>
<tr><td>Name</td><td>Roll</td><td>Grade</td></tr>
	<tr>
      <td>{$student->name}</td>
      <td>{$student->roll}</td>
{if $student.grade='F'}
<td bgcolor='red'>Failed</td>
{else}
<td bgcolor='green'>Passed</td>
{/if}
</tr>
</table>
