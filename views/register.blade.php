<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container p-3">
        <h1 class="text-center">Registrasi Pengguna Baru</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="form">
                    <form method="post" action="{{ route('register.store') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="namaInput" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('namaInput') is-invalid @enderror" 
                            id="namaInput" name="namaInput" value={{ old('namaInput') }}>
                            @error('namaInput')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="text" class="form-control @error('emailInput') is-invalid @enderror" 
                            id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                            @error('emailInput')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nimInput" class="form-label">NIM</label>
                            <input type="text" class="form-control @error('nimInput') is-invalid @enderror" 
                            id="nimInput" name="nimInput" value="{{ old('nimInput') }}">
                            @error('nimInput')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Password</label>
                            <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" 
                            id="passwordInput" name="passwordInput">
                            @error('passwordInput')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid 
                            @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                            @error('passwordInput_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    ="anonymous"></script>
</body>
</html>