<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <!-- css -->
		<link rel="stylesheet" href="css/style.css">
    <title>UD.EvA | ourstory</title>
  </head>
  <body>

    <!-- tombol link ke Whatsapp -->
    <div href="https://api.whatsapp.com/send?phone=6282302014339">
        <img src="https://hantamo.com/free/whatsapp.svg" alt="" style="position:fixed;left:30px;bottom:35px;z-index:99999; width:50px;">
      </a>
      </div>

    <!-- tombol sroll up -->
    <button class="rounded-circle" onclick="topFunction()" id="myBtn" title="Go to top" style="width: 60px; height:60px;"><img src="image/top.JPG" class="rounded-circle" style="width: 50px; height:50px;"></button>
    <script>
      //Get the button:
      mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }
    </script>


   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">EvA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">Home</span></a>
          <a class="nav-item nav-link" href="#contact">Contact Us</a>
          <a class="nav-item btn btn-primary tombol" href="login.php">Login</a>
          </div>
      </div>
    </div>
  </nav>
   <!-- akhir Navbar -->

     <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid" style="background-image:url(image/jumbotron.jpg);background-size: cover;">
    <div class="container" >
      <h1 class="display-4">We only make <span>the best</span> products </br>for your<span> convenience</span> </h1>
      <a href="https://linkr.bio/eyn.flowers" class="btn btn-primary tombol">Our Work</a>
    </div>
  </div>
  <!-- akhirjumbotron -->

    <!--  info panel -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="image/employee.png" alt="employee" class="float-left"></br>
            <h4>Fast Respon</h4>
            <p>tanggapan yang cepat</p>
          </div>
          <div class="col-lg">
            <img src="image/ramah.png" alt="ramah" class="float-left"></br>
            <h4>Ramah</h4>
            <p>pelayanan yang ramah</p>
          </div>
          <div class="col-lg">
            <img src="image/promo.png" alt="promo" class="float-left"></br>
            <h4>spesial event</h4>
            <p>Berbagai promo event</p>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <!-- akhir panel -->

  <!-- our story-->
  <div class="container-fluid" id="ourstory">
    <div class="row ourstory">
      <div class="col-lg">
        <img src="image/ourstory.jpg" alt="ourstory" class="img-fluid">
      </div>
      <div class="col-lg">
        <h3>our <span>story</span> the <span>UD.EvA</span></h3>
        <p>UD. EVA adalah IKM asal Situbomdo yg bergerak dibidang kerajinan rajut, flanel dan Olahan Singkong. adapun kerajinan rajut yg diproduksi Oleh UD. EVA berfokus pada konektor rajut dan strip masker rajut. Mengingat pentingnya masker untuk digunakan pada zaman sekarang ini untuk menjaga kesehatan. UD. Eva memproduksi konektor dan strip maskr untuk memudahkan para hijaber saat memakai masker agar tetap modis. Produk lainnya yaitu berbagai kerajinan bunga dari kain flanel, amplop dan tempat permen.</br>
      </div>
    </div>
  </div>
    </br>
  <div class="container-fluid" id="ourstory">
    <div class="row ourstory">
        <div class="col-lg">
            <p>UD. EVA adalah IKM asal Situbomdo yg bergerak dibidang kerajinan rajut, flanel dan Olahan Singkong. adapun kerajinan rajut yg diproduksi Oleh UD. EVA berfokus pada konektor rajut dan strip masker rajut. Mengingat pentingnya masker untuk digunakan pada zaman sekarang ini untuk menjaga kesehatan. UD. Eva memproduksi konektor dan strip maskr untuk memudahkan para hijaber saat memakai masker agar tetap modis. Produk lainnya yaitu berbagai kerajinan bunga dari kain flanel, amplop dan tempat permen.</br>
        </div>
        <div class="col-lg">
          <img src="image/keripik.jpg" alt="keripik" class="img-fluid">
        </div>
    </div>
  </div>



  <!-- contact us -->
  <div class="container-fluid" id="contact" >
    <div class="row contact">
      <div class="col-sm">
        <h3>HEAD OFFICE</h3>
        <p><strong>Address:</strong> Sumbermalang, Besuki, Situbondo</p>
          <p><strong>WhatsApp:</strong> <span>+6282302014339</span></p>
          <p><strong>IG:</strong> <span>eyn_flowers</span></p>
          <p><strong>Shopee:</strong> <span>eyn_flowers</span></p>
      </div>
      <div class="col-sm">
        <h3>Operational Hours</h3>
        <p>(GMT+7 Jakarta Time)</p>
        <p><strong>store & delivery: </strong> <span>Monday - sunday 08.00 - 21.00</span></p>
          <p><strong>customer servies :</strong> <span>Monday - sunday 07.15 - 19.00</span></p>
          <p><strong>our office :</strong> <span>Monday - sunday 08.00 - 18.00</span></p>
      </div>
    </div>
  </div>
  <!-- copyrigth -->
  <div class="container-fluid alert-dark " role="alert">
    <div class="copyright align-items-center">
        <div class="float-left">
            <p>made with situbondo.</p>
        </div>

        <div class="float-right">
            <p>Copyright &copy2021 UD.EvA</p>
        </div>
    </div>
  </div>
  <!-- akhir copyright -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>