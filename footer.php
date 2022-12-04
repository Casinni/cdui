<footer id="pied" class="fond">
        <aside id="bas" class="container">
            <div class="colonne">
                <h4>Newsletter</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Esse voluptate earum alias ipsam, suscipit fugiat 
                    quaerat excepturi inventore nesciunt est.</p>
                <form action="enregistrermail.php" method="post">
                    <input type="email" name="email" placeholder="Taper votre email"><br>
                    <input type="submit" value="ENVOYER         >">
                </form>
            </div>
            <div class="colonne">
                <img src="images-gym/logo.png" alt="salle de gym">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Provident dolore illo ea earum nemo officia in 
                    reprehenderit inventore nam consectetur!</p>
                <p>Phone: <a href="tel:+33297979797" class="text-italic">+33 2 97 97 97 97</a></p>
                <p>Email: <span class="text-italic">info[arobase]exogym.com</span></p>
            </div>
            <div class="colonne">
                <ul>
                    <h4>Menu</h4>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> A propos</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Parcours</a></li>
                    <li><a href="cours.html"><i class="fas fa-chevron-right"></i> Cours</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Prix</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Infos légales</a></li>
                    <li><a href="contact.html"><i class="fas fa-chevron-right"></i> Contact</a></li>
                </ul>
                <ul>
                    <h4>Communauté</h4>
                    <li><a href="blog.html"><i class="fas fa-chevron-right"></i> Blog</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Forum</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Support</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Newsletter</a></li>
                </ul>
            </div>

        </aside>
        <div id="copyright">
            <p class="container">&copy; Greta , tous droits réservés</p>
        </div>



    </footer>
    <!-- script du slider -->
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>