<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    @yield('title')
    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/weeding.css')}}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/carousel.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-primary">
        <a class="navbar-brand" href="#">ADJAH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('adjah')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('quinoussommes')}}">Qui sommes nous?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact_Maya')}}">Nous contactez</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            
            <a href="{{route('getinvite')}}"><img src="{{ asset('assets/img/wedding-sign.png')}}" alt="wedding" class="cart-icon"></a>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
           
        </ol>
        <div class="carousel-inner">
            
            
            <div class="carousel-item">
                <img src="{{ asset('assets/img/header1.jpg')}}" alt="wedding3" class="cart-icon">
                <div class="container">
                    <div class="carousel-caption">
                        <h1></h1>
                        <p></p>
                        <p><a class="btn btn-lg btn-primary" href="{{route('getinvite')}}" role="button">Invitation</a></p>
                    </div>
                </div>
            </div>
            
            
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Here content  -->
        @yield('content')


        <!-- START THE FEATURETTES -->

      
        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class="footer-custom">
        <p>
            &copy; 2017-2021 TEAM-MAYA<br>
            <small>
                Plus un service, un savoir-faire et savoir-être à partager.<br>
                 <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
            </small>
        </p>
    </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
</body>
</html>