<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$test = $bdd->query('SELECT * from client');
$donne=$test->fetch();
echo $donne['nom'];
$test->closeCursor();
?>