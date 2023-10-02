<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK-PESANTREN-BUKHORI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div>
        <img src="images/logo.png" alt="">
        </div>

        <div>
            <h1>SMK PESANTREN BUKHORI</h1>
            <h2>JLN.Pendidikan Desa Cempedak Lobang Dusun III</h2>
            <h3>Serdang Bedagai</h3>
        </div>

        <div></div>
        
    </header>

    <nav>
        <ul>
            <li><a href="">Beranda</a></li>
            <li><a href="">Kegiatan Sekolah</a></li>
            <li><a href="">Profile</a></li>
        </ul>
    </nav>

    <!-- SLIDE SHOW -->
    <div id="frame">

        <div class="slide" id="slide">

            <div class="item">
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus accusamus eius maiores.
                </div>
                <img src="slide/pic1.jpg"  alt="">
                
            </div>
            <div class="item">
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus accusamus eius maiores.
                </div>
                <img src="slide/pic2.jpg" alt="">
                
            </div>
            <div class="item">
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus accusamus eius maiores.
                </div>
                <img src="slide/pic3.jpg" alt="">
                
            </div>
            <div class="item">
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus accusamus eius maiores.
                </div>
                <img src="slide/pic4.jpg" alt="">
                
            </div>
            <div class="item">
                <div class="teks">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus accusamus eius maiores.
                </div>
                <img src="slide/pic5.jpg" alt="">
                
            </div>

        </div>

    </div>
</body>
</html>

<script>
    nomor = 3 //mula-mula tampil slide #1
    tampil()

    function tampil(){
        slide.className = "posisi" + nomor
    }

    function kiri(){
        nomor += 1
        //kalau sudah lewat 4,maka balik ke 1
        if (nomor > 4)nomor = 1
        tampil()

    }
    setInterval(kiri, 1000)//dalam millisecond
</script>