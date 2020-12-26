    <p>
      Language: 
    {foreach from=$languages key="abbreviation" item="title" name="lang"}
      {strip}
      <a href="?language={$abbreviation}">{$title}</a>
      {if not $smarty.foreach.lang.last}
      &nbsp;|
      {/if}
      {/strip}
    {/foreach}
    </p>

    <h3>{#company_name#}{if $page_title != ''}: {$page_title}{/if}</h3>
