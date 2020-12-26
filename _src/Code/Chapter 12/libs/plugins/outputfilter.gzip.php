<?php
/*
 * Type:    outputfilter
 * Name:    gzip
 * Author:    Joscha Feth, joscha@feth.com
 */
function smarty_outputfilter_gzip($tpl_source, &$smarty)
{
    /* the compression level to use
       default: 9
       -------------------------------------
                     0 -> 9
       less compressed -> better compressed
       less CPU usage  -> more CPU usage
       -------------------------------------
    */
    $compression_level = 9;

    /* force compression, even if gzip is not sent in HTTP_ACCEPT_ENCODING,
       for example Norton Internet Security filters this, but 95% percent of
       the browsers do support output compression, including Firefox 
       and Opera.
       default: yes
    */
    $force_compression = true;

    // message to append to the template source, if it is compressed
    $append_message = "\n<!-- zlib compression level " . 
            $compression_level . " -->";

    // only compress the output if:
    // - headers were not sent yet
    // - zlib extension is available
    // - caching is disabled in smarty
    // - correct encoding is sent, or compression is forced
    if ((!headers_sent()) && (extension_loaded('zlib')) && (!$smarty->caching)
            && (strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')
            || $force_compression)) { 
        $tpl_source = $tpl_source . $append_message;
        $tpl_source = gzencode($tpl_source, $compression_level);
        header('Content-Encoding: gzip');
        header('Vary: Accept-Encoding');
        header('Content-Length: ' . strlen($tpl_source));
    }
    return $tpl_source;
}
?>