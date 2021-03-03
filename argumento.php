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

<body class="page_principale">
    <header>
        <h1>Tapez les mots <span>clés</span> à <span>contredire</span></h1>
    </header>
    <main>
        <form method="post">
            <label class="field field_v3 burger">
                <input value="" type="text" name="motCle" id="motCle" class="field__input" placeholder="Mots-clés">
                <span class="field__label-wrap">
                    <span class="field__label">Trouve tes arguments !</span>
                </span>
            </label>
            <blockquote>
                <p>Vous pouvez recherchez jusqu'à <span>3</span> mots-clés</p>
                <p>Vous devez séparer vos mots-clés par une <span>vigule</span>, </p>
                <p><em>exemple: trop cher<span>,</span> manque de temps<span>,</span> pas interessé</em></p>
            </blockquote>
            <?php
            if (isset($_POST['motCle'])) {
                try {
                    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
                } catch (Exception $e) {
                    die('Erreur : ' . $e->getMessage());
                }

                $mot = $_POST['motCle'];

                $tableObjection = $bdd->query('SELECT * FROM table_objection');
                $trouveMot = false;

                while ($donne_objection = $tableObjection->fetch() and !$trouveMot) {
                    if ($mot == $donne_objection['objection']) {
                        $indice_objection = $donne_objection['id_objection'];
                        $trouveMot = true;
                        $nombrearg = 0;
                        $tableReponse = $bdd->query('SELECT * from table_reponse natural join jonction where id_objection=' . $indice_objection . '');
                        while ($donne_reponse = $tableReponse->fetch()) {
                            $reponse = $donne_reponse['reponse'];
                            $guillement = "\"";
                            if ($reponse != null) {
                                $nombrearg++;
                                 ?>
                                <p class="argument">
                                    <strong>#<?php echo $nombrearg; ?></strong>
                                    <?php echo $guillement, $reponse, $guillement; ?>
                                </p>
                                <?php
                            }
                        }
                        $tableReponse->closeCursor();
                    }
                }
                $tableObjection->closeCursor();
            }
            ?>
        </form>
        <script src="app.js"></script>
    </main>
    <div class="compte">
        <img src="images/compte.png" width="30px" height="30px">
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $tableUser = $bdd->query('SELECT * FROM client');
        $trouveCli=false;
        while($donne_user=$tableUser->fetch() and !$trouveCli){
            if($donne_user['immatriculation']==$_GET['usr']){
                $trouveCli=true;
                ?>
                <p><?php echo $donne_user['nom_cli'] ;?></p>
                <?php
            }
        }
        $tableUser->closeCursor();
        ?> 
    </div>
</body>

</html>