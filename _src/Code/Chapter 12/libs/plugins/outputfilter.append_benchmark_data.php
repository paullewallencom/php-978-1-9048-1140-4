<?php
function smarty_outputfilter_append_benchmark_data($source, &$smarty)
{
    global $benchmark;

    $source .= '<div id="benchmark">';
    $source .= 'Generated in ' . $benchmark . ' secs.';
    $source .= '</div>';

    return $source;
}
?>