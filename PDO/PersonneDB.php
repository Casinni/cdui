<?php
/**
 * Couche persistance en BDD pour la Table personne et son adresse
 */
function ajoutPersonne($nom,$prenom,$dateNaiss,$numero,$rue,$cp,$ville,$pdo){

    try{
   //préparation de requete sql
    $query="INSERT INTO personne(Nom,Prenom,DateNaiss) VALUE (:nom,:prenom,:dateNaiss)";
    //préparation et compilation de la requete SQL
    $stmt=$pdo->prepare($query);
    $stmt->bindValue(':nom',$nom);
    $stmt->bindValue(':prenom',$prenom);
    $stmt->bindValue(':dateNaiss',$dateNaiss);
    //exécution de la requete SQL en passant en arguments le nom, prénom et date au format ANNEE-MOIS-JOUR
    $stmt->execute();
    //récupération du dernier id inséré dans la table personne
    $idpers = $pdo->lastInsertId();
    $stmt->closeCursor();
    $stmt=null;
    //insertion de l'adresse 
    ajoutAdresse($numero,$rue,$cp,$ville,$idpers,$pdo);
    return"OK";
    }catch(PDOException $e){
        //insertion non faite en BDD car erreur
        //on capture l'exception ou l'erreur et on retourne le message d'erreur 
        return $e->getMessage();
    }
}
/**
 * Couche persistance en BDD pour la Table adresse
 */

function ajoutAdresse($numero,$rue,$codepostal,$ville,$idpers,$pdo){
    try{
    //préparation de requete sql
     $query="INSERT INTO adresse(`Numero`,`Rue`,`CodePostal`,`Ville`,`id_pers`) VALUES (:num,:rue,:cp,:v,:idp)";
     //préparation et compilation de la requete SQL
     $stmt=$pdo->prepare($query);
     $stmt->bindValue(':num',$numero);
     $stmt->bindValue(':rue',$rue);
     $stmt->bindValue(':cp',$codepostal);
     $stmt->bindValue(':v',$ville);
     $stmt->bindValue(':idp',$idpers);
     //exécution de la requete SQL 
     $stmt->execute();
     //on enleve le verrou de la table pour rendre la table de nouveau accessible
     $stmt->closeCursor();
     //je libere les ressources pour gagner des ressources sur le serveur
     $stmt=null;
    }catch(PDOException $e){
        //insertion non faite en BDD car erreur
        //on capture l'exception ou l'erreur et on retourne le message d'erreur 
        return $e->getMessage();
    }
 }
 //selection des personnes et de leur adresse
 function selectAll($pdo){
    $resultat=$pdo->query("SELECT * FROM Personne inner join Adresse on Personne.id_pers=Adresse.id_pers");
    return $resultat;
 }
 //selection des personnes et de leur adresse en fonction de l'id pers
 function selectIdPers($idpers,$pdo){
    $query="SELECT * FROM Personne inner join Adresse on Personne.id_pers=Adresse.id_pers where Personne.id_pers=:id";
    $q =$pdo->prepare($query);

	$q->bindValue(':id',$idpers);
	$q->execute();
	$res = $q->fetch(PDO::FETCH_ASSOC);
	//si pas d'enregistrement' , on leve une exception
		if(empty($res)){
			throw new Exception(); 
		}			
		$q->closeCursor();
		$q = NULL;
        //conversion du pdo en objet
	$obj=(object)$res;
    return $obj;
 }
 function suppressionPersonne($id_pers,$pdo){
    try{
    //préparation de requete sql
    $query="delete from personne where id_pers=:idpers";
    //préparation et compilation de la requete SQL
    $stmt=$pdo->prepare($query);
    //association du placeholder avec le parametre $id_pers
    $stmt->bindValue(':idpers',$id_pers);
    //exécution de la requete SQL 
    $stmt->execute();
    //on enleve le verrou de la table pour rendre la table de nouveau accessible
    $stmt->closeCursor();
    //je libere les ressources pour gagner des ressources sur le serveur
    $stmt=null;
    return"OK";
    }catch(PDOException $e){
    //insertion non faite en BDD car erreur
    //on capture l'exception ou l'erreur et on retourne le message d'erreur 
    return $e->getMessage();
    }
}
    function  modifPersonne($idpers,$nom,$prenom,$dateNaiss,$numero,$rue,$codePostal,$ville,$pdo){
    try{
    //préparation de requete sql
    $query="UPDATE personne inner join adresse on personne.id_pers=adresse.id_pers set personne.nom=:n, personne.prenom=:p,personne.DateNaiss=:d, adresse.Numero=:num,adresse.Rue=:r,adresse.CodePostal=:cp,adresse.Ville=:v where personne.id_pers=:id";
    //préparation et compilation de la requete SQL
    $stmt=$pdo->prepare($query);
    $stmt->bindValue(':n',$nom);
    $stmt->bindValue(':p',$prenom);
    $stmt->bindValue(':d',$dateNaiss);
    $stmt->bindValue(':num',$numero);
    $stmt->bindValue(':r',$rue);
    $stmt->bindValue(':cp',$codePostal);
    $stmt->bindValue(':v',$ville);
    $stmt->bindValue(':id',$idpers);
    //exécution de la requete SQL 
    $stmt->execute();
     //on enleve le verrou de la table pour rendre la table de nouveau accessible
     return "OK";
    $stmt->closeCursor();
     //je libere les ressources pour gagner des ressources sur le serveur
    $stmt=null;
    }catch(PDOException $e){
    //insertion non faite en BDD car erreur
    //on capture l'exception ou l'erreur et on retourne le message d'erreur 
    return $e->getMessage();
    }
 }

