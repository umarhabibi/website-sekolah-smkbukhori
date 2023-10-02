<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda administator</title>
    <link rel="stylesheet" href="style-admin.css">
    <script src="../libs/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
<header>
    <h1>Halaman Beranda Administator</h1>
    <h2>Selamat Datang
        <?= $_SESSION["user"]["display_name"] ?>
    </h2>

</header>

<div class="wadah_main">
<nav>
    <ul class="menu">
        <li><a href="beranda.php">Beranda</a></li>

<?php
//menu pengaturan user hanya untuk admin
//level 1
if($_SESSION["user"]["admin_level"]==1){


?>


        <li><a href="user.php">Pengaturan User</a></li>
<?php
}
?>
<li>
    <a href="#">kegiatan</a>
    <ul>
       <li><a href="tambah-kegiatan.php">Tambah kegiatan</a></li> 
       <li><a href="kegiatan-daftar.php">Daftar Kegiatan</a></li>  
    </ul> 
</li>

        <li>
            <a href="logout.php">Logout</a>
        </li>
</ul>
    
</nav>
