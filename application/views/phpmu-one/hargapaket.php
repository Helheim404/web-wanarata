<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
   $background_url = " asset/images/bgharga.jpg ";
?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

    <title>Paket & Harga</title>
</head>

<body>

    <header class="headhargapaket" style="background-image: url(<?php echo $background_url?>)">
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

        <div class="tekshargapaket">
            <h1>Harga & Paket</h1>
        </div>
    </header>

    <div class="container">
        <div class="harga">
            <h2 class="text-center">Harga</h2>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="hargatext">
                            <h3 class="card-title">Flying Fox</h3>
                        </div>
                        <p class="card-text price">Rp 15.000</p>
                        <div class="keterangan">
                            <div class="row">
                                <div class="icon text-right">
                                    <i class="fa fa-check-square pr-2"></i>
                                </div>
                                <div class="texticon text-left">
                                    <p class="card-text">Mengakses flying fox</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body text-center">
                        <div class="hargatext">
                            <h3 class="card-title">Tiket Masuk</h3>
                        </div>
                        <p class="card-text price">Rp 5.000</p>
                        <div class="keterangan">
                            <div class="row">
                                <div class="icon text-right">
                                    <i class="fa fa-check-square pr-2"></i>
                                </div>
                                <div class="texticon text-left">
                                    <p class="card-text">Mengakses seluruh tempat kecuali flying fox dan kolam renang
                                        anak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body text-center">
                        <div class="hargatext">
                            <h3 class="card-title">Kolam Renang Anak</h3>
                        </div>
                        <p class="card-text price">Rp 5.000</p>
                        <div class="keterangan">
                            <div class="row">
                                <div class="icon text-right">
                                    <i class="fa fa-check-square pr-2"></i>
                                </div>
                                <div class="texticon text-left">
                                    <p class="card-text">Mengakses kolam renang anak</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="paket py-5" id="paket">
            <div class="container">
                <h2 class="text-center">Paket</h2>
                <section class="row">
                    <!-- Free Tier -->
                    <div class="col-lg-4 mx-auto">
                        <div class="card mb-5 mb-lg-0 h-100">
                            <div class="card-body">
                                <h2 class="card-title text-uppercase text-center py-2">Outbond</h2>
                                <h5 class="card-title text-muted text-uppercase text-center">Mulai Dari</h5>
                                <h6 class="card-price text-center">Rp 15.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Tiket Masuk</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Playing ground (flying
                                        fox, permainan hoolahop, meniti
                                        tali, jembatan goyang, menanam padi<sup>*</sup>)</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1 atau 2 instruktur
                                    </li>
                                </ul>
                                <p class="card-text text-left note pl-2"><sup>*</sup> Tergantung musim</p>
                                <a href="https://api.whatsapp.com/send?phone=628121559518&text=Halo,%20Saya%20mau%20memesan%20paket%20outbond"
                                    target="_blank" class="btn btn-block btn-primary text-uppercase mt-4 mb-2">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <!-- Plus Tier -->
                    <div class="col-lg-4 mx-auto">
                        <div class="card mb-5 mb-lg-0 h-100">
                            <div class="card-body">
                                <h2 class="card-title text-uppercase text-center py-2">Community Gathering</h2>
                                <h5 class="card-title text-muted text-uppercase text-center">Mulai Dari</h5>
                                <h6 class="card-price text-center">Rp 30.000</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Tiket Masuk</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Sewa saung</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Menu menyesuaikan pesanan.<br> Menu makanan : Mie
                                        rebus / goreng,
                                        soto, bakso, pecel, mendoan, dan lain-lain<sup>*</sup>
                                    </li>
                                </ul>
                                <p class="card-text text-left note pl-2"><sup>*</sup> Menu makanan bisa dinegosiasikan
                                    terlebih dahulu</p>
                                <a href="https://api.whatsapp.com/send?phone=628121559518&text=Halo,%20Saya%20mau%20memesan%20paket%20community%20gathering"
                                    target="_blank" class="btn btn-block btn-primary text-uppercase mt-4 mb-2">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
	
	<a href="https://api.whatsapp.com/send?phone=628121559518&text=Halo,%20Saya%20Mau%20Bertanya" target="_blank" class="float">
        <i class="fa fa-whatsapp fa-3x my-float"></i>
    </a>

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>