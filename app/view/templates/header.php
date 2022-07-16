<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  navbar-fixed-top bg-dark fixed-top mb-2">
    <div class="container">
        <a class="navbar-brand" href=" <?= BASEURL; ?>
        ">Sumber Baca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
            <a class="nav-link" href="<?= BASEURL; ?>/buku">Buku</a>
            </div>
        </div>
  </div>
</nav>