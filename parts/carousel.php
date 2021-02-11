<?php
    $data = json_decode(file_get_contents("./json/film.json"),true);
?>

<link rel="stylesheet" href="./css/carrousel.css">

<div id="carouselFilm" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <?php
        $file = scandir("./img/imgCover");
        $file = array_diff($file, array('..', '.'));
        $index = 0;
        foreach ($file as $imgLink){
            if($index === 0){
                echo '<div class="carousel-item active">';
            }
            else{
                echo '<div class="carousel-item">';
            }
            $titre = str_split($imgLink,strpos($imgLink,"."))[0];
            $index++;
            ?>
                <div id="cont">
                    <img src="./img/imgCover/<?php echo $imgLink ?>" class="img" alt="<?php echo $imgLink ?>">
                    <div class="description">
                        <h1 class="titre"><?php echo $titre ?></h1>
                        <?php if(isset($data[$titre])) {?>
                            <div class="syn"> <?php echo $data[$titre]["synopsis"] ?> </div>
                            <div class="genre"><?php echo $data[$titre]["genre"] ?></div>
                        <?php
                        }
                        else{
                            echo "Pas de description disponible";
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
    ?>

    </div>
    <a class="carousel-control-prev" href="#carouselFilm" role="button" data-bs-slide="prev">
        <span class="icon carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselFilm" role="button" data-bs-slide="next">
        <span class="icone carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
