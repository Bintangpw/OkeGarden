<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../assets/style.css" rel="stylesheet"> 
    <title>Oke Garden</title>
    @viteReactRefresh
    @vite('resources/js/app.jsx')

    <style>
      .menu {
        margin: 0 auto;
        font-size: larger;
      }

      .container {
        background-color: rgba(255, 255, 255, 0.596);
        justify-content: center;
      }

      .pickhead {
        text-align: center;
      }

      .link-card-body{
        font-weight: bold;
        color: rgb(0, 216, 47);
      }
    </style>

  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="nav-item">
            <a href="#" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon me-3">
                    <img src="../../assets/Logo.png" alt height="60">
                </span>
            </a>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="menu navbar-nav me-auto mb-2 mb-lg-0">
              <li class="me-2 nav-item">
                <a class="nav-link" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="me-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Layanan 1</a></li>
                  <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                  <li><a class="dropdown-item" href="#">Layanan 3</a></li>
                </ul>
              </li>
              <li class="me-2 nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Blog 1</a></li>
                  <li><a class="dropdown-item" href="#">Blog 2</a></li>
                  <li><a class="dropdown-item" href="#">Blog 3</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mitra
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Mitra 1</a></li>
                  <li><a class="dropdown-item" href="#">Mitra 2</a></li>
                  <li><a class="dropdown-item" href="#">Mitra 3</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex">
              <a href="#" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon me-3">
                    <img src="../../assets/user.png" alt height="70">
                </span>
            </a>
          </div>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="d-flex justify-content-center text-black text-center">
          <div class="p-2">
              <div class="d-flex flex-column p-4 p-md-5 mb-2 justify-content-center text-black text-center">
                  <div class="p-2"><h1>Konsultasi Taman</h1></div>
                  <div class="p-2">klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</div>
              </div>
          </div>
        </div>

        <div class="d-grid gap-4 mx-3" style="grid-template-columns: 5fr 7fr;">
          <div class="bg-white border border-2 rounded-3">
              <div id="date-picker" class="d-flex justify-content-center fs-3"></div>
          </div>
          <div class="bg-white border border-2 rounded-3">
              <div class="pickhead" id="picked-header">
                  <div style="font-weight: bold; font-size: 23px; padding-top: 20px;" id="day-picked"></div>
                  <div id="date-picked"></div>
              </div>
              <div style="padding-top: 15px; padding-left: 30px;">
                <label class="form-label" style="font-weight: bold; font-size: 18px;">Pilih Waktu</label><br>
                <p style="font-size: 14px">Durasi Konsultasi 30 Menit</p>
                <div class="d-grid gap-3 d-md-flex justify-content-md">
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">09.00</button>
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">13.00</button>
                </div>
                <div class="d-grid gap-3 d-md-flex justify-content-md">
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">10.00</button>
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">14.00</button>
                </div>
                <div class="d-grid gap-3 d-md-flex justify-content-md">
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">11.00</button>
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">15.00</button>
                </div>
                <div class="d-grid gap-3 d-md-flex justify-content-md">
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">12.00</button>
                  <button type="button" class="btn btn-outline-secondary mb-3" style="font-weight:600; color: rgb(2, 175, 228);width: 250px; border-radius: 5px;">16.00</button>
                </div>
              </div>
          </div>
      </div>
      <br><br>
        <div class="align-items-md-stretch">
            <div class="p-5 bg-light border rounded-3">
              <h2>Informasi Data Diri</h2>
              <form class="row g-3">
                <div class="col-md-5">
                  <label for="inputEmail4" class="form-label">Nama Lengkap</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-5">
                  <label for="inputPassword4" class="form-label">No HP</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="mb-3 row" style="padding-top: 30px;">
                  <label class="col-sm-1 col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <textarea class="border border-success form-control" style="resize: none; border-radius: 0.5rem;" rows="5"></textarea>
                  </div>
                </div>
              </form>
            </div>
        </div>

        <div class="align-items-md-stretch">
          <div class="p-5 bg-light border rounded-3">
            <h2>Informasi Konsultasi Taman</h2>
            <div class="col-md-5" style="padding-top: 15px;">
              <label for="inputEmail4" class="form-label" style="font-weight: bold; font-size: 18px;">Lahan Taman</label><br>
              <p style="font-size: 14px">Pilih jumlah lahan taman yang akan dibuat</p>
              <div class="d-grid gap-3 d-md-flex justify-content-md">
                <button type="button" class="btn btn-outline-success">1 Lahan Taman</button>
                <button type="button" class="btn btn-outline-success">2 Lahan Taman</button>
                <button type="button" class="btn btn-outline-success">Lebih dari 2 Lahan Taman</button>
              </div>
            </div>
            <div class="col-md-5" style="padding-top: 15px;">
              <label for="inputEmail4" class="form-label" style="font-weight: bold; font-size: 18px;">Tema Taman</label><br>
              <p style="font-size: 14px">Pilih tema taman yang akan dibuat</p>
            </div>
            <div class="album py-5 bg-light">
              <div class="container">
          
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm" style="border-radius: 0.7rem;">
                      <img src="../../assets/taman1.png" style="border-radius: 0.7rem;" class="bd-placeholder-img card-img-top" width="90%"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                      <div class="card-body">
                        <h3>Taman Minimalis</h3>
                        <p class="card-text">Taman yang indah di lahan yang sempit</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          </div>
                          <a class="link-card-body" href="#"><small class="text-muted">Pilih</small></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm" style="border-radius: 0.7rem;">
                      <img src="../../assets/taman2.png" style="border-radius: 0.7rem;" class="bd-placeholder-img card-img-top" width="90%"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                      
                      <div class="card-body">
                        <h3>Taman Kering</h3>
                        <p class="card-text">Taman yang dirancang untuk manghasilkan suasana alam di dalam dan di luar rumah</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          </div>
                          <a class="link-card-body" href="#"><small class="text-muted">Pilih</small></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card shadow-sm" style="border-radius: 0.7rem;">
                      <img src="../../assets/taman3.png" style="border-radius: 0.7rem;" class="bd-placeholder-img card-img-top" width="90%"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">

                      <div class="card-body">
                        <h3>Taman Tropis</h3>
                        <p class="card-text">Taman yang paling sesuai dengan iklim di Indonesia</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          </div>
                          <a class="link-card-body" href="#"><small class="text-muted">Pilih</small></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <label class="form-label" style="font-weight: bold; font-size: 18px;">Estimasi Ukuran Tanaman</label><br>
              <div class="d-grid gap-3 d-md-flex justify-content-md">
                <button type="button" class="btn btn-outline-success">< 10m2</button>
                <button type="button" class="btn btn-outline-success">11-20m2</button>
                <button type="button" class="btn btn-outline-success">21-30m2</button>
                <button type="button" class="btn btn-outline-success">41-50m2</button>
                <button type="button" class="btn btn-outline-success">51-60m2</button>
                <button type="button" class="btn btn-outline-success">>100m2</button>
              </div>
              <br><br>
              <div class="d-flex flex-row-reverse bd-highlight">
                <div class="d-grid gap-4 d-md-flex justify-content-md">
                  <button type="button" class="btn btn-light" style="font-weight: 600; color:green; width: 70px; border-radius: 10px;">Batal</button>
                  <button type="button" class="btn btn-success" style="font-weight:600; width: 70px; border-radius: 10px;">OKE</button>
                </div>
              </div>
          </div>
        </div>
    </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function dayTrigger(){
            $(".rdp-day").on("click", function(){
                
                let date = $(this).attr("aria-label");
                let year = $(".rdp-caption_label").text().split(" ")[1];
                const dateSplitted = date.split(" ");
                const dayPicked = dateSplitted[2].slice(1,-1);
                const datePicked = dateSplitted[1] + " " + dateSplitted[0].slice(0,-2) + ", " + year;
                $("#day-picked").html(dayPicked);
                $("#date-picked").html(datePicked);
            })
        }
        function monthTrigger(){
            $(".rdp-nav_button").on("click", function(){
                setTimeout(function(){
                    dayTrigger();
                },50);
            })
        }
        $(window).on('load', function() {
            dayTrigger();
            monthTrigger();
        });
    </script>
  </body>
</html>