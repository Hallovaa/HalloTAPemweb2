<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('login.auth') }}">Home</a>
                    @can('admin')
                        <a class="nav-link" href="{{ route('dashboard.showDataPengguna') }}">Data Pengguna</a>
                    @endcan
                </div>
            </div>
            <div class="text-end d-flex align-items-center">
                <div class="user me-3">
                    Halo, {{ Auth::user()->name }}
                </div>
                <div class="logout">
                    <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1>Selamat Datang, {{ Auth::user()->name }}</h1>
                {{-- <h3>Ini adalah halaman Admin Dashboard</h3> --}}
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-book-half" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-2">Materi</h5>
                        <p class="card-text">Klik untuk tambah materi pembelajaran.</p>
                        <a href="#" class="btn btn-primary">Lihat Materi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-question-circle" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-2">Kuis</h5>
                        <p class="card-text">Klik untuk tambah kuis.</p>
                        <a href="#" class="btn btn-primary">Mulai Kuis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-people" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-2">Data Pengguna</h5>
                        <p class="card-text">Klik untuk melihat data pengguna.</p>
                        <a href="{{ route('dashboard.showDataPengguna') }}" class="btn btn-primary">Lihat Data
                            Pengguna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
