<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "./cssLink.php" ?>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/carouselFavori.css">
    <?php include "./parts/headerScript.php" ?>
</head>
<body>
    <?php include "./parts/barreNavig.php" ?>
    <?php include "./parts/carousel.php" ?>

    <h1>Featured Today</h1>

    <h1>What to watch</h1>
    <a id="recommendation" href="#">Get more recommendations</a>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top picks</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
    <span>TV shows and movies just for you</span>
    <br>
    <br>
    <a id="recommendation" href="#">Sign in</a>

    <div class="center">
        <div id="carouselFavori1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $file = scandir("./img/imgFavori");
                $file = array_diff($file, array('..', '.'));
                $index = 0;
                for ($i = 0;$i <=12;$i += 3){
                if ($index === 0){ ?>
                <div class="carousel-item active"> <?php
                    }
                    else{ ?>
                    <div class="carousel-item"> <?php
                        }

                        for ($j = 0; $j <= 3; $j++) { ?>
                            <div class="cont">
                                <img src="https://m.media-amazon.com/images/M/MV5BM2EwMmRhMmUtMzBmMS00ZDQ3LTg4OGEtNjlkODk3ZTMxMmJlXkEyXkFqcGdeQXVyMjM5ODk1NDU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="">
                                <div id="descript">
                                    <span class="etoile"><i class="fas fa-star"></i><span class="note"><?php echo random_int(0,9) + (random_int(0,9)/10) ?></span></span>
                                    <br>
                                    <span class="titre">Le jeu de la dame</span>
                                    <button type="button" class="btn btn-info addWatchList">+ WatchList</button>
                                </div>
                            </div> <?php
                        }
                        $index++; ?>
                    </div> <?php
                    } ?>

                </div>
                <a class="carousel-control-prev" href="#carouselFavori1" role="button" data-bs-slide="prev">
                    <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFavori1" role="button" data-bs-slide="next">
                    <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>


    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>From your Watchlist</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="signIn">
        <i class="fas fa-user-plus"></i>
        <span>Sign in to access your Watchlist</span>
        <span>Save shows and movies to keep track of what you want to watch.</span>
        <button type="button" class="btn btn-warning">Sign in to IMDb</button>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Fan favorites</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
    <span>This week's top TV and movies</span>

    <div class="center">
        <div id="carouselFavori2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $file = scandir("./img/imgFavori");
                $file = array_diff($file, array('..', '.'));
                $index = 0;
                for ($i = 0;$i <=12;$i += 3){
                if ($index === 0){ ?>
                <div class="carousel-item active"> <?php
                    }
                    else{ ?>
                    <div class="carousel-item"> <?php
                        }

                        for ($j = 0; $j <= 3; $j++) { ?>
                            <div class="cont">
                                <img src="https://m.media-amazon.com/images/M/MV5BM2EwMmRhMmUtMzBmMS00ZDQ3LTg4OGEtNjlkODk3ZTMxMmJlXkEyXkFqcGdeQXVyMjM5ODk1NDU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="">
                                <div id="descript">
                                    <span class="etoile"><i class="fas fa-star"></i><span class="note"><?php echo random_int(0,9) + (random_int(0,9)/10) ?></span></span>
                                    <br>
                                    <span class="titre">Le jeu de la dame</span>
                                    <button type="button" class="btn btn-info addWatchList">+ WatchList</button>
                                </div>
                            </div> <?php
                        }
                        $index++; ?>
                    </div> <?php
                    } ?>

                </div>
                <a class="carousel-control-prev" href="#carouselFavori2" role="button" data-bs-slide="prev">
                    <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFavori2" role="button" data-bs-slide="next">
                    <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>More to watch</h1>
    </div>
    <span>IMDb helps you select the perfect next show or movie to watch.</span>

    <div id="buttonMoreToWatch">
        <button type="button" class="btn btn-dark">Watch Guide</button>
        <button type="button" class="btn btn-dark">Most Popular</button>
    </div>

    <h1>Exclusive videos</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>IMDb Originals</h1>
    </div>
    <span>Celebrity interviews, trending entertainment stories, and expert analysis</span>

    <div class="center">
        <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $file = scandir("./img/imgFavori");
                $file = array_diff($file, array('..', '.'));
                $index = 0;
                for ($i = 0;$i <=12;$i += 2){
                if ($index === 0){ ?>
                <div class="carousel-item active"> <?php
                    }
                    else{ ?>
                    <div class="carousel-item"> <?php
                        }

                        for ($j = 0; $j <= 2; $j++) { ?>
                            <div class="cont">
                                <img src="https://www.tirage-photo-art.com/wp-content/uploads/2017/03/slidea4-1-e1499558986169-1170x470_c.jpg" alt="">
                                <div class="time">
                                    <span><i class="far fa-play-circle"></i><?php echo rand(0,59) .":" .  rand(10,59) ?></span>
                                </div>
                                <div id="descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos illum officia optio reprehenderit suscipit.</div>
                            </div> <?php
                        }
                        $index++; ?>
                    </div> <?php
                    } ?>

                </div>
                <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
                    <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
                    <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

    <h1>Explore what’s streaming</h1>

    <h1>Explore Movies & TV shows</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top box office (US)</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
    <span>Weekend of February 5-7</span>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Coming soon to theaters</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
    <span>Trailers for upcoming releases</span>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Watch soon at home</h1>
    </div>
    <span>Add to watchlist for notifications</span>

    <h1>More to explore</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Editor's picks</h1>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Born today</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>

    </div>
    <span>People born on <?php echo date('l jS \of F') ?></span>
    <div id="randomProfil"></div>
    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top news</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="recently">
        <h1>Recently viewed</h1>
        <span>You have no recently viewed pages</span>
    </div>


    <?php include "./parts/footer.php" ?>
    <script src="./js/hoverCarrousel3.js"></script>
    <script src="./js/randomProfil.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>
</html>