<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zxx" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Argumento</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="description" content="Une objection + des arguments = des ventes" />
    <meta name="keywords" content="vente,mot clé, argument,entreprise" />
    <link rel="icon" type="image/png" href="images/logo.png" />

</head>

<body class="page_connection">
    <header>
        <h1> Bienvenu sur <span>Argumento</span></h1>
        <h3>Veuillez vous connectez pour continuer</h3>
    </header>
    <main>
        <form method="post">
            <label class="field field_v2">
                <input name="Login" class="field__input" placeholder="Email ou Pseudo">
                <span class="field__label-wrap">
                    <span class="field__label">Votre login</span>
                </span>
            </label>
            <label class="field field2 field_v2">
                <input type="password" name="motPasse" class="field__input" placeholder="il doit rester secret">
                <span class="field__label-wrap">
                    <span class="field__label">Votre mot de passe</span>
                </span>
            </label>
            <input type="submit" value="Valider" class="valider">

            <?php
            $motDePasse="admin";
            $email="admin";
            if(isset($_POST['Login']) AND isset($_POST['motPasse'])){
                //echo '<p class="erreur">veuillez saisir votre email et votre mot de passe</p>'
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }

                $tableClient = $bdd->query('SELECT * FROM client');
                while($donne = $tableClient->fetch()){
                    
                }

                $test->closeCursor();
            }
            ?>
        </form>
    </main>
</body>