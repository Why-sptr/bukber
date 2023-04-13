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
      <a class="navbar-brand" href="#">
        <!-- Brand here -->
        <img src="{{ asset('images/theconqueror.png') }}" alt="Logo" style="max-width: 20%; height: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" aria-current="page" href="/homepage">Home</a>
          <a class="nav-link" href="/datagenerasi">List</a>
          <a class="nav-link active" href="/datajumlah">Struktur</a>
          <a class="nav-link me-5" href="/datacatatan">Catatan</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Log Out</a>
      </div>
    </div>
  </nav>

  <!-- Setup Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Team Work</h3>
        <p>Berikut adalah jumlah data peserta dan panitia bukber.</p>
      </div>
      <div class="items text-center">
        <div class="row">
          <div class="col-md-3">
            <a href="/datagenerasi" style="text-decoration: none;">
            <div class="card-owner">
              <div class="product">
                <img src="{{ asset('images/count1.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Jumlah Data Peserta</h5>
                <p class="card-owner-text">Jumlah Data Peserta: {{ $data_generasis }}</p>
            </div>
            
            </div>
          </a>
          </div>
          <div class="col-md-3">
            <div class="card-owner" data-bs-toggle="modal" data-bs-target="#PanitiaModal">
              <div class="product">
                <img src="{{ asset('images/count2.png') }}" alt="product" class="w-100" height="300">
              </div>
              <div class="card-owner-body">
                <h5 class="card-owner-title">Jumlah Data Panitia</h5>
                <p class="card-owner-text">Jumlah Data Panitia: {{ $data_panitias }}</p>
              </div>
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
                  <a href="/datajumlah" class="text-decoration-none">Jumlah</a>
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