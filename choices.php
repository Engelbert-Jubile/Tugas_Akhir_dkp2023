<?php
session_start();
require_once 'controllers/GetInput.php';

// Mengecek data get dan session kosong atau tidak serta spasi atau tidak
if (!empty(trim($_GET['name'])) || !empty(trim($_SESSION['name']))) {
    if(isset($_GET['name'])){
        $setName = GetInput::set_name($_GET['name']);
    }
    $getName = GetInput::get_name();
    $_SESSION['name'] = $getName;
} else {
    // Redirect url
    header('Location: ./index.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pilih Materi</title>
</head>

<body>
    <header>
        <h1 class="title">Learn Korean Basic</h1>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Selamat Belajar <?= $_SESSION['name'] ?>, silahkan pilih topik yang akan di pelajari!</p>
            </div>
        </div>
        <div class="row col-md-6 offset-md-3 justify-content-md-between">
            <div class="col-md-auto">
                <a href="templates/huruf.php?name=<?= $_GET['name'] ?>" class="huruf btn btn-success pd-2">Huruf</a>
            </div>
            <div class="col-md-auto">
                <a href="templates/angka.php?name=<?= $_GET['name'] ?>" class="angka btn btn-warning">Angka</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 content">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>