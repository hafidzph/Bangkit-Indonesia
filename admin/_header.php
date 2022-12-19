<?php 
include 'authentication.php';
include '_config.php';
$id = $_SESSION["id"];
$user = $_SESSION["name"];

if(isset($_POST['logout'])){
    $_SESSION = [];
    session_unset();
    session_destroy();
    header('Location: login_user.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Native</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Bangkitkan Semangat Indonesia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page_kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page_artikel.php">Artikel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page_gallery.php?id_user=<?= $id;?>">Galeri</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="page_user.php">User</a>
        </li>
        </ul>
        <form action="" method="POST" class="form-inline my-2 my-lg-0">
        <h5 class="mt-1">Welcome, <?= $user; ?></h5>
        <button class="btn rounded-3 btn-danger btn-login text-uppercase fw-bold ml-3"
            name="logout"
            type="submit"
            onclick="return confirm('Yakin ingin keluar?')"
        >
        Logout
        </button>
        </form>
    </div>
    </nav>
</body>