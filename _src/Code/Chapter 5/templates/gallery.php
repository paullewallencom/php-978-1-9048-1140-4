<?
$fp = opendir("images");
while(false !== ($file = readdir($fp)))
{
	if ($file != "." && $file != "..")
	{	
		$files[] = $file;		
	}
}
echo "<pre>";
print_r($files);
echo "</pre>";
?>