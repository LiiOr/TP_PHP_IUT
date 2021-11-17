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


