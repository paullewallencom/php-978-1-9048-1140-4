<body>
{foreach item=student from=$students}
<table width="80%"  border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td width="38%" bgcolor="#CCCCCC">
    <strong>Profile of {$student.nick}</strong></td>
    <td width="62%">&nbsp;</td>
  </tr>
  <tr>
    <td>Name : </td>
    <td>{$student.name}</td>
  </tr>
  <tr>
    <td>Born</td>
    <td>{$student.born}</td>
  </tr>
  <tr>
    <td>Blood Group </td>
    <td>{$student.blood_grp}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{student.email}</td>
  </tr>
</table><br/>
{/foreach}
</body>
