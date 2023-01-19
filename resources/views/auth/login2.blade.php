<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Monitoring Marketplace</title>
    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="stylesheet" href="/assets/css/pages/auth.css" />
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/png" />
    <style>
        #flip-card {
            perspective: 1000px;
            position: relative;
        }

        .card-front,
        .card-back {
            transition: all 0.6s ease;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .card-front {
            transform: rotateY(0deg);
        }

        .card-back {
            position: absolute;
            transform: rotateY(180deg);
        }

        .flipped .card-front {
            transform: rotateY(180deg);
        }

        .flipped .card-back {
            transform: rotateY(360deg);
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12 p-0">
                <div id="auth-left">
                    
                    <div class="auth-logo">
                        <img src="/assets/images/ipos.png" alt="Logo" /><span>    Monitoring Marketplace</span>
                    </div>
                    {{-- <h1 class="auth-title fs-1">Log in</h1> --}}
                    <div class="card m-0" id="flip-card">
                        <div class="card-front pt-5">
                            <div class="card-header">
                                <h5 class="card-title">Login</h5>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard">
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Username" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="password" class="form-control form-control-lg"
                                            placeholder="Password" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-shield-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-md shadow-md mt-5">
                                        Log in
                                    </button>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-muted">Info : </small>
                                <small class="text-muted">Pastikan user & password
                                    sesuai dengan login Iposweb</small>
                            </div>
                            <div class="text-center">
                                <p>
                                    <a class="font-bold" id="flip-button-front" type="button">Lupa
                                        password?</a>
                                </p>
                            </div>
                        </div>
                        <div class="card-back pt-5">
                            <div class="card-header">
                                <h5 class="card-title">Lupa Password</h5>
                            </div>
                            <div class="card-body">
                                <p>
                                    Login aplikasi Ipos Monitoring terintegrasi dengan aplikasi Iposweb,
                                    <br><br>Jika lupa user/password silakan buat ticket di website <strong>aplikasi
                                        Ticket</strong> di <a href="http://ticket.posindonesia.co.id"
                                        target="_blank">http://ticket.posindonesia.co.id</a>
                                    <br>pilih Bagian <strong>HOS IPOS</strong>
                                    <br>dengan Klasifikasi Masalah <strong>IPOSWEB-User petugas</strong>
                                    <br>lalu masukkan <strong>isi pesan</strong> yaitu
                                    <br>&nbsp;- nippos, nama, bagian dan jabatan ybs
                                    <br>&nbsp;- nippos &amp; nama atasan
                                    <br>&nbsp;- divisi
                                    <br>&nbsp;- perihal dan permintaan.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <p>
                                    <a class="font-bold" id="flip-button-back" type="button">Kembali ke login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block p-0">
                <div id="auth-right" class="row align-items-center">
                    <div class="col pe-5">
                        <img src="/assets/images/login-style.svg" alt="Login Style">
                    </div>
                    {{-- <a href="https://storyset.com/people">People illustrations by Storyset</a> --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("#flip-button-front").addEventListener("click", function() {
            document.querySelector("#flip-card").classList.toggle("flipped");
        });

        document.querySelector("#flip-button-back").addEventListener("click", function() {
            document.querySelector("#flip-card").classList.toggle("flipped");
        });
    </script>
</body>

</html>
