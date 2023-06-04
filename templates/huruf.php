<?php
session_start();

require_once '../models/data.php';
if (!isset($_SESSION['name']) || $_SESSION['name'] == '') {
    // Redirect url
    header('Location: ../choices.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Belajar Huruf</title>
</head>

<body>
    <div class="container">
        <a href="../choices.php?name=<?= $_SESSION['name'] ?>">Kembali</a>
        <div class="row">
            <div class="col">
                <h1><b>Huruf Hangeul: Vokal</b></h1>
                <p>Jika huruf vokal Hangeul berdiri sendiri tanpa huruf konsonan, maka harus ada huruf ㅇ yang mendampinginya.</p>
                <span>Contoh :</span>
                <p>우 : (u)</p>
                <table class="table table-striped text-center table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col text-center">Huruf Hangeul</th>
                            <th scope="col text-center">Romanisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Looping data dari models/data.php -->
                        <?php foreach ($HurufLocals as $HurufLocal) : ?>
                            <tr>
                                <td><?= $HurufLocal[0] ?></td>
                                <td><?= $HurufLocal[1] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1><b>Huruf Hangeul: Konsonan</b></h1>
                <p>Huruf vokal nggak bisa berdiri sendiri tanpa huruf konsonan. Seperti apa bentuk huruf konsonan untuk Hangeul?</p>
                <table class="table table-striped text-center table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col text-center">Huruf Hangeul</th>
                            <th scope="col text-center">Romanisasi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Looping data dari models/data.php -->
                        <?php foreach ($HurufKonsonans as $HurufKonsonan) : ?>
                            <tr>
                                <td><?= $HurufKonsonan[0] ?></td>
                                <td><?= $HurufKonsonan[1] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>