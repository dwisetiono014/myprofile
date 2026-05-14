
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

  <!-- Libraries Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('Assets/slide/lib/animate/animate.min.css');?>"/>
  <link href="<?php echo base_url('Assets/slide/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

  
  <!-- Customized Bootstrap Stylesheet -->

  <!-- Template Stylesheet -->


  <style>
    
/*** Features Start ***/
.feature {
    overflow: hidden;
}

.feature-carousel.owl-carousel {
    z-index: 9;
    padding: 0 60px;
    transform: skew(10deg);
}

.feature .feature-shaps {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100px;
    margin-top: -200px;
    transform: skewX(-10deg);
    border: 3px solid var(--bs-primary);
    z-index: 2;
}

@media (max-width: 576px) {
    .feature .feature-shaps {
        width: 90%;
        margin-left: 5%;
    }
}

.feature .feature-item {
    position: relative;
}

.feature .feature-item .feature-img {
    position: relative;
    overflow: hidden;
}

.feature .feature-item .feature-img::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 0;
    top: 0;
    left: 0;
    background: rgba(255, 245, 225, .5);
    transition: 0.5s;
}

.feature .feature-item:hover .feature-img::after {
    height: 80%;
    transform: scaleX(-1.1);
}

.feature .feature-item .feature-img img {
    transition: 0.2s;
}

.feature .feature-item:hover .feature-img img {
    transform: scaleX(-1.1);
}

.feature .feature-item .feature-content {
    position: relative;
    background: var(--bs-white);
    z-index: 1;
}

.feature .feature-item .feature-content h4 {
    transition: 0.2s;
}

.feature .feature-item:hover .feature-content h4 {
    color: var(--bs-primary);
}

.feature .feature-item .feature-content::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 4px;
    top: 0;
    left: 0;
    background: var(--bs-dark);
    transition: 0.2s;
    z-index: -1;
}

.feature .feature-item:hover .feature-content::after {
    height: 100%;
}

.feature-carousel .owl-nav .owl-prev,
.feature-carousel .owl-nav .owl-next {
    position: absolute;
    width: 50px;
    height: 50px;
    bottom: -122px;
    transform: skew(18deg);
    background: var(--bs-dark);
    color: var(--bs-white);
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.2s;
}

.feature-carousel .owl-nav .owl-prev i,
.feature-carousel .owl-nav .owl-next i {
    transform: skew(-18deg);
}

.feature-carousel .owl-nav .owl-prev {
    left: 0;
}
.feature-carousel .owl-nav .owl-next {
    right: 0;
}

.feature-carousel .owl-nav .owl-prev:hover,
.feature-carousel .owl-nav .owl-next:hover {
    background: var(--bs-primary);
    color: var(--bs-white);
}
.flex-container {
  display: flex;
  flex-wrap: nowrap;
}
/*** Features End ***/
  </style>

  
</head>
<body>
  <!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container" >
				<a class="navbar-brand" href="<?php echo base_url('index.php/list');?>" style="  text-shadow: 3px 4px 2px rgb(0, 255, 0);">&nbsp;Dwi Setiono<br><small><br></small></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto" align="right">
					<li class="nav-item"><a href="" class="nav-link"></a></li>
					<li class="nav-item "><a href="<?php echo base_url('index.php/list');?>" class="nav-link">Home</a></li>
					<li class="nav-item active"><a class="nav-link" id="chcklogin" href="<?php echo base_url('index.php/abbout');?>" class="nav-link">Abbout Me</a>
					<li class='nav-item'><a href='<?php echo base_url('index.php/login');?>' class='nav-link'>Login</a></li>	
				</ul>
				</div>
			</div>
	</nav>
	<!-- End Navbar -->
   <br>
 <div class="card " style="width: 100%; ">
    <div class="flex-container ">
        <img src="<?php echo base_url('Assets/img/dwi2.JPG');?>" style="object-fit: cover; margin:auto; height:600px; width:600px; opacity: 0.7;" class="card-img-top feature-item wow fadeInDown" alt="...">
        <div class="card-body feature-item wow fadeInUp">
            <h4 class="card-subtitle mb-2 text-muted"><strong>Perkenalkan</strong></h4>
            <table width="400px">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td ><?php echo $nama;?></td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $ttl;?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $agama;?></td>
                </tr>
                <tr>
                    <td>Suku</td>
                    <td>:</td>
                    <td><?php echo $suku;?></td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td><?php echo $tinggi;?> cm</td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td>:</td>
                    <td><?php echo $berat;?> Kg</td>
                </tr>
            </table>
            <p class="card-text"></p>
            <br>
            <p class="card-text">&nbsp;&nbsp;Saya memiliki banyak hobi diantaranya bermain futsal, bermain gitar, game, dan membuat sebuah aplikasi web. Saat ini saya telah menikah dan di karuniai satu anak laki - laki.</p>
            <img src="<?php echo base_url('Assets/img/kita2.JPG');?>" style="object-fit: cover; margin:auto; height:200px; " class="card-img-bottom" alt="...">
        </div>
    </div>
  </div>
   
   <br>
   
   
    <div class="card " style="width: 100%; ">
        <div class="flex-container ">
        <div class="card-body feature-item wow fadeInUp">
            <h4 class="card-subtitle mb-2 text-muted"><strong>Perkenalkan</strong></h4>
            <table width="400px">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td ><?php echo $nama;?></td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $ttl;?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $agama;?></td>
                </tr>
                <tr>
                    <td>Suku</td>
                    <td>:</td>
                    <td><?php echo $suku;?></td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td>:</td>
                    <td><?php echo $tinggi;?> cm</td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td>:</td>
                    <td><?php echo $berat;?> Kg</td>
                </tr>
            </table>
            <p class="card-text"></p>
            <br>
            <p class="card-text">&nbsp;&nbsp;Saya memiliki banyak hobi diantaranya bermain futsal, bermain gitar, game, dan membuat sebuah aplikasi web. Saat ini saya telah menikah dan di karuniai satu anak laki - laki.</p>
            <img src="<?php echo base_url('Assets/img/kita2.JPG');?>" style="object-fit: cover; margin:auto; height:200px; " class="card-img-bottom" alt="...">
            </div>
            <img src="<?php echo base_url('Assets/img/dwi2.JPG');?>" style="object-fit: cover; margin:auto; height:600px; width:600px; opacity: 0.7;" class="card-img-top feature-item wow fadeInDown" alt="...">
        </div>

    </div>
   <br>
<!-- Features Start -->
  <div >
      <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4" style="color:black;">Pembuatan Aplikasi</h1>
                <p class="mb-0">Berikut beberapa aplikasi yang pernah saya buat di perusahaan sebelumnya ataupun karya saya sebelumnya</p>
            </div>
            <div class="feature-carousel owl-carousel">
                <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-img">
                        <img src="<?php echo base_url('Assets/slide/img/feature-1.jpg')?>" class="img-fluid w-80"  alt="">
                    </div>
                    <div class="feature-content p-4">
                        <h4 class="mb-3">Work Your Butt Off</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-img">
                        <img src="<?php echo base_url('Assets/slide/img/feature-2.jpg')?>" class="img-fluid w-80"  alt="">
                    </div>
                    <div class="feature-content p-4">
                        <h4 class="mb-3">Get In The groove</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
                <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-img">
                        <img src="<?php echo base_url('Assets/slide/img/feature-3.jpg')?>" class="img-fluid w-80"  alt="">
                    </div>
                    <div class="feature-content p-4">
                        <h4 class="mb-3">It's more Than A Game</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-img">
                        <img src="<?php echo base_url('Assets/slide/img/feature-4.jpg')?>" class="img-fluid w-80"  alt="">
                    </div>
                    <div class="feature-content p-4">
                        <h4 class="mb-3">Get Fit Don't Quit</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur obcaecati voluptatum,
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="feature-shaps"></div>
        </div>
    </div>
  </div>
  <!-- Features End -->
  <div style="height:600px;">

  </div>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('Assets/slide/lib/wow/wow.min.js')?>"></script>
        <script src="<?php echo base_url('Assets/slide/lib/easing/easing.min.js')?>"></script>
        <script src="<?php echo base_url('Assets/slide/lib/waypoints/waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('Assets/slide/lib/owlcarousel/owl.carousel.min.js')?>"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url('Assets/slide/js/main.js')?>"></script>
</body>
</html>