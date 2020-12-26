<html>
<head> <title> Example of assign and assign_by_ref </title> 
</head>

<body>

<h3> Hello, I am the template index.tpl and I say: </h3>

I received the value of variable $publisher :
	<font color="blue"> {$publisher} </font> <br>

I received the value of variable $website : 
	<font color="blue"> {$website} </font> <br>
<br>

I will apply the UPPER modifier on both variables by doing : <br>

&nbsp;&nbsp;&nbsp; <b> assign var="publisher" value=$publisher|upper </b> <br>
&nbsp;&nbsp;&nbsp; <b> assign var="website" value=$website|upper </b> <br>

	{assign var="publisher" value=$publisher|upper}
	{assign var="website" value=$website|upper}
...Done ! <br> 
	 Now, $publisher is: 
	<font color="blue"> <b> {$publisher} </b></font> <br>

 
and $website is
	<font color="blue"> <b> {$website} </b></font> <br>

<h3> End of Template index.tpl </h3>
