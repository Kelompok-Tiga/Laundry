<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- aos animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- style -->
    <!-- <link rel="stylesheet" href="index-style.css"> -->
    <style>
        #login {
            margin-top: 200px;

        }

        #login .card {
            border: none;
            border-radius: 10px;
        }

        #login .card .card-head {
            padding: 13px 25px;
            font-size: 12px;
            color: #636363;
            font-weight: 500;
            background-color: #E8EAE6;
            border-radius: 10px 10px 0 0;
        }

        #login .card .card-form {
            padding: 15px 25px 5px;
            font-size: 14px;
            color: #636363;
            font-weight: 500;
        }

        .btn-back {
            background-color: #FF4646;
            color: #ffffff;
            font-size: 12px;
        }

        .btn-login {
            background-color: #3FC5F0;
            color: #ffffff;
            font-size: 14px;
        }

        .btn-login:hover {
            background-color: #ffffff;
            border: 1px solid #3FC5F0;
            color: #3FC5F0;
            font-size: 14px;
        }

        @media (min-width: 992px) {
            #login .card {
                width: 75%;
                /* margin: auto; */
            }
        }

        input:active {
            box-shadow: none !important;
            border: 1px solid #ced4da !important;
        }

        input:focus {
            box-shadow: none !important;
            border: 1px solid #ced4da !important;
        }

    </style>

    <title>Dashboard</title>
</head>

<body>

    <main>
        <section id="login" style="margin-top: 100px; margin-bottom:100px;">
            <div class="container">
                <div class="card m-auto shadow">
                    <div class="card-head">
                        <i class="fas fa-sign-in-alt me-2"></i>Daftar
                    </div>
                    <div class="card-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name_depan" class="form-label">Nama Depan</label>
                                        <input id="name_depan" type="text"
                                            class="form-control @error('name_depan') is-invalid @enderror"
                                            name="name_depan" value="{{ old('name_depan') }}" required
                                            autocomplete="name_depan" autofocus>

                                        @error('name_depan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="tlp" class="form-label">Nomor Telepon</label>
                                        <input id="tlp" type="number" class="form-control" name="tlp"
                                            value="{{ old('tlp') }}">
                                    </div>
                                    <div class="mb-4">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input id="alamat" type="text" class="form-control" name="alamat"
                                            value="{{ old('alamat') }}">
                                    </div>
                                    {{-- <div class="mb-4">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <select name="provinsi" class="form-control" id="provinsi">
                                            <option value="plh">Pilih Provinsi</option>
                                            @foreach ($provinsi as $item)
                                                <option value="{{ $item->prov_name }}">{{ $item->prov_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="" class="form-label">Kota</label>
                                        <select name="kota" class="form-control" id="kota">
                                            <option value="">Pilih Kota</option>
                                        </select>
                                    </div> --}}
                                    <div class="mb-4">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="" class="form-control">
                                            <option>Pilih Satu</option>
                                            <option value="laki-laki">Laki - laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="nama_belakang" class="form-label">Nama Belakang</label>
                                        <input id="nama_belakang" type="text"
                                            class="form-control @error('nama_belakang') is-invalid @enderror"
                                            name="name_belakang" value="{{ old('name') }}" required autocomplete="name"
                                            autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email address</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password-confirm" class="form-label">Konfirmasi
                                            Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <input type="hidden" class="form-control" name="role" value="member">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-login ">Submit</button>
                                <p class="fw-normal text-center pt-1">Sudah daftar? <a href="{{ route('login') }}"
                                        class="text-decoration-none">klik disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            
        })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>
