<html>
<head>
<title>Survey Form</title>
<style type="text/css">
{literal}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
{/literal}
</style>
</head>
<body>
<p><strong>Survey Form</strong></p>
<form name="survey_form" method="post" action="">
  <table width="339" border="0" cellpadding="4" cellspacing="0">
    <tr>
      <td width="165">Name: </td>
      <td width="158"><input name="name" type="text" id="name"
          value="{$name}"></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><input name="email" type="text" id="email" value="{$email}"></td>
    </tr>
    <tr>
      <td>Country: </td>
      <td><select name="country">
        {html_options options=$countries selected=$country}
      </select></td>
    </tr>
    <tr>
      <td>State: </td>
      <td><select name="state">
        {html_options options=$states selected=$state}
                  </select></td>
    </tr>
    <tr>
      <td valign="top">Company Name: </td>
      <td><p>
        <input type="text" name="company_name">
        <br>
        {$company_start}</p>      </td>
    </tr>
    <tr>
      <td valign="top">Company Starts: </td>
      <td>{html_select_date}</td>
    </tr>
    <tr>
      <td valign="top">Yearly Revenue of your Company: </td>
      <td>{html_radios name="yearly_revenue" options=$revenues 
           selected=$revenue separator="<br />"}
</td>
    </tr>
    <tr>
      <td valign="top">Primary OS: </td>
      <td>
      <p>{html_checkboxes name="os" options=$oses selected=$os 
          separator="<br />"}</p>       
      </td>
    </tr>
  </table>
</form>
</body>
</html>
