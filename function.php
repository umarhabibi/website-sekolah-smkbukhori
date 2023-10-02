<?php

//INI ADALAH FUNCTION KHUSUS MENJALAIN QUERY CEK SUKSES GAGALNYA
//TANPA PERLU MENGAMBIL DATA (FETCH)
function run_query($sql){
    global $koneksi;
    $hasil = mysqli_query($koneksi,$sql);
    if(!$hasil){
        $_SESSION["pesan"]= mysqli_error($koneksi);
        header("location: halaman_error.php");
        exit;
    }
    return $hasil;
}

function get_data($sql){
    // ambil variabel koneksi dari luar function
    global $koneksi;
    
     // mula mula sediakan array kosong
    $hasil = array();
   

    // jalaan kan query
    $query = mysqli_query($koneksi,$sql);
    // kalau gagal query
    if(!$query){
        //simpan kode error mysql ke session
        $_SESSION["pesan"] = mysqli_error($koneksi);
        // lemparkan ke halaman error
        header("location: halaman_error.php");
        exit;

    }
    // kalau tidak dapat data nya
    if(mysqli_num_rows($query) == 0){
        return $hasil;
    }
       
    else
    // kalau dapat datanya
    {
        // lakukan looping terhadap setiap baris data
        while( $row = mysqli_fetch_assoc($query)){

            // masukkan baris data tersebut ke hasil
            $hasil[] = $row;
        }

        // setelah selasai looping.retrun kan  hasil
        // hasil kepada si pemangil function
        return $hasil;
    }
}
function tampil_pesan(){
    //kalo ada pesan
    if (isset($_SESSION["pesan"])){
        echo "<div class='kotak_pesan'>";
        echo $_SESSION["pesan"];
        echo "</div>";
        unset($_SESSION["pesan"]);
    }
    else{
        return "";
    }
}
function clear_pesan(){
    unset($_SESSION["pesan"]);
}

//function untuk memeriksa dulu kalo belum ada login 
//maka lempar ke halaman form login(index.php)

function cek_login(){
    if(!isset($_SESSION["user"])){
    header("location:index.php");
    exit;
    }
}
//function ini di pasang di index,supaya kalo sudah login 
//janan lagi munccul form login
function cek_sudah_login(){
    if(isset($_SESSION["user"])){
        header("location: beranda.php");
        exit;
    }
}

//function  khusus membuat table bedasarkan array
function buat_tabel($class,$judul, $array){
    $nomor_urut = 1;
    $hasil = "<table class='$class'>";

    //untuk judul kolom
    $hasil .= "<tr><th>No</th>";
    for($i=0; $i<count($judul); $i++){
        $hasil .= "<th>$judul[$i]</th>";
    }
    $hasil .="</tr>";
    //looping $i untuk membuat <tr>
    for($i=0; $i<count($array); $i++){
        $hasil .= "<tr>";


        //untuk nomor urut
        $hasil .= "<td>$nomor_urut</td>";
        $nomor_urut ++;
        //tampung dulu setiap baris ke dalam variabel bantu
        $baris = $array[$i];
        //looping $j untuk membuat <td>
        for ($j=0; $j<count($baris); $j++){
            $hasil .= "<TD>$baris[$j]</TD>";
        }
        $hasil .= "</tr>";



     
    }
    $hasil .= "</table>";
    echo $hasil;
}