<html>
<body>
<table>
<tr><td>Name</td><td>Roll</td></tr>
{foreach item=student from=$students}    
	<tr>
      <td>{$student.name}</td>
      <td>{$student.roll}</td>
</tr>
		{/foreach}
		</table>
		</body>
</html>
