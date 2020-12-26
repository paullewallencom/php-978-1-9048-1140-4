<html>
<head> <title> Site Architecture Example </title> 
</head>

<body>

<table border="0" width="100%">
 <tr>
   <td align="left">
     <a href="http://www.packtpub.com">
      <img src="images\PacktLogoSmall.png" border="0">
     </a>
     <img src="images\focused.gif">
   </td>
   <td>
   <h1> Chapter 2 Example </h1>
   </td>
 </tr>
</table> 

<br> 
Here are the books in a two-column table : 
<br> <br>

<table border="1" width="100%">

{section name=tbl loop=$book->title}

 {if %tbl.index% is not odd}

 <tr>
 {/if}

 <td align="left">
  <table>
   <tr>
    <td> 
      <img src="images\{$book->image[tbl]}" width="220">
    </td>
 
    <td valign="top">
      <font size=+1><b> {$book->title[tbl]} </b></font><br> 
      <font size=-1 color=blue><b>  {$book->author[tbl]} </b></font><br>
      {$book->description[tbl]} <br>
      Year: {$book->year[tbl]} <br>
      <font size=-1>Cover Price: <s>${$book->price[tbl]}</s></font> <br>
      Our Price: ${$book->discounted[tbl]} 
      <font color=red> save {$book->discount[tbl]} % </font>
    </td>
   </tr>
  </table>
 </td> 

 {if %tbl.index% is odd}

 </tr>
 {/if}

{/section}

</table>

</body>

</html>
