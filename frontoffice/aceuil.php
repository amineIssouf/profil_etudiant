<?php
require_once 'service_bdd.php';
connexionbdd();

if (isset($_POST['nom']) 
    && isset($_POST['prenom']) 
    && isset($_POST['classe']) 
    && isset($_POST['description']) 
    && isset($_POST['passions']) 
    && isset($_POST['projet']))
{
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $classe= $_POST['classe'];
    $description= $_POST['description'];
    $passions= $_POST['passions'];
    $projet= $_POST['projet'];

    echo "ton nom de famille est ". $nom ;

    try {
        $db=connexionbdd();
        $sql = "INSERT INTO etudiant (nom, prenom, classe, description, passions, projet)
            VALUES (:nom, :prenom, :classe, :description, :passions, :projet)";
        $requete = $db->prepare($sql);
        $requete->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':classe' => $classe,
            ':description' => $description,
            ':passions' => $passions,
            ':projet' => $projet,
        ]);
        echo "<p style='color:green;'>L'etudiant $prenom $nom a été ajouté avec succès !</p>";
    } catch (PDOException $e){
        echo "<p style='color:red;'>Erreur SQL : " . $e->getMessage() . "</p>";
    }

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
    <div class="grid">
        <section>
            <form action="" method="POST">
                <label for="nom">Nom</label>
                <input type="text" name="nom">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom">
                <label for="classe">classe</label>
                <input type="text" name="classe">
                <label for="description">description</label>
                <input type="text" name="description">
                <label for="passions">passions</label>
                <input type="text" name="passions">
                <label for="projet">projet</label>
                <input type="text" name="projet">
                <input type="submit" value="ENVOYER">
            </form>
        </section>
    </div>
    
</body>
</html>