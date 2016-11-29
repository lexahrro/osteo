<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Arthur Conduché, Ostéopathe à Paris. Ostéopathie générale, pour sportifs, femmes enceintes, enfants, adultes, seniors et nourissons.">
    <meta name="keywords" content="mots clefs">
    <meta name="author" content="Alexandre HERRERO - Marwan Diridollou”>
    <meta name="robots" content="index">
    <meta name="Indentifier-URL" content="url du site">

    <title>Arthur Conduché - Ostéopathie à Paris</title>

    <!-- Icon android/ iOS -->

    <link href="http://www.yoursite.com/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="http://www.yoursite.com/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
    <link href="http://www.yoursite.com/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
    <link href="http://www.yoursite.com/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
    <link href="http://www.yoursite.com/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="http://www.yoursite.com/icon-hires.png" rel="icon" sizes="192x192" />
    <link href="http://www.yoursite.com/icon-normal.png" rel="icon" sizes="128x128" />


    <!-- Dublin Core -->

    <meta name="DC.title" content="Arthur Conduché - Ostéopathie à Paris">
    <meta name="DC.creator" content="Alexandre HERRERO - Marwan Diridollou">
    <meta name="DC.subject" content="mots clefs" />
    <meta name="DC.description" content="Arthur Conduché, Ostéopathe à Paris. Ostéopathie générale, pour sportifs, femmes enceintes, enfants, adultes, seniors et nourissons." />
    <meta name="DC.publisher" content="Alexandre HERRERO - Marwan Diridollou">
    <meta name="DC.contributor" content="Contributeur">
    <meta name="DC.date" content="22/11/2016">
    <meta name="DC.type" content="Site vitrine">
    <meta name="DC.format" content="website">
    <meta name="DC.identifier" content="url du site">
    <meta name="DC.language" content="fr-FR">
    <meta name="DC.coverage" content="World">
    <meta name="DC.rights" content="&copy; Alexandre HERRERO - Marwan Diridollou">

    <!-- END Dublin Core -->



    <!-- Open Graph-->

    <meta property="og:title" content="Arthur Conduché - Ostéopathie à Paris">
    <meta property="og:type" content="website">
    <meta property="og:url" content="url du site">
    <meta property="og:image" content="img/head.jpg">
    <meta property="og:site_name" content="Arthur Conduché - Ostéopathie à Paris">
    <meta property="og:description" content="Arthur Conduché, Ostéopathe à Paris. Ostéopathie générale, pour sportifs, femmes enceintes, enfants, adultes, seniors et nourissons.">

<!-- END Open Graph-->

    <title>Ostéopathie - A. Conduche</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- jQuery -->
    <script src="bootstrap/js/jquery-3.1.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD62tC0fMed6qZPskVFy9PS8SL-4ByYr38"></script>
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/wow.js"></script>


    <script type="text/javascript">

        // Create and Initialise the Map (required) our google map below

        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

            var mapOptions = {

                // How zoomed in you want the map to start at (always required)

                zoom: 17,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)

                center: new google.maps.LatLng(48.89585, 2.2364),

                // How you would like to style the map.
                // This is where you would paste any style found on [Snazzy Maps][1].
                // copy the Styles from Snazzy maps,  and paste that style info after the word "styles:"

                styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"weight":"0.20"},{"lightness":"28"},{"saturation":"23"},{"visibility":"off"}]},
                    {"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#494949"},{"lightness":13},{"visibility":"on"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                    {"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]},
                    {"featureType":"landscape","elementType":"all","stylers":[{"color":"#1f3652"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#30628f"},{"lightness":5}]},
                    {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
                    {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
                    {"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#146474"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}]
            };

            var mapElement = document.getElementById('map');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Following section, you can create your info window content using html markup

            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">Cabinet Ostéopathie</h1>'+
                '<div id="bodyContent">'+
                '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                'sandstone rock formation in the southern part of the '+
                'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                'south west of the nearest large town, Alice Springs; 450&#160;km '+
                '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                'Aboriginal people of the area. It has many springs, waterholes, '+
                'rock caves and ancient paintings. Uluru is listed as a World '+
                'Heritage Site.</p>'+
                '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                '(last visited June 22, 2009).</p>'+
                '</div>'+
                '</div>';


            // Define the image to use for the map marker (58 x 44 px)

            var image = 'img/localisation.png';

            // Define the Lattitude and Longitude for the map location

            var myLatLng = new google.maps.LatLng(48.89585, 2.2364);

            // Define the map marker characteristics

            var mapMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image,
                title:  'Frostbyte Interactive'

            });

            // Following Lines are needed if you use the Info Window to display content when map marker is clicked

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            // Following line turns the marker, into a clickable button and when clicked, opens the info window

            google.maps.event.addListener(mapMarker, 'click', function() {
                infowindow.open(map, mapMarker);
            });

        }

    </script>

    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top+2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event){
            var scrollPosition = $(document).scrollTop();
            $('nav a').each(function () {
                var currentLink = $(this);
                var refElement = $(currentLink.attr("href"));
                if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
                    $('nav ul li a').removeClass("active");
                    currentLink.addClass("active");
                }
                else{
                    currentLink.removeClass("active");
                }
            });
        }
    </script>
</head>

<body>

<!-- Navigation -->
    <nav id="fixed" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AC</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="active" href="#sec">Accueil</a>
                    </li>
                    <li>
                        <a href="#section2">Présentation</a>
                    </li>
                    <li>
                        <a href="#section3">Domaines</a>
                    </li>
                    <li>
                        <a href="#section4">Honoraires</a>
                    </li>
                    <li>
                        <a href="#footer">Contact</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>