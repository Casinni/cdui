<?php
    require_once('header.php');
    //Appel des fonctions PHP assurant la persistance en BDD
    require_once('PDO/PersonneDB.php');
?>
    <main id="contenu" class="container">
        
        <section id="lesposts" style="margin:20px auto 0">
        <a href="ajoutPersonne.php"><img src="images-gym/ajouter.png"><span style="color:black">
    Ajouter Client</span> </a>
        <?php
        // je récupère le contenu de la table personne et adresse
        $resultat=selectAll($pdo);
         $enteteTab=<<<'DEBUTENTETETAB'
        <table id="planning">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date Naissance</th>
                <th>Numéro</th>
                <th>Rue</th>
                <th>CodePosal</th>
                <th>Ville</th>
                <th></th>
            </tr>
        </thead>
    
        <tbody class="musculation">
        DEBUTENTETETAB;
        echo $enteteTab;  
        // afficher les résultats du select
            while($donnees=$resultat->fetch()){ //début de la boucle

                 echo " <tr><td> ".$donnees['Nom'] ."</td>";
                 echo "<td>" .$donnees['Prenom'] ."</td>";
                 echo "<td>" .$donnees['DateNaiss'] ."</td>";
                 echo "<td>" .$donnees['Numero'] ."</td>";
                 echo "<td>" .$donnees['Rue'] ."</td>";
                 echo "<td>" .$donnees['CodePostal'] ."</td>";
                 echo "<td>" .$donnees['Ville'] ."</td>"; 
                 echo "<td><a href='modifierPersonne.php?id=".$donnees['id_pers']."'><img src='images-gym/modif.png'/></a>";
                 echo "<a href='supprimerPersonne.php?id=".$donnees['id_pers']."'><img src='images-gym/sup.png'/></a></td>" ;    
                 echo '</tr>';
            
         } // fin de la boucle
        $resultat->closeCursor(); // termine le traitement de la requete
        $finTab=<<<'FINTAB'
        </tbody>
        </table>
        FINTAB;
        echo $finTab;
        ?>
        </section>
        </main>
    <?php
    require_once('footer.php');
?>