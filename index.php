<?php 
    include("./class/Movie.php");
    $kill_bill = new Movie("Kill bill","film","film-action","https://i.pinimg.com/736x/50/a6/79/50a67980883a1634f4c458fcf71261e0--kill-bill-movie-movie-covers.jpg") 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Php OOP</title>
</head>
<body>
    <header>
        <h1>Intro php</h1>
        <h2>Movie</h2>
    </header>

    <main>
        <section class="wrapper-card-movie">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card col-2" style="width: 18rem;">
                        <img class="card-img-top" src="<?php $kill_bill->getCover() ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php $kill_bill->getTitle() ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>