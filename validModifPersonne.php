<?php
    require_once('header.php');
    require_once('PDO/PersonneDB.php');
    //récupération des valeurs du tableau en saisissant les indexes (nom, prenom, dateNaiss numero rue ...)
$idpers=($_POST['id']) ?? null;
$nom=($_POST['nom']) ?? null;
$prenom=($_POST['prenom']) ?? null;
$dateNaiss=($_POST['dateNaiss']) ?? null;
$numero=($_POST['numero']) ?? null;
$rue=($_POST['rue']) ?? null;
$codePostal=($_POST['codePostal']) ?? null;
$ville=($_POST['ville']) ?? null;
//on controle la reception des données du formulaire contenues dans le tableau $_POST
// afichage des datas recues : print_r($_POST);
//appel de la fonction pour ajouter une personne en BDD
//retourne OK si l'insertion est faite
$res=modifPersonne($idpers,$nom,$prenom,$dateNaiss,$numero,$rue,$codePostal,$ville,$pdo);

if($res=="OK"){

    echo "<h3><img src='images-gym/check.png'>L'adhérent a bien été modifié dans la BDD!</h3>";
}
else {
    //retourne le message d'erreur capturé par le try catch de la fonction ajoutPersonne
    echo "<h3><img src='images-gym/sup.png'>C'est quoi ce bordel! detail de l'erreur : $res </H3>";
}
?>
</div>
</section>
   </main>
   <?php
require_once('footer.php');
?>