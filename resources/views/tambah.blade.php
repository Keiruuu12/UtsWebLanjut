<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">UTS Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/produk') }}">Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 py-4">Form Tambah Produk</h1>

        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <label for="kode_produk" class="form-label">Kode Produk</label>
                    <input type="string" id="kode_produk" class="form-control" name="kode_produk">
                </div>

                <div class="col-sm-4">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="string" id="nama_produk" class="form-control" name="nama_produk">
                </div>

                <div class="col-sm-4">
                    <label for="jenis_produk" class="form-label">Jenis Produk</label>
                    <select class="form-select" name="jenis_produk">
                        <option selected>Open this select menu</option>
                        @foreach ($jenis_produks as $jenis)
                            <option value="{{ $jenis->jenis_produk }}">{{ $jenis->jenis_produk }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" id="harga" class="form-control" name="harga">
                </div>

                <div class="d-flex col-sm-6 align-items-end mt-3">
                  <button type="submit" class="btn btn-success w-100">Simpan</button>
                </div>
            </div>
            
        </form>

    </div>

    </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
