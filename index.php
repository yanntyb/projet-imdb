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
    <link rel="stylesheet" href="css/carouselIndex.css">
    <?php include "./parts/headerScript.php" ?>
</head>
<body>
    <?php include "./parts/barreNavig.php" ?>
    <?php include "./parts/carousel.php" ?>

    <h1>Featured Today</h1>

    <div id="carouselFeature" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $index = 0;
            for ($i = 0;$i <=10;$i += 2){
            if ($index === 0){ ?>
            <div class="carousel-item active"> <?php
                }
                else{ ?>
                <div class="carousel-item"> <?php
                    }
                    for ($j = 0; $j <= 1; $j++) { ?>
                        <div class="cont">
                            <div id="img">
                                <img src="https://m.media-amazon.com/images/M/MV5BM2EwMmRhMmUtMzBmMS00ZDQ3LTg4OGEtNjlkODk3ZTMxMmJlXkEyXkFqcGdeQXVyMjM5ODk1NDU@._V1_UX182_CR0,0,182,268_AL_.jpg" alt="">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div id="descript">
                                <span class="titre">Description</span>
                            </div>
                        </div> <?php
                    }
                    $index++; ?>
                </div> <?php
                } ?>

            </div>
            <a class="carousel-control-prev" href="#carouselFeature" role="button" data-bs-slide="prev">
                <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFeature" role="button" data-bs-slide="next">
                <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>

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

    <div id="barreJauneBas">
        <span>Prime video</span>
        <div></div>
        <span>Included with prime</span>
    </div>

        <div class="center">
            <div id="carouselFavori3" class="carousel slide" data-bs-ride="carousel">
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
                    <a class="carousel-control-prev" href="#carouselFavori3" role="button" data-bs-slide="prev">
                        <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFavori3" role="button" data-bs-slide="next">
                        <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

    <h1>Explore Movies & TV shows</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top box office (US)</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>
    <span>Weekend of February 5-7</span>

    <div id="topBoxOffice">
        <div id="contBoxOffice">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
        </div>
    </div>

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