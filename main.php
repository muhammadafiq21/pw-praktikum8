<?php
$data = file_get_contents('data/sbux.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>StarBucks</title>
</head>
<style>
    .navbar-brand {
        font-family: sans-serif;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="40">
                StarBucks
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">All menu</a>
                    <a class="nav-item nav-link" href="#">Espresso</a>
                    <a class="nav-item nav-link" href="#">Blended Cream</a>
                    <a class="nav-item nav-link" href="#">Food</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($menu as $row) : ?>
                <div class="col-md-3">
                    <div class="card mb-3" style="width: 15rem;">
                        <img class="card-img-top" src="img/menu/<?= $row["gambar"] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"] ?></h5>
                            <p class="card-text"><?= $row["deskripsi"] ?></p>
                            <h5 class="card-title"><?= $row["harga"] ?></h5>
                            <a href="#" class="btn btn-primary">Order Now!</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>



    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>