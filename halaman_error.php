<?php
include "config.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman administator</title>
    <link rel="stylesheet" href="style-admin.css">
</head>
<body>
    <div class='halaman'>
    <h1>Tejadi Kesalahan</h1>
    <p>Terjadi kesalahan pada script,dengan kode dan pesan kesalahan sebagai berikut:

    </p>
  
    <?php
    tampil_pesan();
    ?>
    
    </div>
</body>
</html>