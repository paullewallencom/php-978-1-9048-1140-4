<?php
include_once('include/Smarty.class.php');
$smarty = new Smarty;
$smarty->caching = 1;

// only run this SQL query if necessary
if (!$smarty->is_cached('templates/example4.tpl')) {
    $stmt = "SELECT
                user_id,
                user_full_name
             FROM
                user
             WHERE
                user_name='" . addslashes($username) . "'";
    $result = mysql_query($stmt, $conn);
    if ($result) {
        $row = mysql_fetch_assoc($result);
        $smarty->assign('user_info', $row);
    }
}

$smarty->display('templates/example4.tpl');
?>