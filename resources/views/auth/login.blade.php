<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Monitoring Marketplace</title>
    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/assets/images/ipos.png" type="image/png" />
    <style>
        body {
            /* background: rgb(3,0,36);
            background: radial-gradient(circle, rgba(3,0,36,1) 0%, rgba(15,26,156,1) 50%, rgba(0,189,255,1) 100%); */

            background: rgb(10,0,36);
            background: linear-gradient(43deg, rgba(10,0,36,1) 0%, rgba(15,60,156,1) 50%, rgba(0,181,255,1) 100%);
        }

        #flip-card {
            perspective: 1000px;
            background-color: transparent;
        }

        .card-front,
        .card-back {
            /* position: relative; */
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

        .copyright{
            font-size: small;
            color: white;
            margin-top: 24px;
            margin: auto;
            text-align: center;
            padding: 24px;
        }
    </style>
</head>

<body>
    <div class="container min-vh-100 d-grid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-8 col-lg-3 col-xxl-3">
                <img src="/assets/images/asdf.png" alt="Logo" class="img-fluid"/>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-xxl-4">
                <div class="card m-0" id="flip-card">
                    <div class="card card-front px-4 pt-3">
                        <div class="card-body">
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
                    <div class="card card-back px-5 pt-4">
                        <div class="card-body p-0">
                            <h5 class="card-title text-center">Lupa Password</h5>
                            <hr>
                            <p class="m-0">
                                Login aplikasi Monitoring Marketplace terintegrasi dengan aplikasi Iposweb,
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
                </div>
            </div>
        </div>
        <div class="row">
            <p class="copyright">© Copyright 2023 <b>POS INDONESIA</b></p>
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
