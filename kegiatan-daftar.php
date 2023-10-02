<?php
include "config.php";
include "function.php";
include "lib_kegiatan.php";

cek_login();
include "header.php";

?>


<main>
<h1>pengaturan berita kegiatan sekolah</h1>
<?php
tampil_pesan();
?>
<?php
get_kegiatan();

?>