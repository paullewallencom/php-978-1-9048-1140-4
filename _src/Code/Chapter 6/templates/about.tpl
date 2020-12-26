{config_load file="$language.conf" section="About"}
{include file="header.tpl"}
{include file="navigation.tpl" page_title="Management Team"}
{section name="i" loop=$team}
{cycle assign="background_color" values="#F0F0F0,#DDDDDD"}
<p style="background: {$background_color};"><b>#{$smarty.section.i.iteration}: {$team[i].name}, {$team[i].title}</b> - {$team[i].description}</p>
{/section}
{include file="footer.tpl"}
