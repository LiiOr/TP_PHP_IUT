<?php
require_once('database.php');


function retournerLesPosts()
{
    $db = initDatabse();
    $res = $db->query("SELECT * FROM posts;", PDO::FETCH_ASSOC);
    return $res;
}
