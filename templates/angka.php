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
    <title>Belajar Angka</title>
</head>

<body>

    <div class="container">
        <a href="../choices.php?name=<?= $_SESSION['name'] ?>">Kembali</a>
        <div class="row">
            <div class="col">
                <h1 class="text-center"><strong>ANGKA</strong></h1>
                <div class="deskripsi">
                    <p>Bahasa Korea memiliki dua sistem angka. Kedua sistem tersebut tidak digunakan secara bersamaan, melainkan memiliki tujuan yang berbeda-beda. Kedua sistem tersebut adalah Sistem Angka Asli Korea dan Sistem Angka Sino-Korea. Mari kita bedah!</p>
                    <h3>Sistem Angka Asli Korea</h3>
                    <p>Sistem angka ini lebih modern dibandingkan sistem angka Sino-Korea. Uniknya, sistem ini hanya terdiri dari 99 angka saja. Sehingga kamu tidak mungkin menghitung lebih dari 99 dengan menggunakan sistem angka ini.</p>
                    <div class="fungsi">
                        <p>Lalu, apa fungsi dari sistem ini? Sistem angka asli Korea digunakan ketika kamu:</p>
                        <ul>
                            <li>Memasan makanan di restoran</li>
                            <li>Menghitung jam (bukan menit)</li>
                            <li>Menghitung benda</li>
                            <li>Menghitung jumlah orang</li>
                            <li>Menghitung secara umum.</li>
                        </ul>
                    </div>
                    <p>Selain itu, sistem angka asli Korea juga digunakan dalam pelajaran matematika, menyebutkan suhu temperatur, dan menghitung skor seperti dalam pertandingan sepakbola atau baseball.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Sistem Angka Sino-Korea</h3>
                <p>Sistem angka ini merupakan adaptasi dari Negeri Tirai Bambu alias China. Angka Sino-Korea sangat mudah untuk dipelajari, kamu hanya perlu menghafal angka 1 sampai 10 aja karena pengucapan angka belasan dan puluhan hanya menggabung angka 1 sampai 10</p>
                <p>Kamu bisa gunakan sistem angka ini untuk: </p>
                <ul>
                    <li>Menyebutkan nomor telfon</li>
                    <li>Menghitung menit</li>
                    <li>Menjelaskan nama-nama bulan</li>
                    <li>Menghitung usia</li>
                    <li>Menyebutkan satuan ukur</li>
                    <li>Menjelaskan nominal uang</li>
                    <li>Menjumlahkan uang</li>
                </ul>
                <p>Nah, karena sistem angka asli Korea tidak mengenal angka di atas 99, maka sistem angka Sino-Korea digunakan untuk menyebutkan angka 100, 1000, dan seterusnya.
                    Setelah mengetahui dua sistem angka dalam bahasa Korea, sekarang giliran kamu untuk mengetahui bagaimana penulisan angka dalam bahasa Korea.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2>Angka dalam Bahasa Korea 1 – 10</h2>
                <table class="table table-striped text-center table-bordered border-primary">
                    <thead>
                        <tr>
                            <th rowspan="2" scope="col text-center">Angka</th>
                            <th colspan="2" scope="col text-center">Angka Bilangan Asli Korea</th>
                            <th colspan="2" scope="col text-center">Angka Bilangan Sino korea</th>
                        </tr>
                        <tr>
                            <th>Hangul</th>
                            <th>Rumi</th>
                            <th>Hangul</th>
                            <th>Rumi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Looping data dari models/data.php -->
                        <?php foreach ($angkaKoreans as $angkaKorean) : ?>
                            <tr>
                                <td><?= $angkaKorean[0] ?></td>
                                <td><?= $angkaKorean[1] ?></td>
                                <td><?= $angkaKorean[2] ?></td>
                                <td><?= $angkaKorean[3] ?></td>
                                <td><?= $angkaKorean[4] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<html>