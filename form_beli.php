<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Furnish - Furniture and Decor Website Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#showcase">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#">Login</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <section id="home" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">FORM PEMESANAN</h5>
                        <p>SILAHKAN ISI DATA KAMU DISINI KEMUDIAN JANGAN LUPA UNTUK SELESAIKAN PEMBAYARANMU</p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-left mt-45">
                        <div class="services">
                        <form method="POST" action="proses_beli.php">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                    <div class="col-8">
                                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
                                    <div class="col-8">
                                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
                                    <div class="col-8">
                                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_hp" class="col-4 col-form-label">No Hp</label> 
                                    <div class="col-8">
                                    <input id="no_hp" name="no_hp" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                    <div class="col-8">
                                    <input id="email" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                    <div class="col-8">
                                    <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                                    </div>
                                </div> 
                                 <div class="form-group row">
                                    <label for="deskripsi" class="col-4 col-form-label">ID produk</label> 
                                    <div class="col-8">
                                    <input id="produk_id" name="produk_id" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>  
                        </div> <!-- services btn -->
                    </div> <!-- services left -->
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <?php include_once('footer.php'); ?>