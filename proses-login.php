<?php
include "config.php";
include "function.php";

// apabila tidak ada submit kembalikan ke form
if(!isset($_POST["submit"])){
    header("location: index.php");
    exit;
}

// tampung kiriman form 
$u = filter_var($_POST["username"],
        FILTER_SANITIZE_STRING);
$p = md5 ($_POST["password"]);

// susun sql mencocokkan form ke database
$sql = " SELECT * FROM admin
        WHERE username  = '$u'
        AND password    = '$p' ";
// testing apakah form berhasil ditangkap
// echo $sql; 
// exit;

// proses sql ke database dan tampung datanya
$data = get_data($sql);
// testing berapa data di dapat
//print_r ($data);

//kalo dapat satu data artinya usernya ada
if (count($data)==1){
        //simpan data ke session
        $_SESSION["user"]= $data[0];
        //lempar ke beranda
        header("location:beranda.php");

}
//kalo dapat array kosong user tidak ada
if(count($data)==0){
        //buat pesan error
        $_SESSION["pesan"] = "user atau password salah";
        //kembalikan ke form login
        header("location:index.php");
}


