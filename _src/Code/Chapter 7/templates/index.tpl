<html>
<head>
<title>Example Corp.</title>
</head>
<body>

<h3>Example Corp. - Contact Us</h3>

<p>
  Please choose the department that you are trying to contact, and your
  contact details, and we will get back to you within 48 hours.
</p>

{literal}
<script language="JavaScript">
<!--
function validateForm(f)
{
    if (f.details.value == '') {
        alert('Please enter your contact details.');
        return false;
    }
    return true;
}
//-->
</script>
{/literal}
 
<form method="post" action="contact_handler.php" onSubmit="return validateForm(this);">
<table border="1">
  <tr>
    <td><b>Department:</b></td>
    <td>
      {strip}
      {foreach key="name" item="description" from=$departments}
      <input type="radio" name="dept" value="{$name}" {if $name == 'marketing'}checked{/if}> {$description}<br />
      {/foreach}
      {/strip}
    </td>
  </tr>
  <tr>
    <td><b>Your Details:</b></td>
    <td>
      <input type="text" name="details" size="40">
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <b>Message:</b><br />
      <textarea name="message" style="width: 100%;"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Send Message"></td>
  </tr>
</table>
</form>

</body>
</html>
