<?php 
session_start();
	if (!isset($_SESSION["login"])) {
		header("location: login.php");
		exit;
	}
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
            <link rel="icon" href="img\logo ats.PNG">
            <title>Beranda | PT Pertamina (Persero)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/b4megamenu.css">
    <link rel="shortcut icon" href="F:\Naufal\Kuliah\Semester 4\Pemograman Berbasis Web\Pertamina\Pertamina\Pertamina\img\favicon.ico">
<!-- Image and text -->
<nav class="navbar navbar">
<div class="container">
  <a class="navbar-brand" href="#">
    <img src="img\logo.png" width="200" height="60" class="d-inline-block align-top" alt="">
  </a>
  <nav class="navbar navbar">
  <a class="navbar-brand"></a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
  </div>
</nav>
<style>
    footer a{color:#fff;}
    footer a:hover{color:#fff;}
</style>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
     <div class="container">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
       <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TENTANG KAMI
        </a>
        <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h4>TENTANG KAMI</h4>
              <p>Sebagai lokomotif perekonomian bangsa Pertamina merupakan perusahaan milik negara yang bergerak di bidang energi meliputi minyak, gas serta energi baru dan terbarukan.</p>
            </div>
            <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>PROFIL PERUSAHAAN</h4></span>
              <a href="Profil.html" class="dropdown-item">Siapa Kami</a>
              <a href="sejarah-pertamina.html" class="dropdown-item">Sejarah Pertamina</a>
              <a href="visi,misi.html" class="dropdown-item">Visi,Misi,Tujuan& Tata nilai</a>
              <a href="bidang-usaha.html" class="dropdown-item">Bidang Usaha</a>
              <a href="makna-logo.html" class="dropdown-item">Makna Logo</a>
              <a href="struktur-grup.html" class="dropdown-item">Struktur Grup Perusahaan</a>
              <a href="pedoman-tata.html" class="dropdown-item">Pedoman Tata Kelola Perusahaan</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>DIREKSI & KOMISARIS</h4></span>
              <a href="direksi_komisaris.html" class="dropdown-item">Dewan Direksi</a>
              <a href="dewan2.html" class="dropdown-item">Dewan Komisaris</a>
          </div>
          </div>  
        </div>

      </li>

      <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-two" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BISNIS KAMI
        </a>
        <div class="dropdown-menu mega-area" aria-labelledby="mega-two">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
            <h4>BISNIS KAMI</h4>
            <p>Kegiatan usaha di bidang penyelenggaraan usaha energi, yaitu minyak dan gas bumi, energi baru dan terbarukan, serta kegiatan lain yang terkait atau menunjang kegiatan usaha di bidang energi, yaitu minyak dan gas bumi, energi baru dan terbarukan tersebut serta pengembangan optimalisasi sumber daya yang dimiliki Perusahaan..</p>
            </div>
            <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>HULU</h4></span>
              <a href="hulu.html" class="dropdown-item">Kegiatan Usaha Hulu</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>HILIR</h4></span>
              <a href="Pengelolaan.html" class="dropdown-item">Pengolahan</a>
              <a href="logistik.html" class="dropdown-item">Logistik, Supply chain, dan Infrastruktur</a>
              <a href="pemasar.html" class="dropdown-item">Pemasaran Korporat</a>
              <a href="pemasaran.html" class="dropdown-item">Pemasaran Ritel</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>LAIN LAIN</h4></span>
              <a href="megaproyek.html" class="dropdown-item">Megaproyek Pengloahan dan petrokimia</a>
              <a href="perencanaan.html" class="dropdown-item">Perencanaan investasi dan Manajemen <br> Risiko</a>
              <a href="fleet.html" class="dropdown-item">Fleet Inspection & Assurance</a>
              <a href="integrated.html" class="dropdown-item">Integrated Supply Chain</a>
          </div>
      </div>
      <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         HUBUNGAN INVESTOR
        </a>
        <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h4>HUBUNGAN INVESTOR</h4>
              <p>Pertamina adalah perusahaan energi nasional yang sahamnya 100% dimiliki oleh Pemerintah Republik Indonesia melalui kementerian Badan usaha milik negara(BUMN) selaku pemegang saham.</p>
            </div>
            <div class="col-md-3">
              <a href="pemegangsaham.html" class="dropdown-item">Pemegang Saham</a>
              <a href="obligasipertamina.html" class="dropdown-item">Obligasi Pertamina</a>
              <a href="peringkatutang.html" class="dropdown-item">Peringkat Utang</a>
              <a href="rups.html" class="dropdown-item">RUPS</a>
              <a href="marketinsight.html" class="dropdown-item">Market Insight</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>LAPORAN & PRESENTASI</h4></span>
              <a href="#" class="dropdown-item">Laporan Tahunan</a>
              <a href="#" class="dropdown-item">Laporan Keberlanjutan</a>
              <a href="laporankeuangan.html" class="dropdown-item">Laporan Keuangan</a>
              <a href="presentasi.html" class="dropdown-item">Presentasi</a>
          </div>
          </div>  
        </div>

      </li>
      </li>
        <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-two" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEDIA DAN INFORMASI
        </a>
       <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h4>MEDIA & INFORMASI</h4>
              <p>Dalam memenuhi kebutuhan informasi bagi masyarakat, Pertamina memberikan akses yang luas untuk dapat mencari informasi seputar kegiatan energi di Indonesia.</p>
            </div>
            <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>BERITA</h4></span>
              <a href="#" class="dropdown-item">News Release</a>
              <a href="#" class="dropdown-item">Energia News</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>MEDIA DIGITAL</h4></span>
              <a href="#" class="dropdown-item">Epaper</a>
              <a href="#" class="dropdown-item">Galeri</a>
              <a href="#" class="dropdown-item">Pertamina Energi Institute</a>
              <a href="#" class="dropdown-item">Energia Weekly</a>
              <a href="#" class="dropdown-item">Energia</a>
              <a href="#" class="dropdown-item">Buku Kompilasi Market Insight 2019</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>INFO PERTAMINA</h4></span>
              <a href="#" class="dropdown-item">E-PPID</a>
              <a href="#" class="dropdown-item">Layanan Informasi Publik</a>
              <a href="#" class="dropdown-item">Pengumuman</a>
              <a href="#" class="dropdown-item">Program dan Event</a>
              <a href="#" class="dropdown-item">Pengadaan Umum</a>
              <a href="#" class="dropdown-item">Pengadaan Minyak Mentah</a>
              <a href="#" class="dropdown-item">Pengadaan Kapal</a>
              <a href="#" class="dropdown-item">Pengadaan di Daerah</a>
          </div>
          </div>  
        </div>
      </li>
       <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-two" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          RESPONSIBILITY
        </a>
       <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h4>RESPONSIBILITY</h4>
              <p>Pelaksanaan tanggung jawab sosial perusahaan (Corporate Social Responsibility/CSR) memiliki tujuan utama untuk memastikan bahwa kepentingan sosial dari berbagai kelompok pemangku kepentingan Pertamina dapat dipenuhi secara tepat dan proporsional, terutama masyarakat yang berada di sekitar lingkungan kerja Perseroan.</p>
            </div>
            <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>Komiktmen Kami</h4></span>
              <a href="pertamina_village.html" class="dropdown-item">Pertamina Village</a>
              <a href="employee_volunteerism.html" class="dropdown-item">Employee Volunteerism</a>
              <a href="SMEPP.html" class="dropdown-item">SMEPP /Program Kemitraan </a>
              <a href="disaster_management.html" class="dropdown-item">Disaster Management</a>
              <a href="csv.html" class="dropdown-item">CSV</a>
              <a href="Blodiversity.html" class="dropdown-item">Blodiversity</a>
              <a href="pertamina_schoolarship.html" class="dropdown-item">Pertamina Scholarship</a>
              <a href="pertamina_sehati.html" class="dropdown-item">Pertamina Sehati</a>
              <a href="PKBL.html" class="dropdown-item">PKBL</a>
              <a href="OSN_Pertamina.html" class="dropdown-item">OSN Pertamina</a>
          </div>
          </div>  
        </div>
      </li>
      <li class="nav-item dropdown menu-area">
        <a class="nav-link dropdown-toggle" href="#" id="mega-two" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KARIR
        </a>
       <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <h4>KARIR</h4>
            </div>
            <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>Penerimaan Baru</h4></span>
              <a href="https://recruitment.pertamina.com/" class="dropdown-item">Magang</a>
              <a href="faq_pi.html" class="dropdown-item">FAQ Program Internship</a>
              <a href="https://recruitment.pertamina.com/" class="dropdown-item">Lulusan Baru</a>
              <a href="https://recruitment.pertamina.com/" class="dropdown-item">Tenaga Berpengalaman</a>
          </div>
          <div class="col-md-3">
              <span class="dropdown-mega-sub-title"><h4>KARYAWAN</h4></span>
              <a href="mengapa_pertamina.html" class="dropdown-item">Mengapa Pertamina</a>
              <a href="faq.html" class="dropdown-item">FAQ</a>

          </div>  
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\3.PNG" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\4.PNG" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\5.PNG" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\6.PNG" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\7.PNG" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="container text-center">
  <div class="row">
  <div class="col text-center">
    <h2><strong>BISNIS</strong> KAMI </h2>
  </div>
</div>
<br>
<div class="row">
    <div class="col text-center">
    <img src="img\bawah1.jpg" width="300" height="200">
    <h4><a href="#" class="text-muted">Produk Kami</a> </h4>
      <p class="text-justify">Kegiatan PERTAMINA dalam menyelenggarakan usaha di bidang energi dan petrokimia, terbagi ke dalam dua sector, yaitu Hulu dan Hilir, serta ditunjang oleh kegiatan Anak-Anak Perusahaan dan Perusahaan Patungan</p>
    </div>
    <div class="col text-center">
    <img src="img\bawah2.jpg" width="300" height="200">
    <h4><a href="#" class="text-muted">Energi Terbarukan</a></h4>
      <p class="text-justify">Pertamina mengembangkan energi terbarukan seperti panas bumi, solar cell, lithium ion battery, biodiesel, green energy station dan lainnya.</p>
    </div>
    <div class="col text-center">
    <img src="img\bawah3.jpg" width="300" height="200">
    <h4><a href="#" class="text-muted">Pemegang Saham</a></h4>
      <p class="text-justify">Pertamina adalah perusahaan energi nasional yang sahamnya 100% dimiliki oleh Pemerintah Republik Indonesia melalui kementerian Badan usaha milik negara(BUMN) selaku pemegang saham.</p>
    </div>
  </div>
<br></br>

      <div class="col text-center">
  <div class="container text-center">
  <div class="row">
  <div class="col text-center">
    <h2> ANDA MUNGKIN JUGA<strong> MENYUKAI ?</strong></h2>
  </div>
</div>
<br></br>


        <!-- Three columns of text below the carousel -->
        <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img class="rounded-circle" src="img\box1.Png" alt="Generic placeholder image" width="120" height="120">
            <br></br>
            <h5><font color=#DC143C>LAPORAN TAHUNAN</font></h5>
            <p><a class="btn btn-primary" href="#" role="button">Klik Disini </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-3">
            <img class="rounded-circle" src="img\box2.Png" alt="Generic placeholder image" width="120" height="120">
            <br></br>
            <h5><font color=#7FFF00>LAYANAN INFORMASI PUBLIK PERTAMINA</font></h5>
            <p><a class="btn btn-primary" href="#" role="button">Klik Disini </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-3">
            <img class="rounded-circle" src="img\box3.Png" alt="Generic placeholder image" width="120" height="120">
            <br></br>
            <h5><font color=#1E90FF>MEDIA</font></h5>
            <p><a class="btn btn-primary" href="#" role="button">Klik Disini </a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-md-3">
            <img class="rounded-circle" src="img\box4.Png" alt="Generic placeholder image" width="120" height="120">
            <br></br>
            <h5><font color=#708090>KARIER</font></h5>
            <p><a class="btn btn-primary" href="#" role="button">Klik Disini </a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>

<br>
-<div class="row">
<div class="col-sm-6 col-md-5">
<div class="container text-left"><h2>PRESS <strong> RELEASE</strong></h2></div>
 <div class="container text-left"><P><small>2020-04-22 10:05:00</small></P></div>
 <div class="container text-left"><a href="#" class="text-muted"><small>PSBB DI BANDUNG RAYA, PERTAMINA PASTIKAN KEAMANAN PASOKAN ENERGI SELAMA MASYARAKAT #DIRUMAHAJA</small></a></div>
 <br>
 <div class="container text-left"><P><small>2020-04-22 10:03:00</small></P></div>
    <div class="container text-left"> <a href="#" class="text-muted"><small>#PERTAMINASIAGACOVID19 : DUKUNG PEMERINTAH, PERTAMINA GANDENG ACT SALURKAN 6.000 MASKER BAGI MASYARAKAT</small></a></div>
    <br>
    <div class="container text-left"> <p><small>2020-04-22 10:00:00</small></p></div>
    <div class="container text-left"> <a href="#" class="text-muted"><small>MOMENT HARI KARTINI PERTAMINA BERIKAN APRESIASI PADA PEREMPUAN INDONESIA YANG TETAP BEKERJA DI MASA PANDEMI COVID-19</small></a></div>
</div>
  <div class="col-sm-6 col-md-7">
  <div class="container text-left"> <h2>HIGHLIGHT <strong> PROGRAM</strong></h2></div>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
 <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
 <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
   </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\Highlight_11.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\Highlight_12.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\Highlight_13.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\Highlight_14.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
     <img src="img\Highlight_15.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\Highlight_16.jpeg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      <img src="img\Highlight_17.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
</div>
<br>

<br>
<div class="container text-left"><h2><strong>ENERGIA</strong> NEWS</h2></div>
<br>
<div class="row">
  <div class="col-sm-3 col-md-3">
    <img src="img\thumb_1.jpeg" width="250">
    <p><small>2020-04-22 08:00:00</small></p>
    <a href="#" class="text-muted"><small>LAMPAUI TARGET RKAP KUARTAL I, PHE ONWJ TEMUKAN MINYAK DI SUMUR FK-1</small></a>
</div> 
  <div class="col-sm-3 col-md-3">
    <img src="img\thumb_2.jpg" width="250">
       <p><small>2020-04-21 18:00:00</small></p>
        <a href="#" class="text-muted"><small>PERTAGAS GELAR PSIKOEDUKASI DARING</small></a>
</div> 
  <div class="col-sm-3 col-md-3">
    <img src="img\thumb_3.jpg" width="250">
       <p><small>2020-04-21 17:35:00</small></p>
        <a href="#" class="text-muted"><small>BELI PERTAMAX SEHARGA PERTALITE SELAMA KARTINI WEEK DI SUMATERA UTARA</small></a>
</div> 
  <div class="col-sm-3 col-md-3">
    <img src="img\thumb_4.jpg" width="250">
       <p><small>2020-04-21 15:00:00</small></p>
        <a href="#" class="text-muted"><small>PESAN SANG DOKTER DARI GARDA TERDEPAN PENANGANAN PANDEMI</small></a>
</div> 
</div>
</div>
</div>
</div>
</body>



<br></br>

<!-- Footer -->
<footer class="bg-dark text-white">
  <div class="container ">
    <div class="row ">
      <div class="col-md-9">
<div class="row">
<div class="col-md-3">
<h5>Our Website</h5>
<ul class="list list-icons list-icons-sm">
<li><i class="fa fa-caret-right"></i> <a href="/id/kebijakan-privasi">Privacy Policy</a></li>
<li><i class="fa fa-caret-right"></i> <a href="/id/waspada-penipuan">Scam Alert</a></li>
</ul>
</div>
<div class="col-md-3">
<h5>Tools</h5>
<ul class="list list-icons list-icons-sm"><!-- <li><i class="fa fa-caret-right"></i> <a href="https://mail.pertamina.com/owa/">Webmail</a></li> -->
<li><i class="fa fa-caret-right"></i> <a href="https://web.pertamina.com/i-serv/login.aspx">I-Serv</a></li>
<li><i class="fa fa-caret-right"></i> <a href="http://spbu.pertamina.com/">Registrasi SPBU</a></li>
<li><i class="fa fa-caret-right"></i> <a href="https://pertaminaclean.tipoffs.info/">Pertamina Whistleblowing System</a></li>
<li><i class="fa fa-caret-right"></i> <a href="https://eppid.pertamina.com/">Keterbukaan Informasi Publik</a></li>
</ul>
</div>
<div class="col-md-3">
<h5>Announcement</h5>
<ul class="list list-icons list-icons-sm">
<li><i class="fa fa-caret-right"></i> <a href="/id/news-room/program-and-event">Pertamina Info</a></li>
<li><i class="fa fa-caret-right"></i> <a href="/id/news-room/general-procurement" id="" news-room="" general-procurement="">General Procurement</a></li>
<li><i class="fa fa-caret-right"></i> <a href="/id/news-room/announcement">Annoucement</a></li>
<li><i class="fa fa-caret-right"></i> <a href="https://eproc.pertamina.com/">E-Procurement</a></li>
</ul>
</div>
<div class="col-md-3">
<h5>Network</h5>
<ul class="list list-icons list-icons-sm">
<li><i class="fa fa-caret-right"></i> <a href="/id/anak-perusahaan">Subsidiaries</a></li>
<li><i class="fa fa-caret-right"></i> <a href="/id/contact-">Office Address</a></li>
</ul>
</div>
</div>
            </div>
            <div class="col-md-3">
                <h5 class="mb-sm">Contact Us</h5>
                <ul class="list list-icons mt-xl">
                    1 500 000
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Jl. Medan Merdeka Timur 1A, Jakarta 10110</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">pcc@pertamina.com</a></li>
                </ul>
                <ul class="social-icons mt-xl">
                      <img src="img\social1.png">               
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-fluid text-center py-4">
            <div class="row">
                <div class="col-md-11">
                    <p>© Copyright PT Pertamina(Persero) 2020. All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
  </div>
  </div>
</footer>
<!-- Footer -->
</html>