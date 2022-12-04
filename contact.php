<?php
    require_once('header.php');
?>
    <main id="contenu" class="container">
        <div id="contact">
            <h1>Laissez-nous un message</h1>
            <form action="envoyerform.php" method="post">
                <p>
                    <input type="radio" name="civilite" id="civilite" value="M">
                    <label for="civilite" class="largeurpetite">M.</label>
                    <input type="radio" name="civilite" id="civilite" value="Mme" checked>
                    <label for="civilite">Mme</label>
                </p>
                <p>
                    <label for="nom">Votre nom</label>
                    <input type="text" name="nom" id="nom" placeholder="tapez votre nom">
                </p>
                <p>
                    <label for="prenom">Votre prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="tapez votre prénom">
                </p>
                <p>
                    <label for="email">Votre email</label>
                    <input type="email" name="email" id="email" placeholder="toto@toto.com">
                </p>
                <p>
                    <label for="tel">Votre téléphone</label>
                    <input type="tel" name="tel" id="tel" placeholder="06 05 05 05 05">
                </p>
                <p>
                    <label for="ville">Ville pour l'inscription</label>
                    <select name="ville" id="ville">

                        <option value="Vannes">Vannes</option>
                        <option value="Lorient" selected>Lorient</option>
                    </select>
                </p>
                <p>
                    Objet: 
                    <input type="checkbox" name="objet" id="inscription" value="inscription">
                    <label for="inscription" class="largeurpetite">Inscription</label>
                    <input type="checkbox" name="objet" id="essai" value="essai">
                    <label for="essai" class="largeurpetite">Essai</label>
                    <input type="checkbox" name="objet" id="autre" value="autre">
                    <label for="autre">Autre</label>
                </p>
                <p>
                    <label for="message">Votre Message</label>
                    <textarea name="message" rows="10" id="message" placeholder="Tapez votre message"></textarea>
                </p>
                <p>
                    <input type="submit" value="ENVOYER">
                    <input type="reset" value="ANNULER">
                </p>

            </form>
        </div>
        <div id="localisation">
            <h2>Nous trouver</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.430833933702!2d-2.752651617885224!3d47.65866390463246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e8693f2c0c7%3A0xa95679d70af65df9!2sClub%20Gym!5e0!3m2!1sfr!2sfr!4v1663668243719!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <section id="adresses">
            <h2>Nos adresses</h2>
            <address>
                <h3>Club de Gym</h3>
                17 rue de la Tannerie<br>
                56000 Vannes
            </address>
            <address>
                <h3>Fitness Club</h3>
                bd de Paris<br>
                56100 Lorient
            </address>
        </section>
        <section id="videos">
            <h2>Les Vidéos</h2>
            <iframe  src="https://www.youtube.com/embed/91SgWERFWhI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe  src="https://www.youtube.com/embed/EWexMsm3vYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

    </main>
    <?php
    require_once('footer.php');
?>