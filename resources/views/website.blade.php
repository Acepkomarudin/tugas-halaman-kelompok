<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>kami kembali</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
    scroll-behavior:smooth;
}

body{
    background:linear-gradient(to right,#1E40AF,#3B82F6);
}

nav{
    background:black;
    padding:18px;
    text-align:center;
    position:sticky;
    top:0;
    z-index:1000;
}

nav h2{
    color:white;
    font-size:30px;
}

.hero{
    background:linear-gradient(to right,#7F1D1D,#B91C1C);
    color:white;
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:45px;
    margin-bottom:10px;
}

.hero p{
    font-size:18px;
}

.container{
    width:90%;
    margin:30px auto;
}

.box{
    background:#39FF14;
    padding:25px;
    margin-bottom:25px;
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,.1);
}

.box h2{
    color:#0d6efd;
    margin-bottom:15px;
}

.anggota{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.card{
    width:280px;
    background:#E5E7EB;
    padding:20px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 2px 8px rgba(0,0,0,.1);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

.card img{
    width:100px;
    height:100px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:10px;
}

.btn{
    display:inline-block;
    margin-top:10px;
    background:#0d6efd;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:5px;
}

.btn:hover{
    background:#084298;
}

.profil{
    text-align:justify;
    line-height:1.8;
}

.contact{
    text-align:center;
}

.contact a{
    text-decoration:none;
    color:#0d6efd;
    margin:10px;
    font-size:18px;
    font-weight:bold;
}

.contact a:hover{
    color:#084298;
}

footer{
    background:#222;
    color:white;
    text-align:center;
    padding:20px;
}

.top{
    position:fixed;
    bottom:20px;
    right:20px;
    background:#0d6efd;
    color:white;
    text-decoration:none;
    width:50px;
    height:50px;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:50%;
    font-size:22px;
}

.top:hover{
    background:#084298;
}

</style>

</head>

<body id="home">

<nav>

<h2>WEBSITE KELOMPOK</h2>

</nav>

<section class="hero">

<h1>Kami Kembali</h1>

<p>Tugas Kelompok Pemrograman halaman Laravel</p>

</section>

<div class="container">

<div class="box">

<h2>Informasi</h2>

<p><b>Universitas:</b> AL-GHIFARI</p>

<p><b>Semester :</b> 2</p>

<p><b>Jurusan / Prodi :</b>sistem informasi</p>

</div>

<div class="box">

<h2>Tentang Kami</h2>

<p class="profil">

"Halo, <b> kami </b> adalah mahasiswa Program Studi sistem informasi yang memiliki
 minat di bidang teknologi dan pengembangan website. Saat ini kami sedang
  mempelajari HTML, CSS, PHP, JavaScript, dan Framework Laravel untuk meningkatkan
   kemampuan dalam membuat aplikasi web yang modern, responsif, dan mudah digunakan."
</p>

</div>

<div class="box">

<h2 align="center">Anggota Kelompok</h2>

<br>

<div class="anggota">

<div class="card">

<img src="img/acep.jpeg" alt="Acep">

<h3>Acep Komarudin</h3>

<p>Mahasiswa sistem informasi</p>

<a href="/contoh" class="btn">Lihat Profil</a>

</div>

<div class="card">

<img src="img/adit.jpeg" alt="Adiiya">

<h3>Muhamad Aditiya</h3>

<p>Mahasiswa sistem informasi</p>

<a href="/index" class="btn">Lihat Profil</a>

</div>

<div class="card">

<img src="img/puyu.jpeg" alt="Putri ayu">

<h3>Putri Ayu Ramadani</h3>

<p>Mahasiswi sistem informasi</p>

<a href="/unable" class="btn">Lihat Profil</a>

</div>

</div>

</div>

<div class="box">

<h2>Pengertian Laravel</h2>

<p class="profil">

Laravel merupakan framework PHP yang menggunakan konsep
<b>Model View Controller (MVC)</b>.

Framework ini menyediakan berbagai fitur seperti Routing,
Middleware, Authentication, Migration, Blade Template Engine,
dan Eloquent ORM sehingga proses pengembangan aplikasi web
menjadi lebih cepat, aman, terstruktur, dan mudah dipelihara.

Laravel juga banyak digunakan untuk membangun website maupun
aplikasi berbasis web dengan tampilan yang modern dan performa
yang baik.

</p>

</div>

<div class="box contact">

<h2>Hubungi Saya</h2>

<br>

<a href="https://wa.me/6281234567890">📱 WhatsApp</a>

<a href="https://instagram.com/">📷 Instagram</a>

<a href="https://tiktok.com/">🎵 TikTok</a>

<a href="https://github.com/">💻 GitHub</a>

</div>

</div>

<footer>

<p>

© 2026 My Website | Dibuat oleh Acep Komarudin

</p>

</footer>

<a href="#home" class="top">⬆</a>

</body>
</html>