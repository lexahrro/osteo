<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Intégration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- jQuery -->
    <script src="bootstrap/js/jquery-3.1.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/wow.js"></script>
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