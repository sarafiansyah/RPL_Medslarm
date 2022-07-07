<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  <div class="mainbg1" id="home">

    <?php include("fw/nav-main.php") ?>
    <div class="container justify-content-center mx-auto text-center">

      <div data-aos="fade-up" data-aos-duration="2000">
        <div style="width: 600px; float: left; padding-top: 100px; padding-left: 100px; padding-right: 20px; text-align: left;">
          <h1 clas=" text-center mx-auto text-light" style="font-size: 44px; color: white; "><b>No Meds Left Behind</b></h1>
          <p style="font-size: 24px; color: white; ">Any medicines forgotten? How much pills to take? Remind yourself with Medslarm! </p>
          <a class="btn  btn-outline-light rounded-pill mr-auto" href="public-signUp.php" role="button">Sign Up</a>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="2000">
        <img src="images/index-img01.png" class="img-fluid" style="width: 400px; height:400px;" alt="...">
      </div>
    </div>

  </div>
  <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#0099ff" fill-opacity="1" d="M0,32L80,53.3C160,75,320,117,480,112C640,107,800,53,960,32C1120,11,1280,21,1360,26.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
</svg> -->
  <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(0, 153, 255, 1)" offset="0%"></stop>
        <stop stop-color="rgba(0, 153, 255, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,50L30,56.7C60,63,120,77,180,70C240,63,300,37,360,36.7C420,37,480,63,540,75C600,87,660,83,720,76.7C780,70,840,60,900,46.7C960,33,1020,17,1080,18.3C1140,20,1200,40,1260,46.7C1320,53,1380,47,1440,46.7C1500,47,1560,53,1620,48.3C1680,43,1740,27,1800,21.7C1860,17,1920,23,1980,35C2040,47,2100,63,2160,65C2220,67,2280,53,2340,48.3C2400,43,2460,47,2520,53.3C2580,60,2640,70,2700,65C2760,60,2820,40,2880,33.3C2940,27,3000,33,3060,45C3120,57,3180,73,3240,78.3C3300,83,3360,77,3420,73.3C3480,70,3540,70,3600,60C3660,50,3720,30,3780,30C3840,30,3900,50,3960,63.3C4020,77,4080,83,4140,76.7C4200,70,4260,50,4290,40L4320,30L4320,100L4290,100C4260,100,4200,100,4140,100C4080,100,4020,100,3960,100C3900,100,3840,100,3780,100C3720,100,3660,100,3600,100C3540,100,3480,100,3420,100C3360,100,3300,100,3240,100C3180,100,3120,100,3060,100C3000,100,2940,100,2880,100C2820,100,2760,100,2700,100C2640,100,2580,100,2520,100C2460,100,2400,100,2340,100C2280,100,2220,100,2160,100C2100,100,2040,100,1980,100C1920,100,1860,100,1800,100C1740,100,1680,100,1620,100C1560,100,1500,100,1440,100C1380,100,1320,100,1260,100C1200,100,1140,100,1080,100C1020,100,960,100,900,100C840,100,780,100,720,100C660,100,600,100,540,100C480,100,420,100,360,100C300,100,240,100,180,100C120,100,60,100,30,100L0,100Z"></path>
  </svg>

  <div class="mainbg0" id="about" style="padding-top: 50px; padding-bottom: 100px;">

    <div class="container mx-auto text-center">
      <div data-aos="fade-up" data-aos-duration="2000">
        <h1 clas=" text-center mx-auto text-light" style="font-size: 44px; color: #0099ff; text-align: center;"><b><i class="fa-solid fa-calendar-check"></i> About Us</b></h1>
        <hr class="mx-auto" style="border: 4px solid #0099ff; border-radius: 5px; width: 400px; text-align: center;">
      </div>
      <div data-aos="fade-up" data-aos-duration="2000">
        <div class="d-flex justify-content-center mx-auto">
          <div> <img src="http://simpleicon.com/wp-content/uploads/responsive-design.png" style="width: 200px;" alt="">
            <p style="font-size: 24px; color: black; ">Built responsive and accesible through various devices.</p>
          </div>
          <div> <img src="https://cdn-icons-png.flaticon.com/512/45/45765.png" style="width: 200px; padding: 40px;" alt="">
            <p style="font-size: 24px; color: black; ">24 Hour Custumer Service available.</p>
          </div>
          <div> <img src="https://static.thenounproject.com/png/72831-200.png" style="width: 200px; padding: 50px;" alt="">
            <p style="font-size: 24px; color: black; ">User friendy application for web design.</p>
          </div>



        </div>
      </div>
    </div>

  </div>


  <div class="mainbg0" id="testimonials" style="padding-top: 20px; padding-bottom: 100px;">

    <div class="container">
      <div data-aos="fade-up" data-aos-duration="2000">
        <h1 clas=" text-center mx-auto text-light" style="font-size: 44px; color: #0099ff; text-align: center;"><b><i class="fa-solid fa-star-half-stroke"></i> Ratings & Reviews</b></h1>
        <hr class="mx-auto" style="border: 4px solid #0099ff; border-radius: 5px; width: 400px; text-align: center;">
      </div>
      <div data-aos="fade-up" data-aos-duration="2000">
        <div class="containerOWL rounded" style="color: black;">

          <div class="owl-carousel owl-theme">
            <div class="owl-item">
              <div class="card d-flex flex-column">
                <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                <div class="testimonial"> Website ini sangat membantu sekali dalam informasi dan website sangat memenuhi kriteria yang baik.</div>
                <div class="d-flex flex-row profile pt-4 mt-auto">
                  <img src="images/angga.png" alt="" class="rounded-circle">
                  <div class="d-flex flex-column pl-2">
                    <div class="name">Angga</div>
                    <p class="text-muted designation">CEO Build With Angga</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="card d-flex flex-column">
                <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                <div class="main font-weight-bold pb-2 pt-1">Nice Job, Well Done</div>
                <div class="testimonial"> Website ini sangat compact dimana menyimpan informasi dan backend yang cukup signifikan dalam signin dan signup.</div>
                <div class="d-flex flex-row profile pt-4 mt-auto">
                  <img src="images/beatrice.png" alt="" class="rounded-circle">
                  <div class="d-flex flex-column pl-2">
                    <div class="name">Beatrice</div>
                    <p class="text-muted designation">UI/UX Designer</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="card d-flex flex-column">
                <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                <div class="main font-weight-bold pb-2 pt-1">Great Service</div>
                <div class="testimonial"> Saya sebagai suster dalam rumah sakit di Indonesia sangat tertolong sekali dimana untuk membantu kami mengingatkan pasien untuk menerima obat mereka.</div>
                <div class="d-flex flex-row profile pt-4 mt-auto">
                  <img src="images/fanny_photo.png" alt="" class="rounded-circle">
                  <div class="d-flex flex-column pl-2">
                    <div class="name">Fanny</div>
                    <p class="text-muted designation">NURSE</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="card d-flex flex-column">
                <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                <div class="main font-weight-bold pb-2 pt-1">Recommended</div>
                <div class="testimonial"> Saya sebagai dokter umum dalam puskesmas di Jakarta dapat merekomendasi kalian untuk menggunakan website ini, agar masyarakat merapikan jadwal minum obat mereka.</div>
                <div class="d-flex flex-row profile pt-4 mt-auto">
                  <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="rounded-circle">
                  <div class="d-flex flex-column pl-2">
                    <div class="name">Megan</div>
                    <p class="text-muted designation">DOCTOR</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="card d-flex flex-column">
                <div class="mt-2"> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star active-star"></span> <span class="fas fa-star-half-alt active-star"></span> </div>
                <div class="main font-weight-bold pb-2 pt-1">Great Helper</div>
                <div class="testimonial"> Saya sangat terbantu sekali dari website ini dimana saya sebagai Miss Universe sangat sibuk sekali, dengan adanya website ini saya dapat menjadwalkan diri saya untuk meminum vitamin dan obat.</div>
                <div class="d-flex flex-row profile pt-4 mt-auto">
                  <img src="images/milkha.png" alt="" class="rounded-circle">
                  <div class="d-flex flex-column pl-2">
                    <div class="name">Milkha</div>
                    <p class="text-muted designation">Miss Universe</p>
                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mainbg0" id="medicines" style="padding-top: 0px; padding-bottom: 300px;">
    <div class="container">
      <div data-aos="fade-up" data-aos-duration="2000">
        <h1 clas=" text-center mx-auto text-light" style="font-size: 44px; color: #0099ff; text-align: center;"><b><i class="fa-solid fa-pills"></i> Meds Verifier</b></h1>
        <hr class="mx-auto" style="border: 4px solid #0099ff; border-radius: 5px; width: 400px; text-align: center;">

        <form>
          <div class="mb-3" id="searchMeds">
            <label for="exampleInputPassword1" class="form-label">Find your Medicine!</label>
            <input type="text" name="search" class="form-control" id="inputMeds">
            <p style="font-size: 24px; color: black; ">Curious about your meds? search here and find out more!</p>
          </div>
          <?php

          if (isset($_GET['search']) && ($_GET['search'] !== '')) {
            $search = urlencode($_GET['search']);
            echo <<<EOL
    <script type='text/javascript'>
    window.scrollTo({
        top: 400,
        behavior: 'smooth',
      });
    // document.getElementById('searchMeds').style.visibility = "hidden";
    </script>


    <div id="emailHelp" style="font-size: 24px; color: black; ">Do you mean <b>'$search'</b>? Click buttons below to search for <b>'$search'</b></div>
<a class="btn btn-primary" href="https://www.halodoc.com/obat-dan-vitamin/search/{$search}">Halodoc</a>
<a class="btn btn-primary" href="https://www.google.com/search?q={$search}&ie=UTF-8&oe=UTF-8">Google</a>
<a class="btn btn-danger" href="index.php">Clear</a>


EOL;
          }
          ?>




        </form>


      </div>
    </div>
  </div>

  <div class="mainbg0" id="partners" style="padding-top: 0px; padding-bottom: 10px;">
    <div class="container mx-auto justify-content-center ">
      <div data-aos="fade-up" data-aos-duration="2000">

        <h1 clas=" text-center mx-auto text-light" style="font-size: 44px; color: #0099ff; text-align: center;"><b><i class="fa-solid fa-handshake"></i> Our Partners</b></h1>
        <hr class="mx-auto" style="border: 4px solid #0099ff; border-radius: 5px; width: 400px; text-align: center;">


        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card" style="">
              <img src="images/index-imgHalodoc.png" class="img-fluid" style="width: 400px; height:150px;" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="nav-link" href="https://www.halodoc.com/">halodoc</a></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="">
              <img src="images/index-imgKimiaFarma.jpg" class="img-fluid" style="width: 400px; height:150px;" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="nav-link" href="https://www.kimiafarma.co.id/">Kimia Farma</a></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="">
              <img src="images/index-imgKlikDokter.jpg" class="img-fluid" style="width: 400px; height:150px;" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="nav-link" href="https://www.klikdokter.com/">klikDOKTER</a></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="">
              <img src="images/index-imgCentury.jpg" class="img-fluid" style="width: 400px; height:150px;" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a class="nav-link" href="https://century-pharma.com/">Century</a></h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



















  <!-- Footer -->
  <?php include("fw/footer-main.php") ?>
  <!-- Footer -->


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <script src="./js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</body>

</html>