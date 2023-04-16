<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bukber Azza</title>
  <link rel="shortcut icon" href="{{ asset('theconqueror.ico') }}" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a style="margin-left: 20px;" class="navbar-brand" href="#">
        <!-- Brand here -->
        <img src="{{ asset('images/theconqueror.png') }}" alt="Logo" style="max-width: 20%; height: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" aria-current="page" href="/homepage">Home</a>
          <a class="nav-link active" href="/datagenerasi">List</a>
          <a class="nav-link" href="/datajumlah">Struktur</a>
          <a class="nav-link me-5" href="/datacatatan">Catatan</a>
        </div>
        <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Log Out</a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->

  <form class="navbar-search">
    <div class="input-group">
      <input type="search" name="search" class="form-control me-2" placeholder="Search" aria-label="search" aria-describedby="basic-addon2" style="width: 300px; margin-left: 10px; border-radius: 10px;">
      <div class="input-group-append">
        <form action="" method="GET">
          <button class="btn btn-outline-secondary" type="search">
            <i class="fas fa-search fa-sm ou">Search</i>
          </button>

          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-filter filter-icon" viewBox="0 0 16 16">
              <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/datagenerasi">Semua Generasi</a></li>
            <li><a class="dropdown-item" href="/datagenerasi1">Generasi 1</a></li>
            <li><a class="dropdown-item" href="/datagenerasi2">Generasi 2</a></li>
            <li><a class="dropdown-item" href="/datagenerasi3">Generasi 3</a></li>
            <li><a class="dropdown-item" href="/datagenerasi4">Generasi 4</a></li>
            <li><a class="dropdown-item" href="/datagenerasi5">Generasi 5</a></li>
            <li><a class="dropdown-item" href="/datagenerasi6">Generasi 6</a></li>
            <li><a class="dropdown-item" href="/datagenerasi7">Generasi 7</a></li>
            <li><a class="dropdown-item" href="/datagenerasi8">Generasi 8</a></li>
            <li><a class="dropdown-item" href="/datagenerasi9">Generasi 9</a></li>
            <li><a class="dropdown-item" href="/datagenerasi10">Generasi 10</a></li>
            <li><a class="dropdown-item" href="/datagenerasi11">Generasi 11</a></li>
            <li><a class="dropdown-item" href="/datagenerasi12">Generasi 12</a></li>
            <li><a class="dropdown-item" href="/datagenerasi13">Generasi 13</a></li>
          </ul>
        </form>
      </div>
    </div>
  </form>


  <!-- Hero Section -->
  <section class="setup">
    <div class="container">
      <div class="text-header text-center">
        <h3>Daftar Bukber Azzahrah</h3>
        <p>Berikut adalah daftar nama-nama peserta bukber Azzahrah</p>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Data</button>
        <a href="/exportpdf" class="btn btn-outline-secondary">
          <i class="fas fa-search fa-sm ou">Export</i>
        </a>
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Export Gen
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-filter filter-icon" viewBox="0 0 16 16">
            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/exportpdf">Semua Generasi</a></li>
                  <li><a class="dropdown-item" href="/exportpdf1">Generasi 1</a></li>
                  <li><a class="dropdown-item" href="/exportpdf2">Generasi 2</a></li>
                  <li><a class="dropdown-item" href="/exportpdf3">Generasi 3</a></li>
                  <li><a class="dropdown-item" href="/exportpdf4">Generasi 4</a></li>
                  <li><a class="dropdown-item" href="/exportpdf5">Generasi 5</a></li>
                  <li><a class="dropdown-item" href="/exportpdf6">Generasi 6</a></li>
                  <li><a class="dropdown-item" href="/exportpdf7">Generasi 7</a></li>
                  <li><a class="dropdown-item" href="/exportpdf8">Generasi 8</a></li>
                  <li><a class="dropdown-item" href="/exportpdf9">Generasi 9</a></li>
                  <li><a class="dropdown-item" href="/exportpdf10">Generasi 10</a></li>
                  <li><a class="dropdown-item" href="/exportpdf11">Generasi 11</a></li>
                  <li><a class="dropdown-item" href="/exportpdf12">Generasi 12</a></li>
                  <li><a class="dropdown-item" href="/exportpdf13">Generasi 13</a></li>
                </ul>
      </div>
      <div class="items text-center" style="margin-top: 20px;">
        <div class="row">
          @foreach(array_reverse($bukber->toArray()) as $index => $ds)
          <div class="col-md-3 pb-5 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $ds['nama'] }}</h5>
                <p class="card-text">{{ $ds['generasi'] }}</p>
                <button type="button" style="margin-top: 10px;" class="btn btn-sec" data-bs-toggle="modal" data-bs-target="#ModalView{{$ds['id']}}">
                  Lihat Detail
                </button>
                <button type="button" style="margin-top: 10px; margin-left: 10px;" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$ds['id']}}">
                  Hapus
                </button>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
  </section>

  <!-- Modal -->
  @foreach($bukber as $index => $ds)
  <div id="ModalDelete{{$ds->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus <span style="font-weight: bold;">{{$ds->nama}}</span></p>
        </div>
        <div class="modal-footer">
          <form action="/deletedata/{{$ds->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <!-- Rest of the form fields -->
            <button type="submit" class="btn btn-danger" style="margin-top: 10px; margin-left: 10px;">Hapus</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  @endforeach


  <!-- View Modal -->
  @foreach($bukber as $index => $ds)
  <div class="modal fade" id="ModalView{{$ds->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data Bukber</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('fotostruk/'.$ds->foto)}}" class="rounded mx-auto d-block" style="max-height: 350px;" alt="Bukti Transfer">
          <form action="/updatedata/{{$ds->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Bukti</label>
              <input type="file" name="foto" class="form-control">
              @error('foto')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $ds->nama }}">
              @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Generasi</label>
              <select class="form-select" name="generasi" aria-label="Default select example">
                <option selected>{{ $ds->generasi }}</option>
                <option value="Generasi 1">Generasi 1</option>
                <option value="Generasi 2">Generasi 2</option>
                <option value="Generasi 3">Generasi 3</option>
                <option value="Generasi 4">Generasi 4</option>
                <option value="Generasi 5">Generasi 5</option>
                <option value="Generasi 6">Generasi 6</option>
                <option value="Generasi 7">Generasi 7</option>
                <option value="Generasi 8">Generasi 8</option>
                <option value="Generasi 9">Generasi 9</option>
                <option value="Generasi 10">Generasi 10</option>
                <option value="Generasi 11">Generasi 11</option>
                <option value="Generasi 12">Generasi 12</option>
                <option value="Generasi 13">Generasi 13</option>
              </select>
              @error('generasi')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
              <select class="form-select" name="metode_pembayaran" aria-label="Default select example">
                <option selected>{{ $ds->metode_pembayaran }}</option>
                <option value="COD">COD</option>
                <option value="Transfer">Transfer</option>
                <option value="Bayar Ditempat">Bayar Ditempat</option>
              </select>
              @error('metode_pembayaran')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Penerima</label>
              <input type="text" name="penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $ds->penerima }}">
              @error('penerima')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" url="/updatedata/{id}" class="btn btn-primary">Kirim</button>

          </form>


        </div>
      </div>
    </div>
  </div>
  </div>
  @endforeach


  <!-- Insert Data Modal -->
  <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahModalLabel">Tambah Data Bukber</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Tambah data disini</p>
          <form action="/insertdata" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Foto</label>
              <input type="file" name="foto" class="form-control">
              @error('foto')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nama') }}">
              @error('nama')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Generasi</label>
              <select class="form-select" name="generasi" aria-label="Default select example" value="{{ old('generasi') }}">
                <option selected>Pilih Generasi</option>
                <option value="Generasi 1">Generasi 1</option>
                <option value="Generasi 2">Generasi 2</option>
                <option value="Generasi 3">Generasi 3</option>
                <option value="Generasi 4">Generasi 4</option>
                <option value="Generasi 5">Generasi 5</option>
                <option value="Generasi 6">Generasi 6</option>
                <option value="Generasi 7">Generasi 7</option>
                <option value="Generasi 8">Generasi 8</option>
                <option value="Generasi 9">Generasi 9</option>
                <option value="Generasi 10">Generasi 10</option>
                <option value="Generasi 11">Generasi 11</option>
                <option value="Generasi 12">Generasi 12</option>
                <option value="Generasi 13">Generasi 13</option>
              </select>
              @error('generasi')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
              <select class="form-select" name="metode_pembayaran" aria-label="Default select example" value="{{ old('metode_pembayaran') }}">
                <option selected>Pilih Metode Pembayaran</option>
                <option value="COD">COD</option>
                <option value="Transfer">Transfer</option>
                <option value="Bayar Ditempat">Bayar Ditempat</option>
              </select>
              @error('metode_pembayaran')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Penerima</label>
              <input type="text" name="penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('penerima') }}">
              @error('penerima')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-outline-secondary">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer Section -->
  <!-- <footer>
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
         &copy; 2023 The Conqueror || Iamwhysptr
        </div>
      </div>
    </div>
  </footer> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>