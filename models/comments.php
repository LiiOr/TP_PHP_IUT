
<?php
require_once('database.php');


function retournerLesCommentaires($postId) {
    $db = initDatabse();
    $res = $db->query("SELECT * FROM comments WHERE post_id = '" . $postId . "';", PDO::FETCH_ASSOC);
    return $res;
}