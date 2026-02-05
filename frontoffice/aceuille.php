<?php
require_once '../bdd/service_bdd.php';
connexionbdd();
$les_etudiants=recuperer_les_etudiant();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Portail Étudiants</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="welcome.css"> </head>
<body>
    <div class="wrap">
        <div class="hero welcome-screen">
            <div class="glow"></div>
            <div class="hero-inner welcome-content">
                <h1>Bienvenue sur le Portail BTS de lycée Younoussa Bamana</h1>
                <p class="subtitle">Explorez les talents et les projets des etudiants.</p>
                
                <H3>Vous rechrecher un etudiant ?</H3><br>
                <form action="">
                    <p class="subtitle">effectuez votre recherche.</p>
                    <label for="rechercher"></label>
                    <input type="text" name ="rechercher">
                    <input type="submit" value="Rechercher">
                </form>
            </div>
        </div><br>
        <div class="hero welcome-screen">
            <form action="profile.php" method="POST">
                <label for="etudiant">Veuillez selectionner l'etudiant que vous souhaitez voir voir ses projets et ses passions</label>
                <select name="etudiant">
                    <?php
                    for ($i=0; $i< count($les_etudiants); $i++)
                    {
                        if ($les_etudiants[$i]['Id'] === $getData['etudiant'])
                        {
                            echo  '<option value="' . $les_etudiants[$i]['Id'] . '" selected>' . $les_etudiants[$i]['prenom'] . ' ' . $les_etudiants[$i]['nom'] . '</option>';
                        } else
                        {
                            echo  '<option value="' . $les_etudiants[$i]['Id'] . '">' . $les_etudiants[$i]['prenom'] . ' ' . $les_etudiants[$i]['nom'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <input type="submit" value="Rafraichir">
            </form>
            
        </div>
        
        <footer>
            © 2026 Amine Issouf Abdou Mouhoudhoir
        </footer>
    </div>
</body>
</html>