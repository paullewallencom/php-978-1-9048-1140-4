<?php
function getUserID($username)
{
    global $conn;
    static $returns;

    // check if we already have the result of 
    // this function for the given username
    if (!empty($returns[$username])) {
        return $returns[$username];
    }

    $stmt = "SELECT
                user_id
             FROM
                user
             WHERE
                user_name='" . addslashes($username) . "'";
    $result = mysql_query($stmt, $conn);
    if ($result) {
        $user_id = mysql_result($result, 0, 0);
        // cache this result for later
        $returns[$username] = $user_id;
        return $user_id;
    }
}

// first call will trigger a DB query
$user_id = getUserID('andrei');
// second call will get its results from the cache
$user_id = getUserID('andrei');
?>