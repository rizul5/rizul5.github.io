<?php

//If the HTTPS is not found to be "on"
if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}

$phase = [
    "greet" => "Congratulations!",
    "name" => "Yunita-Nindi-Pratiwi.-S.M",
];

$string = explode('-', $phase['name']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <title>Yunita Nindi Pratiwi</title>
    <meta name="description" content="Dearest Yunita, congratulations for your graduation.">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://rizul5.github.io/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Yunita Nindi Pratiwi">
    <meta property="og:description" content="Dearest Yunita, congratulations for your graduation.">
    <meta property="og:image" content="https://rizul5.github.io/assets/img/yunita.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="rizul5.github.io">
    <meta property="twitter:url" content="https://rizul5.github.io/">
    <meta name="twitter:title" content="Yunita Nindi Pratiwi">
    <meta name="twitter:description" content="Dearest Yunita, congratulations for your graduation.">
    <meta name="twitter:image" content="https://rizul5.github.io/assets/img/yunita.jpg">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

    <meta property="fb:app_id" content="608906650497752">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/yunita.css">

</head>

<body>
    <div class="card">
        <div class="imgBox">
            <img src="../assets/img/yunita1.jpg" alt="">
            <img src="../assets/img/yunita2.jpg" alt="">
        </div>
        <div class="details">
            <div class="content">
                <div class="content-greet">
                    <?php foreach (str_split($phase['greet']) as $row) : ?>
                        <div class="kotak-g">
                            <span class="greet"><?= $row ?></span>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="content-name" style="margin-top: 20px;">
                    <?php foreach ($string as $row) : ?>
                        <div class="kotak-n">
                            <span class="name"><?= $row ?></span>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden">
        <div class="content">
            <?php foreach ($string as $row) : ?>
                <div class="kotak"><?= $row ?></div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>