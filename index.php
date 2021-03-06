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
    <?php include "./parts/headerScript.php" ?>
</head>
<body>
<!--Nav barre-->
    <?php include "./parts/barreNavig.php" ?>

<!--Carousel-->
    <?php include "./parts/carousel.php" ?>

    <h1>Featured Today</h1>

<!--Deuxieme caroussel-->

    <h1>What to watch</h1>
    <a id="recommendation" href="#">Get more recommendations</a>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>From your Watchlist</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Fan favorites</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>More to watch</h1>
    </div>

    <h1>Exclusive videos</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>IMDb Originals</h1>
    </div>

    <h1>Explore what’s streaming</h1>

    <h1>Explore Movies & TV shows</h1>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top box office (US)</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Coming soon to theaters</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Watch soon at home</h1>
    </div>

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

    <div id="resetH1">
        <div id="separationJaune"></div>
        <h1>Top news</h1>
        <a href="#"><i class="fas fa-chevron-right"></i></a>
    </div>

    <div>
        <h2>Recently viewed</h2>
        <span>You have no recently viewed pages</span>
    </div>
    <?php include "./parts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>