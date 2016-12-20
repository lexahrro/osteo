<?php require 'header.php' ?>

    <!--- Header sous menu ---->
<section id="sec" class="sec">
    <div id="conhead" class="container-fluid conhead" title="Image header">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="link link--ilin logo" href="#"><span>A</span><span>C</span></a>
                <h1 class="logo"><span>A. CONDUCHÉ - OSTEOPATHE</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center logo">
                <button class="btn btn-head" type="submit"><i class="fa fa-phone margin-fa" aria-hidden="true"></i> 01 41 16 15 15</button>
                <button class="btn btn-head" type="submit"><i class="fa fa-calendar margin-fa" aria-hidden="true"></i> RDV EN LIGNE</button>
            </div>
        </div>
    </div>


</section>
<section id="section2" class="section2 section-margin" data-midnight="black">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center">
                <h2 class="section-heading">QU'EST-CE QUE L'OSTEOPATHIE ?</h2>
                <hr class="blackhr">
            </div>
            </div>
            <div class="row rowspe">
                <div class="col-md-7">
                <p class="histoire">Apparue en 1892 aux Etats-Unis l’ostéopathie de Andrew Taylor Still est une thérapie purement manuelle visant à déterminer et traiter les restrictions de mobilité du corps. En effet avec la main comme outil d’analyse et de soin l’ostéopathe recherche l’équilibre physiologique du patient en le prenant en compte dans sa globalité. C’est une science basée sur l’anatomie, la physiologie et la pathologie qui permet de rétablir le bon fonctionnement corporel de l’individu. </p>
                </div>      <!-- Définition de l'Ostéopathie -->
                <div class="col-md-5 text-center">
                    <img href="https://www.youtube.com/watch?v=J5NaRdyBrIw" src="img/macbook.png" class="img-responsive center-block popup-youtube" alt="lancement video">
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
                    <img href="https://www.youtube.com/watch?v=J5NaRdyBrIw" src="img/macbook.png" class="img-responsive center-block popup-youtube" alt="lancement video">
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
        <h2>Dialog example</h2>
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
                <h2 class="section-heading">DOMAINES</h2>
                <hr class="blackhr">
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row rowspe wow bounceInLeft">
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/bebe.png" alt="nourisson">
                <h3>NOURISSONS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/enfant.png" alt="enfant">
                <h3>ENFANTS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/enceinte.png" alt="femme enceinte">
                <h3>FEMMES ENCEINTES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row rowspe wow bounceInRight">
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/homme.png" alt="adulte">
                <h3>ADULTES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/sportif.png" alt="sportif">
                <h3>SPORTIFS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <img class="img-responsive imgcenter" src="img/age.png" alt="senior">
                <h3>SENIORS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>

    </div>
</section>




<section id="portfolio" class="section3 section-margin" data-midnight="white">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">DOMAINES</h2>
                <hr class="blackhr">
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter" src="img/bebe.png" alt="senior">
                    <h3>NOURISSONS</h3>
                    <p>Un bilan dès les premiers jours de vie.</p>
                </a>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter" src="img/enfant.png" alt="senior">
                    <h3>ENFANTS</h3>
                    <p>Une croissance en plein harmonie.</p>
                </a>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter text-center" src="img/enceinte.png" alt="senior">
                    <h3>FEMMES ENCEINTES</h3>
                    <p> Soyez prête pour accueillir votre bébé.</p>
                </a>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter" src="img/homme.png" alt="adulte">
                    <h3>ADULTES</h3>
                    <p>Améliorez votre qualité de vie.</p>
                </a>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter" src="img/sportif.png" alt="senior">
                    <h3>SPORTIFS</h3>
                    <p>Révélez votre potentiel.</p>
                </a>
            </div>
            <div class="col-sm-4 portfolio-item text-center">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-responsive imgcenter" src="img/age.png" alt="senior">
                    <h3>SENIORS</h3>
                    <p>Ne laissez pas l'âge être un obstacle dans votre quotidien.</p>
                </a>
            </div>
        </div>
    </div>
</section>



<!-- Content Section -->
<section id="section4" class="section4 section-margin hideme parallax1" data-midnight="black">
    <div class="conparallax">
    <div class="container">

        <div class="row text-center">
            <div class="col-md-12">
                <h2 class="section-heading">coord</h2>
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
</section>










<!-- Modal nourrisson-->

<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2 class="text-center" >Nourrisson</h2>
                        <hr class="star-primary">

                                        <section>
                                            <div class="container">
                                                <div class="row">
                                                     <div class="col-lg-12 text-center">
                                                        <h2 class="section-heading">ENFANTS</h2>
                                                     </div>
                                                </div>
                                                <hr class="blackhr">
                                                <div class="row">
                                                     <div class="col-md-7">
                                                        <p style="text-align: justify;">Durant la période de l’enfance et de l’adolescence l’enfant est en période d’apprentissage et s’approprie son corps. Il découvre les possibilités et les capacités de son corps dans l’effort par la pratique sportive qui peut-être parfois soutenue, mais c’est aussi l’âge des premières chutes.
                                                                                        Même si le corps de l’enfant offre une grande résistance et reste souple, il est soumis à différentes contraintes comme le port du cartable ou les divers traumatismes pouvant altérer le développement  de la croissance dans les meilleures conditions.
                                                                                        C’est pourquoi la prise en charge ostéopathique permet de rétablir les déséquilibres qui peuvent se fixer durablement. </p> 
                                                     </div>
                                                     <div class="col-md-5 text-center">
                                                        <img src="img/enfant1.jpg" class="img-responsive center-block" alt="image de nourrisson">
                                                    </div>
                                                </div>
                                            </div>    
                                        </section>

                                            
                                        <section>
                                            <div class="container">
                                                <div class="row">
                                                     <div class="col-lg-12 text-center">
                                                        <h2 class="section-heading">QUAND CONSULTER SON OSTÉOPATHE ?</h2>
                                                     </div>
                                                </div>
                                                <hr class="blackhr">

                                                <div class="row">
                                                     <div class="col-lg-5 text-center">
                                                        <img src="img/enfants2.jpg" class="img-responsive center-block" alt="image de nourrisson">
                                                     </div>
                                                     <div class="col-md-7">
                                                        <ul>
                                                            <li>Bilan préventif pour le suivi de la croissance afin d’optimiser son développement</li>
                                                            <li>Scolioses/Hyperlordoses/Hypercyphosesprévenir et freiner leurs évolutions</li>
                                                            <li>Contrôle de l’influence des semelles orthopédiques sur la posture</li>
                                                            <li>Troubles ORL chroniques : otites et/ou sinusites à répétitions/maux de tête (céphalées ou migraines)/troubles oculaires (douleur des yeux après l’école, sensation de fatigue, strabisme, problème de convergence ou divergence).</li>
                                                            <li>Troubles digestifs fonctionnels : Diarrhée/constipation/ballonnements/vomissements</li>
                                                            <li>Limiter les douleurs dû au port d’appareil dentaire (bagues, casques de nuit…)</li>
                                                            <li>Troubles de l’attention et du comportement : Hyperactivité/déficit de concentration/difficultés ou retard d’acquisition psychomotrice </li>
                                                        </ul>
                                                     </div>
                                                </div>  
                                            </div>
                                        </section> 



                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





















<!-- Footer -->
<footer id="footer">
    <div class="container conmail" data-midnight="black">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-heading">HORAIRES ET CONTACT</h2>
                <hr class="whitehr">
                <div itemscope itemtype="http://schema.org/LocalBusiness">
                    <h3 itemprop="adress" class="coord">75 rue de Rochechouart 75009 Paris</h3>
                    <p><i class="fa fa-subway"></i> Métro 2 et 4 Arrêt Barbès-Rochechouart</p>
                    <p><i class="fa fa-subway"></i> Métro 7 Arrêt Cadet</p>
                    <p><i class="fa fa-bus"></i> Bus 85 arrêt Condorcet-Trudaine</p>
                    <h3 class="coord">86 avenue de Paris 94300 Paris</h3>
                    <h4 class="coord">Métro 1 arrêt Bérault (sortie n°2 Place Bérault)</h4>
                    <h4 class="coord">RER A arrêt Vincennes (sortie n°2 Avenue de la République)</h4>
                    <h4 class="coord">Bus 325 arrêt Bérault</h4>
                    <br>
                    <h4 itemprop="telephone" class="coord">06.27.79.54.63</h4>
                    <h4 itemprop="email" class="coord">conduche.osteopathe@gmail.com</h4>
                </div>
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