<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bukber Azza</title>
  <link rel="shortcut icon" href="{{ asset('theconqueror.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a style="margin-left: 20px;" class="navbar-brand" href="#">
        <!-- Brand here -->
        <img src="{{ asset('images/theconqueror.png') }}" alt="Logo" style="max-width: 20%; height: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="/datagenerasi">List</a>
          <a class="nav-link" href="/datajumlah">Struktur</a>
          <a class="nav-link me-5" href="/datacatatan">Catatan</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Log Out</a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text">
            <span>AZZAHRA</span>
            <p> FAST BREAKING</p>
            <p style="color: rgb(255, 208, 0);">IT'S BUKBER TIME</p>
            <h5>Not just a Bukber,but getting to know wach other,sharing stories,and feeling togetherness</h5>
            <div class="buttons">
              <a href="/datagenerasi" class="btn btn-sec">Lihat Data Peserta</a>
              <a href="/datacatatan" class="btn btn-outline-secondary ms-3">Lihat Catatan</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('images/banner.png') }}" alt="hero-img" class="w-100">
        </div>
      </div>
    </div>
  </section>

  <!-- Setup Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Ramaikan suasana bukber bersama di pondok</h3>
        <p>Mengenang bersama-sama suasana bukber di halaman Azzahrah</p>
      </div>
      <div class="items text-center">
        <div class="row">
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/flashback.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Memories</h5>
              <p>LReminiscing about the atmosphere of azzahrah.</p>
            </div>
          </div>
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/together.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Together</h5>
              <p>Strengthen intergenerational togetherness and hospitality.</p>
            </div>
          </div>
          <div class="col md-4">
            <div class="icons">
              <img src="{{ asset('images/sharing.png') }}" alt="icons">
            </div>
            <div class="desc">
              <h5>Sharing</h5>
              <p>Sharing experiences with each other about what has been achieved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Information Section -->
  <section class="information">
    <div class="container">
      <div class="row info-1">
        <!-- Text -->
        <div class="col-md-6">
          <div class="text-information">
            <h5>Rundown Acara</h5>
            <p>Berikut adalah susunan acara bukber alumni Azzahra yang akan dilakukan pada 19 April 2023</p>
          </div>
        </div>
        <!-- Image -->
        <div class="col-md-6">
          <img src="{{ asset('images/rundown.png') }}" alt="img-1" class="w-100">
        </div>
      </div>
      <div class="row info-1">
        <!-- Image -->
        <div class="col-md-6">
          <img src="{{ asset('images/rundown2.png') }}" alt="img-1" class="w-100">
        </div>
        <!-- Text -->
        <div class="col-md-6">
          <div class="text-information">
            <h5>Informasi Seputar Bukber</h5>
            <p>Berikut adalah infromasi singkat seputar bukber Azzahrah 2023</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  


  <!-- Footer Section -->
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="row row cols-1 row-cols-lg-5 g-2 g-lg-3">
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/homepage" class="text-decoration-none">Home</a>
                </small>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/datagenerasi" class="text-decoration-none">List</a>
                </small>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/datajumlah" class="text-decoration-none">Struktur</a>
                </small>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/datacatatan" class="text-decoration-none">Catatan</a>
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class="copy">
          &copy; 2023 The Conqueror || Iamwhysptr
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>