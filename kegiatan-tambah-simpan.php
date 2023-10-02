<?php



include "config.php";
include "function.php";
include "../libs/lib_image/lib_image_operations.php";
cek_login();

//cek kiriman post dan tangkap isinya
if(isset($_POST["judul"])){
    $judul = filter_var($_POST["judul"],FILTER_SANITIZE_STRING);
    $artikel = filter_var($_POST["artikel"],FILTER_SANITIZE_STRING);

    $tgl_waktu = date("Y-m-d H:i:s");//format sesuai database
    $id_admin = $_SESSION ["user"]["ID_admin"];//id yang sedang login

    $sql = "INSERT INTO kegiatan
    (judul_kegiatan,isi_kegiatan,tgl_upload,ID_admin)
    VALUES ('$judul','$artikel','$tgl_waktu',$id_admin)";
    
    
    $hasil = run_query($sql);
    //id dari kegiatan yang baru di buat
    $ID = mysqli_insert_id($koneksi);
   

    //mula mula sediakan bagian awal sql simpan 
    //fotonya sebelum nanti ditambahkan
    //foto dari looping
    $sql2 =  "INSERT INTO foto_kegiatan (ID_kegiatan,foto,caption)
            VALUES";
            
    //Sediakan array kosong sebagai tempat
    //dikumpulkan setiap data foto
    $data_foto = array();


    //setiap foto adalah item array di dalam 
    //array besar $_files
    foreach ($_FILES as $key => $data){
        //didala setiap arrayada property
        //yang seragam yaitu name ,tmp name
        //yang lain

        //mencari yang name nya tidak kosong 
        if ($data["name"] !=""){

           

            //ambil angka dari $key
            $angka = substr($key,4);

            //panggil fungsi crop dari libary
            crop_foto("foto$angka", 640,426,"","../upload");
            
            //maka caption nya adalah 
            $cap = $_POST["caption".$angka];

            //tambahkan data foto ini ke $data_foto
            $data_foto[]="($ID, '$data[name]', '$cap')";
        }
        
    }
    //tambahkan data poto ini ke sql 2
    $sql2  .= join(",", $data_foto);
    $hasil2 = run_query ($sql2);
    $_SESSION["pesan"] = "Data Tersimpan";
    header("location: kegiatan-tambah.php");
   
}
