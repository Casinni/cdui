<?php
    require_once('header.php');
    //  je récupère le numéro de l'ID
    //$id=$_GET['id'];
    //echo $id;
?>
    <main id="contenu" class="container">
        
        <section id="lesposts" style="margin:20px auto 0">
        <a href="ajoutpersonne.png"><img src="images-gym/ajouter.png"><span style="color:black">
    Ajouter Client</span> </a>
        <?php
        // je récupère le contnu de la table articles
        $resultat=$pdo->query("SELECT * FROM Personne inner join Adresse on Personne.id_pers=Adresse.id_pers");
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
                 echo "<td><a href='modifierPersonne.php'><img src='images-gym/modif.png'/></a>";
                 echo "<a href='supprimerPersonne.php'><img src='images-gym/sup.png'/></a></td>" ;    
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