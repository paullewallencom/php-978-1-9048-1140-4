<b>{$title}</b>
<table><tr>
{section name=days loop=$days_of_week}
<td>{$days_of_week[id]}</td>
{/section}
</tr>
{html_table loop=$special_days cols=7}
