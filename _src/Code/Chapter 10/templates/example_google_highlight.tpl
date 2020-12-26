<html>
<head>
<title>Example Corp.</title>
</head>
<body>

Search results:<br />
<ul>
{section name="i" loop=$search_results}
  <li>{$search_results[i]|google_highlight:$keywords}</li>
{sectionelse}
 
      <li>No results could be found for '{$keywords}'.</li>
    {/section}
    </ul>

    Displaying results 1 - {$search_results|@count}.

</body>
</html>
