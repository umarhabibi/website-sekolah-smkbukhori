<form action="" method="POST" enctype="multipart/form-data">
    Upload File
    <input type="file" name="foto" required accpet=".jpg,.png">
    <br>
    <button type="submit">Upload</button>

</form>
<?php
//kalau sudah ada $f_files[name]
if(isset($_FILES["foto"]["name"])):


//lalu kalau file upload nya tiidak kosong
if(isset($_FILES["foto"]["name"])):

//tampung dulu temporary filenya
$foto = $_FILES["foto"]["tmp_name"];

//ambil dimensi dari fotonya
list($lebar,$tinggi)= getimagesize($foto);

//buat versi panjangnya
$lebar_baru = $lebar /2;
$tinggi_baru = $tinggi /2;

//mula-mula buat image kosong 

$foto_baru = imagecreatetruecolor($lebar_baru,$tinggi_baru);

$foto_sumber = imagecreatefromjpeg($foto);

//buat resempelnya
$resample = imagecopyresampled(
    $foto_baru,
    $foto_sumber,
    0, 0,
    0, 0,//ini adalah star x dan y
    $lebar_baru,$tinggi_baru, //ukuran foto hasil nanti
    $lebar,$tinggi
);

//setelah proses di memori selesai,maka simpan ke file
imagejpeg($foto_baru, "contoh.jpg");
imagedestroy($foto_baru);
endif;

endif;
?>