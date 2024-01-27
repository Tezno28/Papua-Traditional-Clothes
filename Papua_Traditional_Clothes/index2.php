<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<!-- My Style -->
<link rel="stylesheet" href="css/style.css">

<!-- Responsive Style -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Logo Title Bar -->
<link rel="icon" href="img/image/cpt (1).png" type="image/x-icon">



    <title>PAPUA TRADITIONAL CLOTHES</title>
  </head>
  <body>
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/image/logo ptc.png " alt="" width="30" class="d-inline-block align-text-top me-3">
          Papua Traditional Clothes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
              <a class="nav-link" aria-current="page" href="#hero">BERANDA</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#layanan">LAYANAN</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#model">MODEL</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#contact">KONTAK</a>
            </li>
          </ul>
          <a href="index.php"><button class="button-primary">logout</button></a>
        </div>
      </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- Your custom JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    function scrollToSection(elementId) {
      const targetElement = document.getElementById(elementId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - document.querySelector('.navbar').offsetHeight,
          behavior: 'smooth'
        });
      }
    }

    const links = document.querySelectorAll('.nav-link');

    links.forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        scrollToSection(targetId);
      });
    });
  });
</script>


    <!-- Hero Section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 hero-tagline my-auto">
            <h1>Membantu Temukan 
              Pakaian Adat Tradisional Papua.</h1>
              <p><span class="fw-bold">Pakaian Tradisional Papua</span> hadir untuk temukan Pakaian Adat terbaik
                untukmu, untuk di jual ataupun di sewa dari sumber 
                terpercaya.</p>

                <button class="button-lg-primary">Temukan Clothes</button>
                <a href="#pakaian">
                  <img src="img/image/arrowtemukan.png" alt="">
                </a>
          </div>
        </div>

        <img src="img/image/image 21.png" alt="" class="position-absolute end-0 bottom-0">
      </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Layanan Kami</h2>
            <span>Papua Traditional Clothes hadir menjadi solusi bagi kamu</span>
          </div>
        </div>

       <div class="row mt-5">
            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="img/image/Clothes.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Pakaian Tradisional Baru</h3>
                <p class="mt-4">Pakaian Tradisional Papua kini menyediakan barang baru, Beli 
                  Pakaian baru dengan kualitas terbaik.</p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="img/image/Clothes.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Sewa Pakaian</h3>
                <p class="mt-4">Sewa Pakaian Adat yang indah untuk 
                  anda, pilihan terbaik untuk kamu ada disini.</p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <div class="card-layanan">
                <div class="circle-icon position-relative mx-auto">
                  <img src="img/image/Clothes.png" alt="" class="position-absolute top-50 start-50 translate-middle">
                </div>
                <h3 class="mt-4">Beli Pakaian</h3>
                <p class="mt-4">Beli Pakaian Adat menarik dengan harga 
                  terbaik, kualitas terjamin dari sumber 
                  terpercaya.</p>
              </div>
            </div>
      </div>
      </div>
    </section>

    <!-- Search Section -->
    <section id="search" class="d-flex align-items-center" class="text-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-1 text-center">
            <h2 class="mb-1">
              Temukan Pakaian Adat Untuk Mu
            </h2>

            <p>sekarang Anda dapat memesan, Pakaian Adat Tradisional secara cepat
              Pakaian Khas dari papua yang memiliki Kualitas terbaik dan Alami
              Cek it Out segera
            </p>
          </div>
          

          <div class="col-10 align-items-center mx-auto mt-4">

            </div>

            </div>
          </div>

        </div>
      </div>

    </section>

    <!-- Pakaian Section -->

    <section id="pakaian">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center mb-2">
            <h2>Pakaian Untuk Mu</h2>
          </div>
        </div>

        <div class="row">
          <div class="d-flex justify-align-bottom">
            <div class="d-flex justify-align-between px-2">
              <div class="col-4 mb-5 align-items-center mx-2">
                <div class="card p-2" style="width: 22rem;">
                  <img src="img/image/bajuadat2.png" alt="">
                <div class="card-body"><a href="pemesanan&pembayaran.php">lihat</a>
                  <h4>IDR.400.000.000</h4>
                  <p class="mb-4">Jl. Basuki Rahmat KM 9,5 <br> <span class="text-danger">Sewa</span></p>
                </div>
              </div>
            </div>
          </div>
            <div class="col-4 mb-5 align-items-center">
              <div class="card p-2" style="width: 22rem;">
                <img src="img/image/home image.png" alt="">
                <div class="card-body"><a href="pemesanan2.php">lihat</a>
                  <h4>IDR.400.000.000</h4>
                  <p class="mb-4">Jl. Basuki Rahmat KM. 7 (Depan Bandara DEO) <br> <span class="text-danger">Jual</span></p>
                </div>
              </div>
            </div>
            <div class="col-4 mb-5 align-items-center">
              <div class="card p-2" style="width: 22rem;">
                <img src="img/image/bajuadat7.jpeg" alt="">
                <div class="card-body"><a href="pemesanan3.php">lihat</a>
                  <h4>IDR.200.000.000</h4>
                  <p class="mb-4">Jl. Basuki Rahmat KM 9,5 <br> <span class="text-danger">Sewa</span></p>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-align-bottom">
          <div class="d-flex justify-align-between px-2">
          <div class="col-4 mb-6 align-items-center mx-2">
            <div class="card p-2" style="width: 20rem;">
              <img src="img/image/bajuadat9.jpeg" alt="">
              <div class="card-body"><a href="pemesanan4.php">lihat</a>
                <h4>IDR.200.000.000</h4>
                <p class="mb-4">Jl. Basuki Rahmat KM 9,5 <br> <span class="text-danger">Sewa</span></p>
              </div>
            </div>
          </div>
          </div>
          <div class="col-4 mb-5 align-items-center">
            <div class="card p-2" style="width: 20rem;">
              <img src="img/image/bajuadat10.jpeg" alt="">
              <div class="card-body"><a href="pemesanan5.php">lihat</a>
                <h4>IDR.200.000.000</h4>
                <p class="mb-4">Jl. Basuki Rahmat KM 9,5 <br> <span class="text-danger">Sewa</span></p>
              </div>
            </div>
          </div>
          <div class="col-4 mb-5 align-items-center">
            <div class="card p-2" style="width: 22rem;">
              <img src="img/image/bajuadat14.jpeg" alt="">
              <div class="card-body"><a href="pemesanan6.php">lihat</a>
                <h4>IDR.200.000.000</h4>
                <p class="mb-4">Jl. Basuki Rahmat KM 9,5 <br> <span class="text-danger">Sewa</span></p>
              </div>
            </div>
          </div>
          </div>

          </div>
        </div>

      </section>

    <!-- Model Section -->
    <section id="model" class="mt-5 overflow-hidden">
      <div class="container">
        <div class="row mb-4">
          <div class="col-9 fitur">
            Model Pakaian
          </div>
          <div class="col-3">
            <button class="button-fitur">Lihat Semua..
              <a href="lihatsemuapakaian.php"><img src="img/image/arrowlihatsemua.png" alt="" class="ms-4"></a>
            </button>
          </div>
        </div>

        <div class="container position-relative mt-5 ">
          <div class="row"> 
            <div class="col-12 d-flex justify-content-start">
              <div class="card-fitur me-4 position-relative">
                <img src="img/image/gambarfitur1.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Rumbai-Rumbai
                    </h5>
                    <span>Ukuran Sedang</span>
                    <h6>IDR.300.000,00</h6>
                    <button>Lihat Pakaian</button>
                  </div> 
                </div>
              </div>
              <div class="card-fitur me-4 position-relative">
                <img src="img/image/bajuadat17.jpg" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Koteka
                    </h5>
                    <span>Ukuran Sedang</span>
                    <h6>IDR.300.000,00</h6>
                    <button>Lihat Pakaian</button>
                  </div> 
                </div>
              </div>
              <div class="card-fitur me-4 position-relative">
                <img src="img/image/bajunmr3.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Baju Sali
                    </h5>
                    <span>Ukuran Sedang</span>
                    <h6>IDR.300.000,00</h6>
                    <button>Lihat Pakaian</button>
                  </div> 
                </div>
              </div>
              <div class="card-fitur me-4 position-relative">
                <img src="img/image/bajunmr4.png" alt="">

                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                  <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                    <h5>
                      Baju Kurung
                    </h5>
                    <span>Ukuran Sedang</span>
                    <h6>IDR.300.000,00</h6>
                    <button>Lihat Pakaian</button>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y">
        <img src="img/image/arrowkoteka1.png" alt="">
      </button> 
  
      <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y">
        <img src="img/image/arrowkoteka2.png" alt="">
      </button>
    </div>
      </div>
    </div>
      </div>
    </section>

    <script>
      // Fungsi untuk melakukan pergeseran ke kiri
      function shiftLeft() {
        var container = document.getElementById('model');
        container.scrollLeft -= 200; // Sesuaikan nilai pergeseran horizontal yang diinginkan
      }
    
      // Fungsi untuk melakukan pergeseran ke kanan
      function shiftRight() {
        var container = document.getElementById('model');
        container.scrollLeft += 200; // Sesuaikan nilai pergeseran horizontal yang diinginkan
      }
    
      // Menambahkan event listener untuk tombol kiri
      document.querySelector('.button-arrow-left').addEventListener('click', shiftLeft);
    
      // Menambahkan event listener untuk tombol kanan
      document.querySelector('.button-arrow-right').addEventListener('click', shiftRight);
    </script>
    
    

    <section id="contact">
      <div class="container-fluid overlay h-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Butuh Konsultasi..? 
                Silahkan kontak kami
                Kami Siap Membantu</h3>
                <div class="kontak">
                  <h6>Kontak</h6>
                  <div class="mb-3">
                    <img src="img/image/logoalamat.png" alt="">
                    <a href="">Jl. Selat Obi KM. 9</a>
                  </div>

                  <div class="mb-3">
                    <img src="img/image/logoWhatsapp.png" alt="">
                    <a href="#">082397032639</a>
                  </div>

                  <div class="mb-3">
                    <img src="img/image/logopesan.png" alt="">
                    <a href="">PapuaTraditionalClothes@gmail.com</a>
                  </div>

                  <h6>Social Media</h6>
                  <a href="#"><img src="img/image/logofb.png" alt=""></a>
                  <a href="#"><img src="img/image/logoig.png" alt=""></a>
                  <a href="#" class="linkptc">Papua Traditional Clothes</a>
                </div>
            </div>

            <div class="col-md-6">
              <div class="card-contact w-100">
                  <h2>ada pertanyaan..?</h2>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput" class="d-flex align-items-center">Pertanyaan Anda..</label>
                  </div>

                  <button type="submit" class="button-kontak">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <footer class="d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex justify-items-center">
            <img src="img/image/logo ptc.png" alt="">
            <a href="#">Papua Traditional Clothes</a>
          </div>
          <div class="col-md-5 d-flex justify-content-evenly">
            <a href="#hero">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#model">Model</a>
            <a href="#kontak">Kontak</a>
            <a href="masuk.html">Masuk</a>
          </div>
        </div>
        <div class="row position-absolute Copyright start-50 translate-middle">
          <div class="col-12">
            <p>Copyright by Esoki Sound System and Programming All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
                                                                                                                     
  
  <script src="js/script.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>