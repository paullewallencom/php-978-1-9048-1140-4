<?php
ini_set("include_path",".;c:\\server\\xampp\\php\\pear\\");
include_once('libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->force_compile = TRUE;

// PEAR's Benchmark::Timer package
include_once('Benchmark/Timer.php');
$bench = new Benchmark_Timer;
$bench->start();

function register_compilation($source, &$smarty)
{
    $GLOBALS['bench']->setMarker('Finished compilation');
    return $source;
}

function append_benchmark_results($output, &$smarty)
{
    $GLOBALS['bench']->stop();
    $results = $GLOBALS['bench']->getProfiling();
    $output .= '<table border=1>';
    $output .=  
'<tr><th>Marker</th><th>Diff</th><th>Total</th></tr>';
    for ($i = 0; $i < count($results); $i++) {
        $output .= '<tr><td>' . $results[$i]['name'] . '</td>';
        $output .= '<td>' . $results[$i]['diff'] . '</td>';
        $output .= '<td>' . $results[$i]['total'] .  
'</td></tr>';
    }
    $output .= '</table>';

    return $output;
}

function remove_html_comments($source, &$smarty)
{
    // remove any html comments from the template source, even 
    // if they span multiple lines
    return preg_replace('/<!--.*-->/Ums', '', $source);
}

$bench->setMarker('Before display');

$smarty->register_prefilter('remove_html_comments');
$smarty->register_postfilter('register_compilation');
$smarty->register_outputfilter('append_benchmark_results');
$smarty->load_filter('output', 'trimwhitespace');
$smarty->display('benchmark.tpl');
?>
