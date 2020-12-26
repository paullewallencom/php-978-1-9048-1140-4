{config_load file="$language.conf" section="Request"}
{include file="header.tpl"}
{include file="navigation.tpl" page_title="Request a Consulting Quote"}

<form method="post" action="request_quote.php">
<table border="1">
  <tr>
    <td bgcolor="{cycle values="#F0F0F0,#DDDDDD"}">Name:</td>
    <td><input type="text" name="full_name" size="40"></td>
  </tr>
  <tr>
    <td bgcolor="{cycle values="#F0F0F0,#DDDDDD"}">Phone Number:</td>
    <td><input type="text" name="phone" size="20"></td>
  </tr>
  <tr>
    <td bgcolor="{cycle values="#F0F0F0,#DDDDDD"}">
      Appointment Date and Time:
    </td>
    <td>
      {html_select_date display_years=false}&nbsp;
      {html_select_time display_seconds=false minute_interval=15}
    </td>
  </tr>
  <tr>
    <td bgcolor="{cycle values="#F0F0F0,#DDDDDD"}">
      Consulting Type:
    </td>
    <td>{html_checkboxes name="type" options=$types separator="<br />"}</td>
  </tr>
  <tr>
    <td bgcolor="{cycle values="#F0F0F0,#DDDDDD"}">
      Payment Option:
    </td>
    <td>{html_radios name="payment" options=$payment selected="pre"}</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="Request">
    </td>
  </tr>
</table>
</form>

{include file="footer.tpl"}
