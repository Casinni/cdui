<?php

    //je me connecte à la base de données

    try{ //teste les infos de connexion
        $pdo=new PDO('mysql:host=localhost;dbname=cdui','root','');
       //adresse du serveurmysql;nom de bdd,identifianr bdd,mot de passe bdd
    }catch(PDOException $e){ 
        // si cela ne fonctionne pas je returne un message d'erreur
        die("erreur :".$e->getMessage());
    }

?>