<?php
    require_once('header.php');
?>
    <main id="contenu" class="container">
        <figure id="visuel-cours">
            <img src="images-gym/visuel.jpg" alt="cours">
            <figcaption>
                <h1>Cours</h1>
            </figcaption>
        </figure>
        <div id="planning-cours">
            <nav id="nav-cours">
                <ul>
                    <li><a href="#" id="musculation">Musculation</a></li>
                    <li><a href="#" id="step">Cours de Step</a></li>
                </ul>
            </nav>
            <table id="planning">
                <thead>
                    <tr>
                        <th></th>
                        <th>8-10</th>
                        <th>10-12</th>
                        <th>12-14</th>
                        <th>14-16</th>
                        <th>16-18</th>
                        <th>18-20</th>
                    </tr>
                </thead>
                <tbody class="musculation">
                    <tr>
                        <td>Lundi</td>
                        <td>x</td>
                        <td>LOLA<br><i class="fa-solid fa-star"></i></td>
                        <td>LOLA<br><i class="fa-solid fa-star></i><i class=" fa-solid fa-star></i></td>
                        <td>LOLA</td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i></td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>x</td>
                        <td>CATHY</td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i></td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>LOLA</td>
                        <td>LOLA</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>x</td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i></td>
                        <td>JOHN<br><i class="fa-solid fa-shuffle"></i></td>
                        <td>JOHN<br></td>
                        <td>KEN<br><i class="fa-solid fa-star"></i></td>
                        <td>KEN</td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>x</td>
                        <td>KEN<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>KEN<br><i class="fa-solid fa-star"></i></td>
                        <td>KEN</td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i></td>
                    </tr>

                </tbody>
                <tbody class="step">
                    <tr>
                        <td>Lundi</td>
                        <td>x</td>
                        <td>CATHY</td>
                        <td>CATHY<br><i class="fa-solid fa-shuffle"></i></td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>LOLA</td>
                        <td>LOLA</td>
                    </tr>
                    <tr>
                        <td>Mardi</td>
                        <td>x</td>
                        <td>LOLA<br><i class="fa-solid fa-star"></i></td>
                        <td>LOLA<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>LOLA</td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i></td>
                        <td>CATHY<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Jeudi</td>
                        <td>x</td>
                        <td>KEN<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>KEN<br><i class="fa-solid fa-shuffle"></i></td>
                        <td>KEN</td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i></td>
                    </tr>
                    <tr>
                        <td>Vendredi</td>
                        <td>x</td>
                        <td>JOHN<br><i class="fa-solid fa-star"></i></td>
                        <td>JOHN</td>
                        <td>JOHN</td>
                        <td>KEN<br><i class="fa-solid fa-star"></i></td>
                        <td>KEN</td>
                    </tr>

                </tbody>
            </table>

        </div>
        <!-- <div id="testpolice">
            <h2>police megan june</h2>


        </div> -->
        <!-- les profs utilisation des cards-->
        <section id="equipe">
            <h2>Les profs</h2>
            <article class="card">
                <img src="images-gym/about_img2.jpg" alt="Lola" style="width:100%">
                <div class="card-container">
                    <h4><b>Lola</b></h4>
                    <p>Prof de fitness diplômée</p>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </article>
            <article class="card">
                <img src="images-gym/about_img3.jpg" alt="John" style="width:100%">
                <div class="card-container">
                    <h4><b>John</b></h4>
                    <p>Prof de musculation</p>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </article>
            <article class="card">
                <img src="images-gym/about_img4.jpg" alt="Cathy" style="width:100%">
                <div class="card-container">
                    <h4><b>Cathy</b></h4>
                    <p>Prof de zumba</p>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </article>
            <article class="card">
                <img src="images-gym/c2.jpg" alt="Ken" style="width:100%">
                <div class="card-container">
                    <h4><b>Ken</b></h4>
                    <p>Prof de fitness diplômé</p>
                    <a href="#"><i class="far fa-envelope"></i></a>
                </div>
            </article>
        </section>


    </main>
    <?php
    require_once('footer.php');
?>