<?php
    require_once('header.php');
?>
    <main id="contenu" class="container">
        <!-- Slider -->
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images-gym/blog_img.jpg" alt="gym" title="#htmlcaption">
                <img src="images-gym/blog_img2.jpg"alt="gym2" title="#htmlcaption2">
                <img src="images-gym/blog_img3.jpg" alt="gym3" title="#htmlcaption3">
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>GYM</strong> <br><a href="#" class="bouton">Voir</a>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
                <strong>COURSE</strong> <br><a href="#" class="bouton">Voir</a>
            </div>
            <div id="htmlcaption3" class="nivo-html-caption">
                <strong>MUSCU</strong> <br><a href="#" class="bouton">Voir</a>
            </div>
        </div>
        <div id="bienvenue">
            <img src="images-gym/visuel-accueil.png" alt="bienvenue à notre salle de gym">
            <div class="boite-texte">
                <h1>En forme après l'été</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi, fuga! Dolorum libero sunt dolorem 
                    qui nam, quas quis repellat eum harum blanditiis cumque natus vero.
                    repellat eum harum blanditiis cumque natus vero.</p>
            </div>
        </div>
        <!-- Partie des lives -->
        <section id="live">
            <article class="salle">
                <div class="titre-live">
                    <h2>LIVE <span class="normal">CYCLISME</span></h2>
                    <h3>Salle 1</h3>
                </div>
                <img src="images-gym/cyclisme.jpg" alt="live cyclisme">
            </article>
            <article class="salle">
                <div class="titre-live">
                    <h2>LIVE <span class="normal">GYM</span></h2>
                    <h3>Salle 3</h3>
                </div>
                <img src="images-gym/gym.jpg" alt="live gym">
            </article>
            <article class="salle">
                <div class="titre-live">
                    <h2>LIVE <span class="normal">PILATES</span></h2>
                    <h3>Salle 2</h3>
                </div>
                <img src="images-gym/pilates.jpg" alt="live pilates">
            </article>
        </section>
        <!-- les figures -->
        <section id="figures">

            <figure id="galerie">
                <figcaption>Galerie</figcaption>
                <a href="#"><img src="images-gym/galerie1.jpg" alt="marche"></a>
                <a href="#"><img src="images-gym/galerie2.jpg" alt="alteres"></a>
                <a href="#"><img src="images-gym/galerie3.jpg" alt="step"></a>
                <a href="#"><img src="images-gym/galerie4.jpg" alt="ballon" class="img4"></a>
            </figure>
            <figure id="partenaires">
                <figcaption>Partenaires</figcaption>
                <a href="#"><img src="images-gym/p1.png" alt="jaked"></a>
                <a href="#"><img src="images-gym/p3.png" alt="reebok"></a>
                <a href="#"><img src="images-gym/p2.png" alt="speedo"></a>
                <a href="#"><img src="images-gym/p4.png" alt="puma"></a>
                <a href="#"><img src="images-gym/p5.png" alt="adidas"></a>
                <a href="#"><img src="images-gym/p6.png" alt="nike"></a>
            </figure>
        </section>
    </main>
<?php
    require_once('footer.php');
?>