<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinestar</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo star.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li><a href="./signup.html">Cadastre-se</a></li>
                                <li><a href="./login.html">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>{{$resultado->nomefilme}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="/{{$resultado->capa}}">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{$resultado->nomefilme}}</h3>
                            </div>
                            <p>{{$resultado->sinopsefilme}}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Estudio:</span>{{$resultado->distribuidorafilme}}</li>
                                            <li><span>Data de estreia:</span>{{$resultado->dtlancamentofilme}}</li>
                                            <li><span>Genero:</span>{{$resultado->generofilme}}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Notas:</span>{{$resultado->notafilme}} / 10</li>
                                            <li><span>Duração:</span>{{$resultado->duracaofilme}}</li>
                                            <li><span>Direção:</span>{{$resultado->diretorfilme}}</li>
                                            <li><span>Elenco:</span>{{$resultado->atoresfilme}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="{{route('cadastro-poltrona')}}" class="watch-btn"><span>Compre seu ingresso</span> 
                                    <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">

                </div>
            </div>
        </section>
        <!-- Anime Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="img/logo star.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__nav">
                            <ul>
                                <li class="active"><a href="./index.html">Homepage</a></li>
                                <li class="active"><a href="./signup.html">Registrar-se</a></li>
                                <li class="active"><a href="./login.html">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                      </div>
                  </div>
              </div>
          </footer>
          <!-- Footer Section End -->

          <!-- Search model Begin -->
          <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch"><i class="icon_close"></i></div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search model end -->

        <!-- Js Plugins -->
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/player.js"></script>
        <script src="/js/jquery.nice-select.min.js"></script>
        <script src="/js/mixitup.min.js"></script>
        <script src="/js/jquery.slicknav.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/main.js"></script>

    </body>

    </html>