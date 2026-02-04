<?php

$dsn = 'mysql:host=localhost;dbname=bts;charset=utf8';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aceuil</title>
    <link rel="stylesheet" href="style.css"></head>
<body>
    <section>
        <form action="" method="POST">
            <label for="nom">Nom</label>
            <input type="text" name="nom">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom">
            <label for="classe">classe</label>
            <input type="text" name="classe">
            <input type="submit" value="ENVOYER">
        </form>
    </section>
    
</body>
</html>