<?php

//function mengambil data admin
function get_admin(){
    $sql = "SELECT * FROM admin
    ORDER BY display_name";
    $hasil = get_data($sql);
   
    $array = array();
    //looping isi hasil supaya disusun ke
    //dalam array
    for ($i=0; $i<count($hasil); $i++){
        //buat variabel bantu supaya disusun ke
        //dalam  array
        $data = $hasil[$i];

        //buat item yang memiliki setiap baris
        $item = array (
            "$data[display_name]<br>$data[username]",
            $data["admin_level"],
            "<button>Edit</button>
            <button>Hapus</button>");
            
            //setelah setiap item masukkan ke array besar
            $array []= $item;

            
           
    }
    //susun judul kolom
    $judul = array("Admin","Level","Tindakan");
    //cetak denga buat tabel
    buat_tabel("tabel_login",
    $judul,
    $array);
}