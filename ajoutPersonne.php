<?php
    require_once('header.php');
    //  je récupère le numéro de l'ID
    //$id=$_GET['id'];
    //echo $id;
    //a mettre dans le header.php
   // <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
?>

    <main id="contenu" class="container">
        
        <section id="lesposts" style="margin:20px auto 0">
     <div class="container">
    <form method='POST' action='validAjoutPersonne.php'>
    <div class='form-group'>
        <div class='form-row'>
            <label class='col-md-3' for='nom'> Nom</label>
            <input type='text' class='form-control' name='nom' placeholder='Veuillez rentrer votre nom' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='prenom'> Prenom</label>
            <input type='text' class='form-control' name='prenom' placeholder='Veuillez rentrer votre prenom' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='dateNaiss'>Date de Naissance</label>
            <input type='date' class='form-control' name='dateNaiss' placeholder='Veuillez rentrer votre date de naissance' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='numero'>Numéro</label>
            <input type='text' class='form-control' name='numero' placeholder='Veuillez rentrer le numéro de votre adresse' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='rue'>Rue</label>
            <input type='text' class='form-control' name='rue' placeholder='Veuillez rentrer votre adresse' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='codePostal'>Code Postal</label>
            <input type='text' class='form-control' name='codePostal' placeholder='Veuillez rentrer votre code postal' required>
        </div>
        <div class='form-row'>
            <label class='col-md-3' for='ville'>Ville</label>
            <input type='text' class='form-control' name='ville' placeholder='Veuillez rentrer votre ville' required>
        </div>
    </div>
    <button class='btn btn-primary' type='submit'>Ajouter</button>
    </form>
     </div>
    </section>
        </main>
    <?php
    require_once('footer.php');
?>