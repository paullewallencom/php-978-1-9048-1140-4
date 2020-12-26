<?php
// let's re-use PEAR's Date package for this function
require_once('Date.php');

function smarty_insert_get_local_time($params, &$smarty)
{
    if ($params['city'] == 'houston') {
        $date = new Date();
        // convert to the CST timezone
        $date->convertTZByID('America/Chicago');
        // getDate() returns the date formatted on the following format:
        // i.e. 2005-12-21 12:34:32
        $local_time = $date->getDate();
    }
    // ... continue with other cities

    return $local_time;
}
?>
