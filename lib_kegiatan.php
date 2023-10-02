<?php

function get_kegiatan(){

$sql = "SELECT 
        kegiatan.ID_kegiatan, kegiatan.judul_kegiatan, kegiatan.tgl_upload,admin.display_name 
        FROM kegiatan 
        LEFT JOIN admin ON kegiatan.ID_admin=admin.ID_admin";

$hasil = get_data($sql);

$array_judul = array("Judul","Tanggal","Admin","Tindakan");
$array = array();
//untuk data label
if(count($hasil)){
    for($i=0; $i<count($hasil); $i++){
        $item = array(
            $hasil[$i]["judul_kegiatan"],
            $hasil[$i]["tgl_upload"],
            $hasil[$i]["display_name"],
            "Edit - Delete"

        );
        //lalu masukkan item baris ke array
        $array[] = $item;
    }

    buat_tabel("tabel_login",$array_judul,$array);

}


}