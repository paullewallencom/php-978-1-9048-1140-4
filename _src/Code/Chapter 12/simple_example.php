<?php
$language_code = 'pt_BR';
putenv("LANG=$language_code");
setlocale(LC_ALL, $language_code);

$domain = 'smartybook';
bindtextdomain($domain, './locale');
textdomain($domain);
?>

<h1>Translation to Language Code: <?php echo $language_code; ?></h1>

<?php
echo gettext("A message to translate") . "<br />\n";
echo gettext("second message") . "<br />\n";
echo gettext("third message") . "<br />\n";
?>
