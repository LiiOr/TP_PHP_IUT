<?php

require_once('models/comments.php');
require_once('models/posts.php');



function getCommentsOfPostController($postId)
{
    //$postId = $_GET["postid"];
    $comments = retournerLesCommentaires($postId);

    include('views/header.php');
    include('views/comments.php');
    include('views/footer.php');
    return $comments;
}
