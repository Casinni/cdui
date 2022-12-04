<?php
    require_once('header.php');
?>
    <main id="contenu" class="container">
       <section id="lesposts">
            <header id="categories">
                <nav id="menucategories">
                    <ul>
                        <li><a href="#" id="tout">Tout</a></li>
                        <li><a href="#" id="step">Step</a></li>
                        <li><a href="#" id="muscu">Muscu</a></li>
                        <li><a href="#" id="course">Course</a></li>
                    </ul>
                </nav>
            </header>
            <article class="post tout step">
                <figure class="imgsize">
                    <img src="images-gym/pic10.jpg" alt="pic10">
                </figure>
                <div class="text-post">
                    <h2>Article 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                     corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

            <article class="post tout step muscu">
                <figure class="imgsize">
                    <img src="images-gym/pic11.jpg" alt="pic11">
                </figure>
                <div class="text-post">
                    <h2>Article 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

            <article class="post tout course">
                <figure class="imgsize">
                    <img src="images-gym/pic12.jpg" alt="pic12">
                </figure>
                <div class="text-post">
                    <h2>Article 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

            <article class="post tout muscu">
                <figure class="imgsize">
                    <img src="images-gym/pic13.jpg" alt="pic13">
                </figure>
                <div class="text-post">
                    <h2>Article 4</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                         corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

            <article class="post tout muscu">
                <figure class="imgsize">
                    <img src="images-gym/pic14.jpg" alt="pic14">
                </figure>
                <div class="text-post">
                    <h2>Article 5</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

            <article class="post tout muscu">
                <figure class="imgsize">
                    <img src="images-gym/pic15.jpg" alt="pic15">
                </figure>
                <div class="text-post">
                    <h2>Article 6</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                         corrupti iusto quaerat?</p>
                    <a href="#">+ d'infos</a>
                </div>
            </article>

       </section>
        <div id="pagination">Page précédente - <span class="bleu-actif">1/1</span> - Page Suivante</div>

    </main>
<?php
    require_once('footer.php');
?>