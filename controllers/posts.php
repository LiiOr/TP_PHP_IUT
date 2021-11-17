<?php

require_once('models/comments.php');
require_once('models/posts.php');


function getPostsListController()
{
    $posts = retournerLesPosts();
    include('views/header.php');
    include('views/posts.php');
    include('views/footer.php');
    return $posts;
}
