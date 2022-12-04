<?php
// récupération de l'adresse de la page dans l'url
    $path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    echo $path;
    // récupération du dernier élément
    $current=basename($path);
    echo '<br>'.$current;

    // connexion bdd
    require_once('connexion.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Le Blog du club de gym</title>
    
   <!-- bootstrap-->
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <!--lien vers feuille de style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <!-- feuilles de style de nivo slider  (6-10)-->
     <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <!-- ma feuille de styles -->
    <link rel="stylesheet" href="style.css">
<body>
    <header id="bandeau">
        <div id="telephone" class="container">
            <!-- lien utile pour mobile -->
            <a href="tel:+33297979797">
                <i class="fa-solid fa-phone"></i> 02 97 97 97 97 
            </a>
        </div>
        <!-- bloc logo + menu -->
        <div class="fond">
            <nav id="menuprincipal" class="container">
                <a href="index.php">
                    <img src="images-gym/logo.png" alt="www.exogym.com">
                </a>
                <ul>
                    <li><a href="index.php"
                        <?php
                        if($current=='index.php'){
                            echo'class="choix"';
                        }
                        ?>
                    >Accueil</a></li>
                    <li><a href="clients.php"
                    <?php
                            if($current=='a-propos.php'){
                                echo'class="choix"';
                            }
                        ?>
                    >Adhérents</a></li>
                    <li><a href="#">Parcours</a></li>
                    <li><a href="cours.php" 
                        <?php
                        if($current=='cours.php'){
                            echo'class="choix"';
                        }
                        ?>
                    >Cours</a></li>
                    <li><a href="blog.php"
                        <?php
                        if($current=='blog.php'){
                            echo'class="choix"';
                        }
                        ?>
                    >Blog</a></li>
                    <li><a href="#">Prix</a></li>
                    <li><a href="contact.php"
                        <?php
                        if($current=='contact.php'){
                            echo'class="choix"';
                        }
                        ?>
                    >Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>