<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
   $background_url = " asset/images/bgtentangkami.jpg ";
?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
	
	<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

    <title>Tentang</title>
</head>

<body>

    <header class="headtentang" style="background-image: url(<?php echo $background_url?>)">
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

        <div class="tekstentang">
            <h1>Tentang Kami</h1>
        </div>
    </header>

    <div class="container">
        <div class="infowanarata p-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 text-center mx-auto d-block">
                    <img src="<?php echo base_url(); ?>asset/images/imgtentangkami1.jpg" alt="" class="img-fluid m-2"
                        style="width: 100%; height: 300px; object-fit: cover;">
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-10 mt-3 pl-5">
                    <h2 class="text-left wanaratatitle pb-3">Wanarata</h2>
                    <p class="text-justify">Wanarata adalah wisata yang dibangun dan dikelola oleh BUMDes Karangmangu
                        sebagai rintisan desa
                        wisata yang memiliki tujuan untuk pemberdayaan masyarakat desa Karangmangu melalui wisata daerah
                        serta memajukan perekonomian masyarakat desa Karangmangu.</p>
                    <p class="text-justify">Wanarata adalah tempat wisata yang menawarkan nuansa pesawahan yang cocok
                        sebagai tempat
                        bersantai dengan teman atau keluarga.</p>
                </div>
            </div>
        </div>

        <div class="lokasi">
            <h2 class="text-left">Lokasi</h2>
            <p>Wanarata berada di Jl. Progo, Karangjambu, Karangmangu, Kec. Kroya, Kabupaten Cilacap,
                Jawa Tengah.</p>
            <div class="lokasiwanarata w-100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3697235334944!2d109.24889414599838!3d-7.643331044751191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e654153944701c3%3A0x56ae30fa77303fa3!2sWAHANA%20WISATA%20WANARATA!5e0!3m2!1sid!2sid!4v1594250721376!5m2!1sid!2sid"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>

        <div class="denah">
            <h2 class="text-left">Denah Lokasi</h2>

            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 mx-auto isidenah">
                <img src="img/n.png" alt="" class="n">
                
                    <img src="<?php echo base_url(); ?>asset/images/parkir.png" alt="" href="#" class="parkir" title="Parkir" data-toggle="popover"
                        data-placement="top" data-content="Tempat parkir wanarata" data-trigger="hover">
                
                <img src="<?php echo base_url(); ?>asset/images/loket.png" alt="" href="#" class="loket" title="Loket" data-toggle="popover"
                        data-placement="top" data-content="Tempat masuk wisata" data-trigger="hover">
                
                <a href="#gazebo"><img src="<?php echo base_url(); ?>asset/images/gazebo-sm.png" alt="" href="#" class="gazebo" title="Gazebo"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#rumahpohon"><img src="<?php echo base_url(); ?>asset/images/rumahpohon.png" alt="" href="#" class="rumahpohon" title="Gazebo"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#spotselfie"><img src="<?php echo base_url(); ?>asset/images/spotselfie.png" alt="" href="#" class="spotfoto1" title="Spot foto"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#gazebo"><img src="<?php echo base_url(); ?>asset/images/gazebo-sm.png" alt="" href="#" class="pendopo" title="Pendopo"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <img src="<?php echo base_url(); ?>asset/images/pool-sm.png" alt="" href="#" class="kolamrenang" title="Kolam renang anak"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                
                <a href="#spotfoto"><img src="<?php echo base_url(); ?>asset/images/spotselfie.png" alt="" href="#" class="spotfoto2" title="Spot foto"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#warung"><img src="<?php echo base_url(); ?>asset/images/food-sm.png" alt="" href="#" class="warung1" title="Warung"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
				<img src="<?php echo base_url(); ?>asset/images/mushola.png" alt="" href="#" class="mushola" title="Mushola"
                        data-toggle="popover" data-placement="top" data-content="Mushola/tempat ibadah"
                        data-trigger="hover">
                
                <img src="<?php echo base_url(); ?>asset/images/cafe.png" alt="" href="#" class="cafe" title="Cafe" data-toggle="popover"
                        data-placement="top" data-content="Klik untuk gambar/foto" data-trigger="hover">
                
                <a href="#warung"><img src="<?php echo base_url(); ?>asset/images/food-sm.png" alt="" href="#" class="warung2" title="Warung"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#flyingfox"><img src="<?php echo base_url(); ?>asset/images/flyingfox.png" alt="" class="flyingfox" href="#" title="Flying fox"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>
                <a href="#pintumasuk"><img src="<?php echo base_url(); ?>asset/images/pintubuka.png" class="pintumasuk" alt="" title="Pintu masuk"
                        data-toggle="popover" data-placement="top" data-content="Klik untuk gambar/foto"
                        data-trigger="hover">
                </a>

                <div class="garis1"></div>
                <div class="garis2"></div>
                <div class="garis3"></div>
                <div class="garis4"></div>
                <div class="garis5"></div>
                <div class="garis6"></div>
            </div>


        </div>

        <div class="gambardenah mx-auto">
            <div id="pintumasuk">
                <h4 class="my-5">Pintu Masuk</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk.jpeg" class="img-fluid"></div>
                    <ul class="thumb ol-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/pintumasuk.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/pintumasuk2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk2.jpeg"
                                    class="img-fluid"></a></li>
                        <li><a href="<?php echo base_url(); ?>asset/images/pintumasuk3.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk3.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/pintumasuk4.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk4.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/pintumasuk5.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/pintumasuk5.jpg"
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="flyingfox">
                <h4 class="my-5">Flying Fox</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox2"><img src="<?php echo base_url(); ?>asset/images/flyingfox.jpg" class="img-fluid"></div>
                    <ul class="thumb2 ol-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/flyingfox.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/flyingfox.jpg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/flyingfox2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/flyingfox2.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="warung">
                <h4 class="my-5">Warung</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox3"><img src="<?php echo base_url(); ?>asset/images/warung.jpg" class="img-fluid"></div>
                    <ul class="thumb3 ol-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/warung.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/warung.jpg" class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/warung2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/warung2.jpeg"
                                    class="img-fluid"></a></li>
                        <li><a href="<?php echo base_url(); ?>asset/images/warung3.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/warung3.jpeg" class="img-fluid">
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/warung4.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/warung4.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/warung5.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/warung5.jpg" class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="spotfoto">
                <h4 class="my-5">Spot Foto</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox4"><img src="<?php echo base_url(); ?>asset/images/spotfoto.jpg" class="img-fluid"></div>
                    <ul class="thumb4 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/spotfoto.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/spotfoto.jpg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/spotfoto2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/spotfoto2.jpeg"
                                    class="img-fluid"></a></li>
                        <li><a href="<?php echo base_url(); ?>asset/images/spotfoto3.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/spotfoto3.jpeg"
                                    class="img-fluid">
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/spotfoto4.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/spotfoto4.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/spotfoto5.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/spotfoto5.jpeg"
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="rumahpohon">
                <h4 class="my-5">Rumah Pohon</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox5"><img src="<?php echo base_url(); ?>asset/images/rumahpohon.jpg" class="img-fluid"></div>
                    <ul class="thumb5 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/rumahpohon.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/rumahpohon.jpg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/rumahpohon2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/rumahpohon2.jpeg"
                                    class="img-fluid"></a></li>
                        <li><a href="<?php echo base_url(); ?>asset/images/rumahpohon3.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/rumahpohon3.jpeg"
                                    class="img-fluid">
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/rumahpohon4.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/rumahpohon4.jpeg"
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="gazebo">
                <h4 class="my-5">Gazebo</h4>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                    <div class="imgBox6"><img src="<?php echo base_url(); ?>asset/images/gazebo.jpg" class="img-fluid"></div>
                    <ul class="thumb6 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <li><a href="<?php echo base_url(); ?>asset/images/gazebo.jpg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/gazebo.jpg" class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/gazebo2.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/gazebo2.jpeg"
                                    class="img-fluid"></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/gazebo3.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/gazebo3.jpeg" class="img-fluid">
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/images/gazebo4.jpeg" target="imgBox"><img src="<?php echo base_url(); ?>asset/images/gazebo4.jpeg"
                                    class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=628121559518&text=Halo,%20Saya%20Mau%20Bertanya" target="_blank"
        class="float">
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


    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>


    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.thumb a').click(function (e) {
                e.preventDefault();
                $('.imgBox img').attr("src", $(this).attr("href"));
            })
        })
		
		$(document).ready(function () {
            $('.thumb2 a').click(function (e) {
                e.preventDefault();
                $('.imgBox2 img').attr("src", $(this).attr("href"));
            })
        })
		
		$(document).ready(function () {
            $('.thumb3 a').click(function (e) {
                e.preventDefault();
                $('.imgBox3 img').attr("src", $(this).attr("href"));
            })
        })
		
		$(document).ready(function () {
            $('.thumb4 a').click(function (e) {
                e.preventDefault();
                $('.imgBox4 img').attr("src", $(this).attr("href"));
            })
        })
		
		$(document).ready(function () {
            $('.thumb5 a').click(function (e) {
                e.preventDefault();
                $('.imgBox5 img').attr("src", $(this).attr("href"));
            })
        })
		
		$(document).ready(function () {
            $('.thumb6 a').click(function (e) {
                e.preventDefault();
                $('.imgBox6 img').attr("src", $(this).attr("href"));
            })
        })
		
    </script>

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