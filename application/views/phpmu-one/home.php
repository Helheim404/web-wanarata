<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
   $background_url = " asset/images/coverbg.jpg ";
?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

    <title>Selamat Datang di Wanarata</title>
</head>

<body>

    <section class="showcase">
        <div class="video-container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo base_url().'main'?>"><img src="<?php echo base_url(); ?>asset/images/icon.png"></a>
                    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url().'berita'?>">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url().'paket'?>">Harga & Paket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url().'gallery'?>">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url().'about'?>">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <video src="<?php echo base_url(); ?>asset/images/wanarata.mp4" autoplay muted loop></video>
        </div>

        <div class="content">
            <h1>SELAMAT DATANG <br>DI WANARATA</h1>
            <div class="lokasi">
                <i class="fa fa-map-marker" aria-hidden="true"></i>Jl. Progo, Karangjambu, Karangmangu, Kec. Kroya,
                Kabupaten Cilacap
            </div>
        </div>
    </section>

    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase font-weight-bold">WELCOME
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <h3 class="text-white-75 font-weight-light mb-5">Wanarata adalah tempat wisata yang menawarkan
                        nuansa
                        pesawahan yang cocok sebagai tempat bersantai dengan teman atau keluarga. Wanarata juga
                        menyewakan tempat untuk community gathering dan outbond.
                    </h3>
                </div>
            </div>
        </div>
    </header>

    <!--fasilitas wanarata-->
    <div class="fasilitas">
        <div class=" col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 mx-auto">
            <h2 class="text-center">Fasilitas</h2>
            <div class="row text-center">
                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 mx-auto">
                    <div class="gambarfasilitas">
                        <img src="<?php echo base_url(); ?>asset/images/gazebo-icon.png" class="img-fluid">
                        <p class="teksfasilitas">Gazebo</p>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 mx-auto">
                    <div class="gambarfasilitas">
                        <img src="<?php echo base_url(); ?>asset/images/pool-icon.png" class="img-fluid">
                        <p class="teksfasilitas">Kolam Renang Anak</p>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 mx-auto">
                    <div class="gambarfasilitas">
                        <img src="<?php echo base_url(); ?>asset/images/mosque-icon.png" class="img-fluid">
                        <p class="teksfasilitas">Mushola</p>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 mx-auto">
                    <div class="gambarfasilitas">
                        <img src="<?php echo base_url(); ?>asset/images/food-icon.png" class="img-fluid">
                        <p class="teksfasilitas">Cafe & Resto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--paket wanarata-->
    <section class="harga py-5">
        <div class="container">
            <h2 class="text-center">Paket & Harga</h2>
            <section class="row">
                <!-- Free Tier -->
                <div class="col-lg-4 mx-auto">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h2 class="card-title text-uppercase text-center py-2">Outbond</h2>
                            <h5 class="card-title text-muted text-uppercase text-center">Mulai Dari</h5>
                            <h6 class="card-price text-center">Rp 15.000</h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Tiket Masuk</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Permainan Hoolahop</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Meniti Tali
                                </li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Jembatan Goyang</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Menanam Padi</li>
                            </ul>
                            <a href="hargapaket.html#paket" class="btn btn-block btn-primary text-uppercase">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4 mx-auto">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h2 class="card-title text-uppercase text-center py-2">Community Gathering</h2>
                            <h5 class="card-title text-muted text-uppercase text-center">Mulai Dari</h5>
                            <h6 class="card-price text-center">Rp 30.000</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Tiket Masuk</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Gazebo</li>
                                <li><span class="fa-li"><i class="fa fa-check"></i></span>Bebas Memilih Makanan
                                </li>
                                <br>
                                <br>
                            </ul>
                            <a href="hargapaket.html#paket"
                                class="btn btn-block btn-primary text-uppercase mt-4 mb-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!--Gambar Pemanis-->
    <div class="gambarpemanis" style="background-image: url(<?php echo $background_url ?>)">
    </div>

    <!--Galeri-->
    <section class="galeri">
        <div class="container">
            <h2 class="text-center">Galeri</h2>
            <div class="row gallery">
			
			<?php
                    include "preview_gallery.php";
                ?>
			

			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <img class="w-100" id="popup-img">
    </div>
  </div>
</div>
            </div>
			
            <a href="<?php echo base_url().'gallery'?>" class="text-uppercase mx-auto btn btn-block btn-primary btn-colour-1 p-3 w-50">Lihat
                Galeri</a>
            </p>
        </div>
    </section>

    <!--Berita-->
    <section class="berita">
        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <h2 class="text-center">Berita</h2>

            <div class="row">
			
			
			<?php 
				foreach ($utama->result_array() as $r){
					$tgl = tgl_indo($r['tanggal']);	

            echo    "<div class='col-lg-4 col-md-4 mb-4'>
                    	<div class='card h-100'>";
								if ($r['gambar'] == ''){
									echo "<img width='100&' height='100' src='".base_url()."asset/foto_berita/small_no-image.jpg' alt='no-image.jpg' />";
								}else{
                                    echo "<img src='".base_url()."asset/foto_berita/$r[gambar]' alt='$r[gambar]' class='card-img-top' />";

								}
                           echo "<div class='card-body'>
								<div class='card-title'>
                                <h4 class='card-title'><a href='".base_url()."berita/detail/$r[judul_seo]' title='$r[judul]'>$r[judul]</a></h4>
                                <div class='card-text text-left pl-3'>
                                    <i class='fa fa-user pr-2'></i>Admin <i class='fa fa-calendar pl-2 pr-2'></i>$r[hari], $tgl, $r[jam] WIB
                                </div>
                            </div>
                       	    </div>
							
                   	 	</div>
					</div>";
				}
				?>	
			
            </div>
            <a href="<?php echo base_url().'berita'?>"
                class="text-uppercase btn btn-block btn-primary btn-colour-1 p-3 mb-5 w-50 mx-auto">Lihat
                Berita</a>
        </div>
    </section>

    <!--Testimoni-->
    <section class="testimoni">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-10 offset-1 mt-5">
                    <h2 class="text-center pb-2 text-uppercase"><strong>Testimoni</strong></h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">Abirafdi Darutama</strong>
                                </h5>
                                <p class="m-0 pt-3">"Salah satu wahana wisata baru di Kecamatan Kroya bahkan
                                    Kabupaten Cilacap yang tampak menjanjikan. Dengan konsep back to nature, wahana ini
                                    menawarkan hiburan alam berupa pemandangan sawah dan pepohonan jati. Wanarata
                                    menawarkan wahana yang memanfaatkan alam yang ada."</p>
                            </div>
                            <div class="carousel-item text-center">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">sekar andhini</strong>
                                </h5>
                                <p class="m-0 pt-3">"Ngga cuma siang aja yang asyik buat ngumpul, malem juga tetep enak
                                    buat
                                    nongkrong."</p>
                            </div>
                            <div class="carousel-item text-center">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">Emi Sukriani</strong>
                                </h5>
                                <p class="m-0 pt-3 text-white">"Rekomen untuk tempat wisata, cukup murah meriah tiket
                                    masuknya, spot fotonya juga ga kalah menarik."</p>
                            </div>
                            <div class="carousel-item text-center">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">Cipto Satriyanto</strong>
                                </h5>
                                <p class="m-0 pt-3 text-white">"Murah meriah buat momong anak2."</p>
                            </div>
                            <div class="carousel-item text-center">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">slamet achyadi</strong>
                                </h5>
                                <p class="m-0 pt-3 text-white">"Tempatnya bagus."</p>
                            </div>
                            <div class="carousel-item text-center">
                                <h5 class="mt-4 mb-0"><strong class="text-uppercase">Edi Setiyawan</strong>
                                </h5>
                                <p class="m-0 pt-3 text-white">"Murah meriah buat momong anak2."</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 bag1">
                        <h3>WANARATA</h3>
                        <p class="text-left">Wanarata adalah wisata yang dibangun dan dikelola oleh BUMDes
                            Karangmangu
                            sebagai rintisan
                            desa wisata yang memiliki tujuan unruk pemberdayaan masyarakat desa Karangmangu. Buka
                            dari
                            pukul 08.00 WIB sampai 17.00 WIB.</p>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 bag2">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker fa-lg pr-3"></i>Jl. Progo, Karangjambu,
                                Karangmangu, Kec. Kroya, Kabupaten Cilacap, Jawa Tengah 53282<br></li>
                            <li><i class="fa fa-phone fa-lg pr-3"></i>08121559518(Parno)<br></li>
                            <li><i class="fa fa-whatsapp fa-lg pr-3"></i>08121559518(Parno)<br></li>
                            <li><i class="fa fa-instagram fa-lg pr-3"></i>@wanarata_official</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 bag3">
                        <h5>MENU</h5>
                        <ul class="list-unstyled menulist">
                            <li class="my-1"><a href="<?php echo base_url().'main'?>">Home</a></li>
                            <li class="my-1"><a href="<?php echo base_url().'berita'?>">Berita</a></li>
                            <li class="my-1"><a href="<?php echo base_url().'paket'?>">Paket & Harga</a></li>
                            <li class="my-1"><a href="<?php echo base_url().'gallery'?>">Galeri</a></li>
                            <li class="my-1"><a href="<?php echo base_url().'about'?>">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=628121559518&text=Halo,%20Saya%20Mau%20Bertanya" target="_blank"
        class="float">
        <i class="fa fa-whatsapp fa-3x my-float"></i>
    </a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        $('.popup').click(function () {
            var src = $(this).attr('src');
            $('.modal').modal('show');
            $('#popup-img').attr('src', src);
        });
    </script>
    <?php $this->model_main->kunjungan(); ?>
	
	
</body>

</html>