<?php require 'header.php' ?>

    <!--- Header sous menu ---->
<section id="sec" class="sec">
    <div id="conhead" class="container-fluid conhead">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="link link--ilin logo" href="#"><span>A</span><span>C</span></a>
                <p class="lead section-lead logo"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center logo">
                <button class="btn btn-head" type="submit"><i class="fa fa-phone" aria-hidden="true"></i> 01 41 16 15 15</button>
                <button class="btn btn-head" type="submit"><i class="fa fa-calendar" aria-hidden="true"></i> RDV EN LIGNE</button>
            </div>
        </div>
    </div>
</header>


</section>
<section id="section2" class="section2 section-margin" data-midnight="black">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center">
                <h1 class="section-heading">QU'EST-CE QUE L'OSTEOPATHIE ?</h1>
                <hr class="blackhr">
            </div>
            </div>
            <div class="row rowspe">
                <div class="col-md-7">
                <p class="histoire">Apparue en 1892 aux Etats-Unis l’ostéopathie de Andrew Taylor Still est une thérapie purement manuelle visant à déterminer et traiter les restrictions de mobilité du corps. En effet avec la main comme outil d’analyse et de soin l’ostéopathe recherche l’équilibre physiologique du patient en le prenant en compte dans sa globalité. C’est une science basée sur l’anatomie, la physiologie et la pathologie qui permet de rétablir le bon fonctionnement corporel de l’individu. </p>
                </div>      <!-- Définition de l'Ostéopathie -->
                <div class="col-md-5 text-center">
                    <img href="https://www.youtube.com/watch?v=J5NaRdyBrIw" src="img/macbook.png" class="img-responsive center-block popup-youtube">
                </div>      
            </div>
            <div class="row">
                <div class="col-md-12">
                <p>Cette médecine holistique considère l’individu comme un tout fonctionnel (le physique, le mentale et l’esprit) où les différentes structures interagissent entre elles de la cellules aux système organiques.
                    Il est vrai que l’être humain possède plusieurs corps, un corps physique, un corps éthérique, un corps émotionnel et un corps mental.
                    Le physique est l’enveloppe permettant de se mouvoir et mener à bien sa vie. Il faut en prendre soin car c’est le seul endroit où l’on est obligés de vivre toute sa vie.
                    Le corps éthérique ou vital est  le plus dense de nos corps subtils et est constitué de l’énergie vitale (appelé prana dans la culture indienne).
                    Le corps émotionnel ou affectif est le corps subtil des émotions comme son nom l’indique il permet de ressentir nos joies, peines, désirs, l’amour ou la haine…
                    Le corps mental situé à l’intérieur de notre corps physique permet quant à lui de réfléchir aux sensations perçues par le corps émotionnel afin de comprendre notre environnement et évolué dans une direction qui nous est propre. Il est lié à notre intellect, notre imaginaire, nos pensées ou encore à l’objectivité.
                    Il existe encore 3 corps (astral, bouddhique et causal) que je ne décrirai pas ici.
                </p>
            </div>
        </div>
            <div class="row">
                <div class="col-md-5 text-center">
                    <img href="https://www.youtube.com/watch?v=J5NaRdyBrIw" src="img/macbook.png" class="img-responsive center-block popup-youtube">
                </div>
                <div class="col-md-7">
                    <p class="histoire">Apparue en 1892 aux Etats-Unis l’ostéopathie de Andrew Taylor Still est une thérapie purement manuelle visant à déterminer et traiter les restrictions de mobilité du corps. En effet avec la main comme outil d’analyse et de soin l’ostéopathe recherche l’équilibre physiologique du patient en le prenant en compte dans sa globalité. C’est une science basée sur l’anatomie, la physiologie et la pathologie qui permet de rétablir le bon fonctionnement corporel de l’individu. </p>
                </div>      <!-- Définition de l'Ostéopathie -->

            </div>
            </div>
    </div>

    <a class="popup-with-zoom-anim" href="#small-dialog">Open with fade-zoom animation</a><br>
    <a class="popup-with-move-anim" href="#small-dialog">Open with fade-slide animation</a>

    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
        <h1>Dialog example</h1>
        <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</p>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });

    // Ajout pop-up pour le texte

    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });
    });
</script>

<!-- Content Section -->
<section id="section3" class="section3 section-margin" data-midnight="white">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-lg-12 text-center">
                <h1 class="section-heading">DOMAINES</h1>
                <hr class="blackhr">
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row rowspe wow bounceInLeft">
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/bebe.png" alt="">
                <h3>NOURISSONS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/enfant.png" alt="">
                <h3>ENFANTS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/enceinte.png" alt="">
                <h3>FEMMES ENCEINTES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row rowspe wow bounceInRight">
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/homme.png" alt="">
                <h3>ADULTES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/sportif.png" alt="">
                <h3>SPORTIFS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/age.png" alt="">
                <h3>SENIORS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>

    </div>
</section>



<!-- Content Section -->
<div class="parallax1">
    <div class="conparallax">
<section id="section4" class="section4 section-margin hideme" data-midnight="black">
    <div class="container">

        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="section-heading">HONORAIRES</h1>
                <hr class="whitehr">
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                <div id="bluecircle" data-percent="20" class="big"></div>
                <h3>HTML/CSS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                <div id="bluecircle" data-percent="40" class="big"></div>
                <h3>JAVASCRIPT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                <div id="bluecircle" data-percent="60" class="big"></div>
                <h3>PHP/MYSQL</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>

            <div class="col-md-3 col-sm-12 col-xs-12 text-center">
                <div id="bluecircle" data-percent="80" class="big imgcenter"></div>
                <h3>PHOTOSHOP</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer id="footer">
    <div class="container conmail" data-midnight="black">
        <div class="row">
        </div>
        <div class="row">
        <div class="col-md-6">
            <h1 class="section-heading">HORAIRES ET CONTACT</h1>
            <hr class="whitehr">
            <p class="section-paragraph">Pole Léonard de Vinci - 12 Avenue Léonard de Vinci, 92400 Courbevoie</p>
        </div>
            <hr class="visible-xs hrmobile">
        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nom et prénom">
            <input type="email" class="form-control" placeholder="Email">
            <input type="number" class="form-control" placeholder="Numéro">
            <textarea class="form-control" rows="7" placeholder="Votre message"></textarea>
            <br>
            <div class="text-center">
            <button class="btn btn-head" type="submit">ENVOI</button>
            </div>
        </div>
        </div>
            <br>
        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>
        </div>
    <div class="hr-blue"></div>
    <div id="map" data-midnight="black"></div>
    <div class="hr-blue"></div>
    <div class="container">
        <div class="row social">
            <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 text-center">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
        </div>
    </div>
        <div class="container-credits">
        <div class="row row-credits">
            <div class="col-md-6">
                <h4 class="credits">Alexandre Herrero - Marwan Diridollou -  2016 <i class="fa fa-copyright" aria-hidden="true" style="font-size: 14px;"></i> - Tous droits réservés</h4>
            </div>
            <div class="col-md-6">
                <a class="btn btn-footer" href="#sec">
                    <i class="fa fa-chevron-up" style="font-size: 20px;"></i></a>
            </div>
        </div>
    </div>


</footer>



<script type="text/javascript" src="js/midnight.jquery.min.js"></script>
<script>
    $(document).ready(function(){

        // Change this to the correct selector.

        $('nav#fixed').midnight();

    });
</script>









</body>

</html>