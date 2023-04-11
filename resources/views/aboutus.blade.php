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
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- Brand here -->
                <img src="{{ asset('images/theconqueror.png') }}" alt="Logo" style="max-width: 20%; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="/homepage">Home</a>
                    <a class="nav-link" href="/datagenerasi">List</a>
                    <a class="nav-link" href="/datajumlah">Struktur</a>
                    <a class="nav-link active me-5" href="/datacatatan">Catatan</a>
                </div>
                <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Log Out</a>
            </div>
        </div>
    </nav>
    <!-- Catatan Button -->
    <button style="margin-left: 10px; margin-bottom: 20px;" type="button" class="btn btn-sec" data-bs-toggle="modal" data-bs-target="#TambahModalCatatan">Tambah Catatan</button>

    <!-- Hero Section -->
    @foreach(array_reverse($bukber->toArray()) as $index => $ds)
    <div class="col-md-4 catatan">
        <div class="card" data-bs-toggle="modal" data-bs-target="#ModalCatatan/{{$ds['id']}}">
            <div class="card-body">
                <h5 class="card-title">{{$ds['judul']}}</h5>
                <p class="card-text">{{$ds['catatan']}}
                </p>
            </div>
        </div>
    </div>
    @endforeach



    <!--Modal Catatan-->
    @foreach($bukber as $index => $ds)
    <div id="ModalCatatan/{{$ds->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form action="/deletecatatan/{{$ds->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <!-- Rest of the form fields -->
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>{{$ds->judul}}</h5>
                        <p>{{$ds->catatan}}</p>
                    </div>
                    <div class="modal-footer"> <button type="submit" class="btn btn-outline-secondary" style="margin-top: 10px; margin-left: 10px;">Hapus</button></div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Add Catatan Modal -->
    <div class="modal fade" id="TambahModalCatatan" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TambahModalLabel">Tulis Catatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tulis disini</p>
                    <form action="/insertcatatan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('judul')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Catatan</label>
                            <textarea type="text" class="form-control" name="catatan"></textarea>
                        </div>
                        @error('catatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
<script>
    const modalLinks = document.querySelectorAll('a[data-target]');
    modalLinks.forEach(link => {
        const modalId = link.getAttribute('data-target');
        const modal = document.getElementById(modalId);
        const close = modal.querySelector('.close');
        link.addEventListener('click', e => {
            e.preventDefault();
            modal.style.display = 'block';
        });
        close.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    });
</script>