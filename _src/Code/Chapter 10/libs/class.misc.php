<?php
class Misc
{
    function autoLinkURLs($text)
    {
        $text = preg_replace("'(\w+)://([\w\+\-\@\=\?\.\%\/\:\&\;]+)(\.)?'", "<a href=\"\\1://\\2\">\\1://\\2</a>", $text);
        $text = preg_replace("'(\s+)www\.([\w\+\-\@\=\?\.\%\/\:\&\;]+)(\.\s|\s)'", "\\1<a href=\"http://www.\\2\">www.\\2</a>\\3" , $text);
        return $text;
    }
}
?>
