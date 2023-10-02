<?php
include "config.php";
include "function.php";

cek_login();
include "header.php";

?>


<main>
<h1>pengaturan berita kegiatan sekolah</h1>
<?php
tampil_pesan();
?>
<form action="kegiatan-tambah-simpan.php" method="POST" enctype="multipart/form-data">
 <fieldset>
    <legend>Form Tambah Kegiatan</legend>
   <table class="tabel_login">

    <tr>
    <td><label>Judul Kegiatan</label><br>
        <input type="text" size="100" name="judul" required>
    </td></tr>

    <tr>
    <td><label>Artikel Kegiatan</label><br>
        <textarea name="artikel"  cols="60"></textarea>
    </td></tr>

    <tr>
        <td><button type="submit">Simpan</button>
    </td></tr>
   
   </table>

 </fieldset>

 <h3>Foto Kegiatan</h3>
 <fieldset>
    <legend>Upload Foto</legend>
    <div id='wadah_foto'></div>
    <div><input type="button" onclick="tambah_upload()" value="Tambah Foto"></div>
 </fieldset>
 </form>

</main>

</div>
    


</body>
</html>

<script>
    var no_urut= 1;
    // function tambah_upload(){
    //     let form_foto = "<div><input type='file' name='foto"+ no_urut + "'></div>"

    //     //lalu inputtan tersebut di masukkan ke  form
    //     wadah_foto.innerHTML += form_foto

    //     //naikan no_urut untuk yang berikutnya
    //     no_urut ++;
    // }
    function tambah_upload(){
        //mula mula buat element input
        let uploadan=  document.createElement("div")
        //1 label dulu
        a = document.createElement("label")
        a.innerHTML = "Upload foto" + no_urut
        uploadan.appendChild(a)
        //2 inputan file
        b = document.createElement("input")
        b.type = "file"
        b.name = "foto" + no_urut
        uploadan.appendChild(b)
        //3 inputan text
        c = document.createElement("input")
        c.type ="text"
        c.name = "caption" + no_urut
        uploadan.appendChild(c)
        //nomor urut
        no_urut ++
        //lalu uploadan tersebut dimasukkan 
        //kedalam dalam wadah_foto
      

    
        //lalu inputan tersebut dimasukkan 
        //kedalm wadahh_foto
        wadah_foto.appendChild(uploadan)
    }
</script>