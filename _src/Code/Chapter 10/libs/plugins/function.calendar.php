<?php
/*
 * Smarty plugin
 * File:     function.calendar.php
 * Type:     function
 * Name:     calendar
 * Purpose:  Displays a calendar view of a month
 * Example:  {calendar}
 *           {calendar month=4 year=2005}
 * Install:  Drop into plug-in directory
 */
function smarty_function_calendar($params, &$smarty)
{
    extract($params);
    $html_result = '';

    $time = time();
    // if the 'month' parameter is not used, then 
    // use the current month instead
    if (!isset($month)) {
        $month = date("n", $time);
    }
    // if the 'year' parameter is not used, then 
    // use the current year instead
    if (!isset($year)) {
        $year = date("Y", $time);
    }
    // unix timestamp for the first day of this month
    $first_day_ts = mktime(0, 0, 0, $month, 1, $year);

    // create the table header
    $html_result = '<table border="1">';
    $html_result .= '<tr>
                      <th width="14%">Sunday</th>
                      <th width="14%">Monday</th>
                      <th width="14%">Tuesday</th>
                      <th width="14%">Wednesday</th>
                      <th width="14%">Thursday</th>
                      <th width="14%">Friday</th>
                      <th width="14%">Saturday</th>
                    </tr>';
$current_day = 1;
    $current_week = 1;
    // total days within this month
    $total_days = date("t", $first_day_ts);
 
    // the week day number that the first day of the 
    // month falls on (Sunday = 0; Saturday = 6)
    $first_day = date("w", $first_day_ts);

    // loops through the days
    while ($current_day <= $total_days) {
        $html_result .= '<tr>';
        for ($i = 0; $i < 7; $i++) {
            if ((($current_week == 1)
                    && ($i >= $first_day)) ||
                    (($current_week > 1)
                    && ($current_day <= $total_days))) {
                $html_result .= '<td valign="top">';
                $html_result .= $current_day ;
                if ((isset($values)) && (!empty($values[$current_day]))) {
                    $html_result .= $values[$current_day];
                } else {
                    $html_result .= '&nbsp;';
                }
                $html_result .= '</td>';
                $current_day++;
            } else {
                $html_result .= '<td>&nbsp;</td>';
            }
        }
        $html_result .= '</tr>';
        $current_week++;
    }
    $html_result .= '</table>';

    print $html_result;
}
?>
