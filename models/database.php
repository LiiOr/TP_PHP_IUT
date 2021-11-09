<?php

/**
 * Initialisation de la connexion à la base de données
 *
 * @author Fabien Bellanger
 * @return PDO|bool
 */
function initDatabse(): ?PDO
{
    try
    {
        $host     = 'mvc-mysql';
        $username = 'lpweb';
        $password = 'lpweb';
        $name     = 'lpweb_mvc';

        $db = new PDO("mysql:host=$host;dbname=$name", $username, $password);
        return $db;
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}

function retournerLesPosts() {

    $db = initDatabse();
    $res = $db->query("SELECT * FROM posts;", PDO::FETCH_ASSOC);
    return $res;
}

function retournerLesCommentaires($postId) {
    $db = initDatabse();
    $res = $db->query("SELECT * FROM comments WHERE post_id = '" . $postId . "';", PDO::FETCH_ASSOC);
    return $res;
}