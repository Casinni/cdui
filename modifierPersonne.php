<?php
    require_once('header.php');
    require_once("PDO/PersonneDB.php");
//on récupere l'id de l'url ex: http://127.0.0.1/cdui/modifierPersonne.php?id=19
$id_pers=($_GET['id']) ?? null;
//on checke que l'id n'est pas null
if($id_pers!=null){
    $res=selectIdPers($id_pers,$pdo);
    }

?>

    <main id="contenu" class="container">
        
        <section id="lesposts" style="margin:20px auto 0">
     <div class="container">
    <form method='POST' action='validModifPersonne.php'>
    <div class='form-group'>
        <input type='hidden' name='id' value='<?php echo $id_pers?>'>
        <div class='form-row'>
            <label class='col-md-3' for='nom'> Nom</label>
            <input type='text' class='form-control' name='nom' value='<?php echo $res->Nom ?>' placeholder='Veuillez rentrer votre nom' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='prenom'> Prenom</label>
            <input type='text' class='form-control' name='prenom' value='<?php echo $res->Prenom ?>' placeholder='Veuillez rentrer votre prenom' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='dateNaiss'>Date de Naissance</label>
            <input type='text' class='form-control' name='dateNaiss'value='<?php echo $res->DateNaiss ?>' placeholder='Veuillez rentrer votre date de naissance' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='numero'>Numéro</label>
            <input type='text' class='form-control' name='numero' value='<?php echo $res->Numero ?>'placeholder='Veuillez rentrer le numéro de votre adresse' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='rue'>Rue</label>
            <input type='text' class='form-control' name='rue' value='<?php echo $res->Rue ?>' placeholder='Veuillez rentrer votre adresse' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='codePostal'>Code Postal</label>
            <input type='text' class='form-control' name='codePostal'value='<?php echo $res->CodePostal ?>' placeholder='Veuillez rentrer votre code postal' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='ville'>Ville</label>
            <input type='text' class='form-control' name='ville' value='<?php echo $res->Ville ?>' placeholder='Veuillez rentrer votre ville' required>
        </div>
    </div>
    <button class='btn btn-primary' type='submit'>Modifier</button>
    </form>
     </div>
    </section>
        </main>
    <?php
    require_once('footer.php');
?>