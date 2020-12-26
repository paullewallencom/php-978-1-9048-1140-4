<?php
require_once('DB.php');
// connect to the database server
$dsn = array(
    'phptype'  => 'mysql',
    'hostspec' => 'localhost',
    'username' => 'cache_user',
    'password' => '4Ef6Th23qw',
    'database' => 'cache'
);
$dbh = DB::connect($dsn);

function db_cache_handler($action, &$smarty, &$cache_contents,
        $template_file = null, $cache_id = null,
        $compile_id = null, $expiration_time = null)
{
    global $dbh;

    // build the where clause
    $where_params = array();
    if (!empty($template_file)) {
        $where_params[] = "template_file='" . addslashes($template_file) . "'";
    }
    if (!empty($cache_id)) {
        $where_params[] = "cache_id='" . addslashes($cache_id) . "'";
    }
    if (!empty($compile_id)) {
        $where_params[] = "compile_id='" . addslashes($compile_id) . "'";
    }
    $where_clause = implode(' AND ', $where_params);

    // possible values for $action are: read, write or clear
    if ($action == 'read') {
        $stmt = "SELECT
                    contents
                 FROM
                    smarty_cache
                 WHERE " . $where_clause;
        $cache_contents = $dbh->getOne($stmt);
    } elseif ($action == 'write') {
        // check if this is already cached
        $stmt = "SELECT
                    id
                 FROM
                    smarty_cache
                 WHERE " . $where_clause;
        $id = $dbh->getOne($stmt);
        if (empty($id)) {
            $stmt = "INSERT INTO
                        smarty_cache
                     (
                        template_file,
                        cache_id,
                        compile_id,
                        contents
                     ) VALUES (
                        '" . addslashes($template_file) . "',
                        '" . addslashes($cache_id) . "',
                        '" . addslashes($compile_id) . "',
                        '" . addslashes($cache_contents) . "'
                     )";
        } else {
            $stmt = "UPDATE
                        smarty_cache
                     SET
                        template_file='" . addslashes($template_file) . "',
                        cache_id='" . addslashes($cache_id) . "',
                        compile_id='" . addslashes($compile_id) . "',
                        contents='" . addslashes($cache_contents) . "'
                     WHERE
                        id=$id";
        }
        $dbh->query($stmt);
    } elseif ($action == 'clear') {
        $stmt = "DELETE FROM
                    smarty_cache
                 WHERE " . $where_clause;
        $dbh->query($stmt);
    }
}
?>