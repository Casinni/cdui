<?php
    require_once('header.php');
   require_once("PDO/PersonneDB.php");
   //on récupere l'id de l'url ex: http://127.0.0.1/cdui/supprimerPersonne.php?id=19
   $id_pers=($_GET['id']) ?? null;
?>

    <main id="contenu" class="container">
        
        <section id="lesposts" style="margin:20px auto 0">
     <div class="container">
  <?php
    $res=suppressionPersonne($id_pers,$pdo);
    if($res=="OK"){

        echo "<h3><img src='images-gym/check.png'>L'enregistrement numero $id_pers est supprimé de la BDD!</h3>";

    }
    else {
         //retourne le message d'erreur capturé par le try catch de la fonction ajoutPersonne
    echo "C'est quoi ce bordel! detail de l'erreur $res";
    }
  ?>
     </div>
    </section>
        </main>
    <?php
    require_once('footer.php');
?>