
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="<?php echo base_url('Assets/css/styles.css');?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/open-iconic-bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/animate.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/owl.carousel.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/owl.theme.default.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/magnific-popup.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/aos.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/ionicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/bootstrap-datepicker.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/jquery.timepicker.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/flaticon.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/icomoon.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('Assets/NEW/css/style.css');?>">
  <style>
        .jumbotron {
            position: relative;
            overflow: hidden;
            background-color: black;
        }
        .jumbotron video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Menempatkan video di belakang konten */
        }
        .jumbotron .container {
            position: relative;
            z-index: 1; /* Menempatkan konten di depan video */
        }
           .jumbotron {
            background-image: url('<?php echo base_url('Assets/img/me.jpg');?>'); /* Ganti dengan URL gambar Anda */
            overflow: hidden;
            background-color: black;
            height:500px;
            opacity: 0.5; /* Mengatur transparansi video */
        }
        .jumbotron video {
            position: absolute;
            z-index: 1;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.5; /* Mengatur transparansi video */
        }
        .jumbotron .container {
            z-index: 2;
            position: relative;
        }
        hr { background-color: white; height: 1px; border: 0; }
    </style>
</head>
<body>
  <!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="<?php echo base_url('index.php/list');?>" style="  text-shadow: 3px 4px 2px rgb(0, 255, 0);">&nbsp;Dwi Setiono<br><small><br></small></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="" class="nav-link"></a></li>
					<li class="nav-item active"><a href="<?php echo base_url('index.php/list');?>" class="nav-link">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/abbout');?>" name="abbout" class="nav-link">Abbout Me</a>
					<li class='nav-item'><a href='<?php echo base_url('index.php/login');?>' class='nav-link'>Login</a></li>	
				</ul>
				</div>
			</div>
	</nav>
	<!-- End Navbar -->


  <!-- content -->
  <div class="jumbotron text-center">
    <h1 class="display-12">SELAMAT DATANG</h1>
    <p class="lead" style="color:black;">Ini adalah Website Portofolio saya.</p>
    
    <p style="color:black;">Jika anda ingin mendownload CV saya silahkan klik tombol dibawah ini.</p>
    <a class="btn btn-primary btn-lg fadeInDown" href="<?php echo base_url('Assets/img/CV.pdf');?>" download role="button">Download CV</a>
  </div>
  <!-- End content -->



<div class="container">
    <div class="row">
      <div class="col-sm-6" align="left">
        <h3>PENDIDIKAN</h3>
        <p><strong>Universitas Muhammadiyah Prof.Dr.HAMKA</strong> <br> Lulus Fakultas Teknik Jurusan Teknik Informatika (S1) 
          <br>
          Tahun 2018 - 2022
          <br>
          Dengan Predikat (Sangat Memuaskan)
        </p>
      </div>
      <div class="col-sm-6" align="right">
        <h3>PENGALAMAN</h3>
        <p><strong>PT.Webcenter Sentra Solusindo </strong><br>
        Tahun 2022 - Sekarang <br> Jabatan : Programmer</p>
        <p><strong>PT.Cipta Swadaya Resik</strong> <br>
        Tahun 2017 - 2018 <br> Jabatan : Admin Gudang</p>
      </div>
    </div>
    <br>
    <hr >
    <br>
    <div class="row">
      <div class="col-sm-6" align="left">
        <h3>KEAHLIAN</h3>
        <table>
          <tr>
            <td><h5>Hard Skill</h5></td>
            <td><h5>Soft Skill</h5></td>
          </tr>
          <tr>
            <td>
                <p><strong>Bahasa Pemrogramman</strong> <br> - HTML+CSS,PHP,JavaScript,Python <br>
                  <strong>Basis Data</strong> <br> - MySQL,ORACLE,PostgreSQL <br>
                  <strong>Microsoft Office</strong> <br> - Microsoft Word, Microsoft Excel, Power Point</p>
            </td>
            <td>
                <p><strong>- Kerja Tim maupun Individu <br>
                          - Pantang Menyerah <br>
                          - Menyukai tantangan <br>
                          - Suka Diskusi
                          - Suka Tantangan</strong></p>
            </td>
          </tr>
        </table>
      </div>

      <div class="col-sm-6" align="right">
        <h3>Informasi Kontak</h3>
        <table align="right">
          <tr>
            <td><a href="https://wa.me/+6285717238143"><i class="fas fa-phone"></i></a></td>
            <td>:</td>
            <td>+62 857 1723 8143</td>
          </tr>
          <tr>
            <td><i class="fas fa-envelope"></td>
            <td>:</td>
            <td>mrdwi007java@gmail.com</td>
          </tr>
          <tr>
            <td><i class="icon-instagram"></td>
            <td>:</td>
            <td>@dwi.014</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- end content -->

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>