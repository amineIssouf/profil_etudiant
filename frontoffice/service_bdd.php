<?php
function connexionbdd()
{
    $dsn = 'mysql:host=localhost;dbname=bts;charset=utf8';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $user, $password);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
        exit;
    }
    
}

