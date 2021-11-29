<?php

//mengecek dan endapatkan data session
require_once("session_check.php")
?>
<!DOCTYPE TYPE>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD.EVA</title>
           <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css" /> -->

    </head>

    <body>  
    <!-- bagian side bar
    <input type="checkbox" id="check">
        <div class="side-bar">
            <ul>
                <li><a href="#" target="_blank">Tugas1</a></li>
                <li><a href="#" target="_blank">Tugas2</a></li>
                <li><a href="#" target="_blank">Tugas3</a></li>
                <li><a href="#" target="_blank">Tugas4</a></li>
                <li><a href="#" target="_blank">Tugas5</a></li>
                <li><a href="#" target="_blank">Tugas6</a></li>
            </ul>
        </div> -->


       
        <!-- tombol link ke Whatsapp -->

        <div style="position:fixed;left:20px;bottom:20px;z-index:99999;">
        <a href="https://wa.widget.web.id/8ba283" target="_blank"><img src="https://wa.widget.web.id/assets/img/tombol-wa.png"></a>
<!-- <a href="https://api.whatsapp.com/send?phone=+6289637800056&text=Halo">
<button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px"> -->
<!-- <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png">  -->
<!-- Whatsapp Kami</button> -->
</div>

<!--logo-->

<div class="wrapper-logo">
    <div class="container-logo">
    <img src="image/logo.jpg" alt="" class="rounded mx-auto d-block" width="100px" height="100px"  >

    </div>
</div>
<!--navbar-->
<ul class="nav justify-content-center navbar-light  fixed">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#carouselExampleIndicators">home</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Product</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#wrapper-masker">Konektor Masker Rajut</a></li>
      <li><a class="dropdown-item" href="#">Keripik singong</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#product">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#promo">Promo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#contact">contact</a>
  </li>
</ul>
<!-- navbarcollapse -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  <li class="nav-item">
      <a class="nav-link" aria-current="page" href="index.php"></a>
    </li>

  <?php if($sessionStatus == false) : ?>
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="login.php">Login</a>
    </li>

    <?php else : ?>
      <li class="nav-item">
      <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
    </li>

      <?php endif; ?>
  </ul>
</div>
<!--corousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--bagian product-->
<div class="wrapper-signature" id="product">
    <div class="text-signature">
        <h1>Our Product</h1>
    <div>
    <div class="text-signature1">
        <p>keripik singkong dan masker rajut</p>
    <div>

    <div class="signature">
        <div class="sign">
            <img src="image/2.jpg" alt="">
            <h2>keripik singkong ori</h2>
            <p>4-in-1 chocolate-chose goodness of our timeless classic flawor: Tiramisu, black forest, red velved,vanilla</p>
            <p class="price">price Rp.40.000</p>
            <a href="" class="buy">Buy</a>
        </div>
        <div class="sign">
            <img src="image/5.jpg" alt="">
            <h2>keripik singkong pedas</h2>
            <p>4-in-1 cheese-chose goodness of our timeless classic flawor: Tiramisu, black forest, red velved,vanilla</p>
            <p class="price">price Rp.40.000</p>
            <a href="" class="buy">Buy</a>
        </div>
        <div class="sign">
            <img src="image/8.jpg" alt="">
            <h2>keripik singkong asin</h2>
            <p>4-in-1 greentea-chose goodness of our timeless classic flawor: Tiramisu, black forest, red velved,vanilla</p>
            <p class="price">price Rp.40.000</p>
            <a href="" class="buy">Buy</a>
        </div>
    </div>
</div>
<!-- bagian our story -->

<div class="card mb-3" style="height: 450px; margin:auto; margin-left:20px;margin-right: 20px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/2.jpg" class="img-fluid rounded-start" style="width: 400px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title">Our Story</h1>
        <p class="card-text"></br></br> is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">read more</small></p>
      </div>
    </div>
  </div>
</div>

<!-- bagian product keripik
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="image/2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">keripik</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
      <a href="#" class="buy">Buy</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="image/5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
      <a href="#" class="buy">Buy</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="image/8.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
      <a href="#" class="buy">Buy</a>
      </div>
    </div>
  </div>
</div> -->
<!--bagian masker-->
<div class="wrapper-masker">
    <h2> UD.EVA<br>Masker rajut </h2>
    <div class="logo-masker">
        <ul>
            <li class="gift"><img src="image/2.jpg" alt=""><p><strong>masker rajut polos</strong></p><h4 class="price">price Rp.6.000</h4>
            <a href="" class="buy">Buy</a></li>
            <li class="gift"><img src="image/3.jpg" alt=""><p><strong>masker rajut bulat</strong></p><h4 class="price">price Rp.8.000</h4>
            <a href="" class="buy">Buy</a></li>
            <li class="gift"><img src="image/4.jpg" alt=""><p><strong>masker rajut bunga 1</strong></p><h4 class="price">price Rp.10.000</h4>
            <a href="" class="buy">Buy</a></li>
            <li class="gift"><img src="image/5.jpg" alt=""><p><strong>masker rajut bunga 2</strong></p><h4 class="price">price Rp.12.000</h4>
            <a href="" class="buy">Buy</a></li>
            <li class="gift"><img src="image/6.jpg" alt=""><p><strong>masker rajut bunga 3</strong></p><h4 class="price">price Rp.15.000</h4>
            <a href="" class="buy">Buy</a></li>
        </ul>
    </div>
</div>

<!-- bagian Promo-->
    <div class="wrapper-promo" id="promo">
        <h2>Our Promo</h2>
        <div class="promo">
            <ul>
                <li>
                    <img src="image/carousel1.jpg" alt="">
                    <h3>Promo bank BNI</h3>
                    <p><strong>Promo</strong>until 20 desember 2021</p>
                    <p class="text"> kabar gembira untuk kamu pemegang kartu BNI! dapatkan promo diskon 10% (min pembelian 100k dengan...</p>
                    <a href="">Read more</a>
                </li>
                <li>
                    <img src="image/carousel2.jpg" alt="">
                    <h3>Anna End of Year Surprise!</h3>
                    <p><strong>Promo</strong>until 1 january 2022</p>
                    <p class="text">Lengkapi perayaan akhir tahunmu dengan almond crispy dari UD.EVA dan nikmati diskon 20% dengan kode promo : bye2021 untuk...</p>
                    <a href="">Read more</a>
                </li>
                <li>
                    <img src="image/carousel3.jpg" alt="">
                    <h3>ramdhan Bliss</h3>
                    <p><strong>Promo</strong>until 18 juni 2022</p>
                    <p class="text"> enjoy our finest creations only on this ramadahn, make sure to mark your calendar, because this is the festive that you...</p>
                    <a href="">Read more</a>
                </li>
            </ul>
        </div>
    </div>
    
    <!--bagian about-->
    <div class="wrapper-est" id="about">
        <div class="content">
            <h2>UD.EVA</h2>
            <p>Almond krispy terbuat dari bahan bahan premium, di proses dengan sangat hati hati karena sangat renyah,  targer market saya adalah masyarakat  perkotaan, dan value almond krispy saya adalah kemasannya bisa di buka tutup (kedap udara) 
                dan tampilan yang transparan dengan harua yang bersaing.</p>
        </div>
    </div>
<!-- bagian About -->
    <div class="wrapper-est" id="about">
        <div class="content">
        <h2>UD. EVA</h2>
        <p>Almond krispy terbuat dari bahan bahan premium, di proses dengan sangat hati hati karena sangat renyah,  targer market saya adalah masyarakat  perkotaan, dan value almond krispy saya adalah kemasannya bisa di buka tutup (kedap udara) 
                dan tampilan yang transparan dengan harua yang bersaing.</p>
        </div>
    </div>

    <!-- bagian contact-us -->
    <div class="wrapper-store" id="contact">
        <div class="content1">
            <h2><i class="fas fa-store"></i>Operational Hours</h2>
            <p>(GMT+7 Jakarta Time)</p>
        </div>
        <div class="content2">
            <h2>store & delivery <p>Monday - sunday 08.00 - 21.00</p></h2>
            <h2>customer servies <p>Monday - sunday 07.15 - 19.00</p></h2>
            <h2>our office <p>Monday - sunday 08.00 - 18.00</p></h2>
        </div>
    </div>

    <div class="wrapper-best">
        <div class="content3">
            <h2>situbondo's best online </h2>
            <p>
            Almond krispy terbuat dari bahan bahan premium, di proses dengan sangat hati hati karena sangat renyah,  targer market saya adalah masyarakat  perkotaan, dan value almond krispy saya adalah kemasannya bisa di buka tutup (kedap udara) 
                dan tampilan yang transparan dengan harua yang bersaing.<br>
                contact us:+6280123456789 <br>Email: ahmadmishter22@gmail.com<br>
                (mimbaan, panji , situbondo)</p>
        </div>
    </div>

    <!-- bagian footer -->
    <div class="wrapper-footer">
        <div class="footer">
            <p>made with  & from situbondo.</p>
        </div>

        <div class="copyright">
            <p>Copyright &copy2021 UD. EVA</p>
        </div>
    </div>
 </div>
      <!-- tombol scrol up go to top -->
    </body>     
</html>