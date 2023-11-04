<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan | Masyarakat</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100" style="background-color: #3264ed;">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">DaftarKan Diri Anda</h4>
                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                          isi kolom dibawah terlebih dahulu
                        </div>
                    @endif
                    <form action="{{url('masyarakat/registrasi')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="nik">
                            @error('nik')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                            @error('nama')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="username">
                                @error('username')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password"
                                    placeholder="password">
                                @error('password')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>   

                            <div class="mb-3">
                                <label for="telp" class="form-label">No Telpon</label>
                                <input type="text" class="form-control" name="telp" id="telp"
                                    placeholder="telp">
                                @error('telp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>                   
                            
                            <button class="btn form-control btn-primary mb-2">Register</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button><br>
                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login"
                                class="fw-bold text-body"><u>Login here</u></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>