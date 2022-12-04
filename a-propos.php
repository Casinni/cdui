<?php
    require_once('header.php');
?>
    <main id="contenu" class="container">
        <figure id="visuel-cours">
            <img src="images-gym/visuel.jpg" alt="cours">
            <figcaption>
                <h1>A propos</h1>
            </figcaption>
        </figure>
        <?php
        // je récupère le contnu de la table articles
        $reponse=$pdo->query('SELECT * FROM articleS WHERE categorie_article="info"');
        ?>
   <?php 
            // afficher les résultats du select
            while($donnees=$reponse->fetch()){ //début de la boucle
            ?>
        <div class="presentation">
         
            <h2><?php echo $donnees['titre_article']; ?></h2>
            <div class="texte-presentation">
                <p><?php echo $donnees['description_article']; ?></p>

                <blockquote><?php echo $donnees['blockquote_article']; ?></blockquote>
            
                <p class="ecritpar"><?php echo $donnees['auteur_article']; ?></p>
                </div>
   
            <img src="images-gym/<?php echo $donnees['photo_article']; ?>" alt="club de gym">
            

        </div>
        <?php } // fin de la boucle
        $reponse->closeCursor(); // termine le traitement de la requete
         ?>


        <section id="lesposts" style="margin:20px auto 0">
        <?php
        // je récupère le contnu de la table articles
        $reponse=$pdo->query('SELECT * FROM articleS WHERE categorie_article="news"');
  
        // afficher les résultats du select
            while($donnees=$reponse->fetch()){ //début de la boucle
        ?>

            <article class="post tout step" style="margin:5px">
                <figure class="imgsize">
                    <img src="images-gym/<?php echo $donnees['photo_article']; ?>" alt="pic10">
                </figure>
                <div class="text-post">
                    <h2><?php echo $donnees['titre_article']; ?></h2>
                    <p><?php echo $donnees['description_article']; ?></p>
                    <a href="article.php?id=<?php echo $donnees['id_article']; ?>">+ d'infos</a>
                </div>
            </article>
        <?php } // fin de la boucle
        $reponse->closeCursor(); // termine le traitement de la requete
        ?>

        </section>
        </main>
    <?php
    require_once('footer.php');
?>