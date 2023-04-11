<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bukber Azza</title>
  <link rel="shortcut icon" href="{{ asset('logo.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <!-- Brand here -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-width: 40%; height: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" aria-current="page" href="/homepage">Home</a>
          <a class="nav-link active" href="/datagenerasi">Product</a>
          <a class="nav-link" href="/owner">Owners</a>
          <a class="nav-link me-5" href="/aboutus">About</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Sign Up</a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section class="detail">
    <div class="container">
      <div class="row info-1">
        <!-- Image -->
        <div class="col-md-6">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('images/parfum.svg') }}" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('images/parfum.svg') }}" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/parfum.svg') }}" class="d-block w-100" height="500" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden" >Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="row">
            <div class="col-md-2 pt-3 mb-5">
              <!-- Image option -->
              <div class="card-detail">
                <div class="detail-product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="100">
                </div>
              </div>
            </div>
            <div class="col-md-2 pt-3 mb-5">
              <!-- Image option -->
              <div class="card-detail">
                <div class="detail-product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="product" class="w-100" height="100">
                </div>
              </div>
            </div>
            <div class="col-md-2 pt-3 mb-5">
              <!-- Image option -->
              <div class="card-detail">
                <div class="detail-product">
                  <img src="{{ asset('images/parfum.svg') }}" alt="new product" class="w-100" height="100">
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Text -->
        <div class="col-md-6">
          <div class="text-detail">
            <h5>Alluring Parfum</h5>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate
              the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may
              be used as a placeholder before final copy is available.</p>
            <p class="price">Price : <span>Rp.200.000</span></p>
            <div class="options pb-4">
              <div class="option">
                <input type="radio" name="option" id="option1">
                <label for="option1">30ML</label>
              </div>
              <div class="option">
                <input type="radio" name="option" id="option2">
                <label for="option2">60ML</label>
              </div>
              <div class="option">
                <input type="radio" name="option" id="option3">
                <label for="option3">100ML</label>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="item-count">
              <button class="btn-decrease">-</button>
              <span class="count">1</span>
              <button class="btn-increase">+</button>
            </div>
          </div>
          <button class="rounded-button">Buy Now</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer Section -->
  <footer class="footer mt-5 pt-5">
    <div class="container-fluid ">
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
                  <a href="/product" class="text-decoration-none">Product</a>
                </small>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/owner" class="text-decoration-none">Owners</a>
                </small>
              </div>
            </div>
            <div class="col-md-3">
              <div>
                <small>
                  <a href="/aboutus" class="text-decoration-none">About</a>
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class="copy">
          &copy; 2023 Alluring Parfum
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
<script>
  /* Select the HTML elements */
  const decreaseBtn = document.querySelector('.btn-decrease');
  const increaseBtn = document.querySelector('.btn-increase');
  const countEl = document.querySelector('.count');

  /* Set the initial count value */
  let count = 1;

  /* Add click event listeners to the buttons */
  decreaseBtn.addEventListener('click', () => {
    if (count > 1) {
      count--;
      countEl.textContent = count;
    }
  });

  increaseBtn.addEventListener('click', () => {
    count++;
    countEl.textContent = count;
  });
</script>

</html>