<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Monitoring Marketplace</title>
    <link rel="stylesheet" href="/assets/css/main/app.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/png" />
    <style>
        #flip-card {
            width: 40%;
            perspective: 1000px;
            background-color: transparent;
            /* position: relative; */
        }

        .card-front,
        .card-back {
            transition: all 0.6s ease;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            /* background-color: green;  */
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

        .copyright {
            font-size: small;
            color: white;
            margin-top: 24px;
            position: relative;
            margin: auto;
            text-align: center;
            padding: 24px;
        }
    </style>
</head>

<body class="min-vh-100 bg-primary bg-gradient">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    Remember password
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                    in</button>
                            </div>
                            <hr class="my-4">
                            <div class="d-grid mb-2">
                                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-google me-2"></i> Sign in with Google
                                </button>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                                    <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="card m-0" id="flip-card">
                    <div class="card-body">
                        <div class="card card-front px-4 pt-3">
                            <div class="card-body">
                                <img src="/assets/images/ipos.png" alt="Logo" style="height: 2rem;" /><span> Monitoring
                                    Marketplace</span>
                                <h5 class="card-title text-center">Silahkan Login</h5>
                                <hr>
                                <form action="/dashboard">
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-lg" placeholder="Username" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password" />
                                        <div class="form-control-icon">
                                            <i class="bi bi-shield-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-md shadow-md">
                                        Log in
                                    </button>
                                </form>
                            </div>
                            <hr>
                            <div class="text-center">
                                <small class="text-muted">Info : </small>
                                <small class="text-muted">Pastikan user & password
                                    sesuai dengan login Iposweb</small>
                                <p>
                                    <a class="font-bold" id="flip-button-front" type="button">Lupa
                                        password?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card card-back px-5 pt-3">
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">Lupa Password</h5>
                            <hr>
                            <p class="m-0">
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
                        <hr>
                        <div class="text-center">
                            <p m-0>
                                <a class="font-bold" id="flip-button-back" type="button">Kembali ke login</a>
                            </p>
                        </div>
                    </div>
                    <p class="copyright">© Copyright 2023 <b>POS INDONESIA</b></p>
                </div> --}}
            </div>
        </div>
        
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
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
