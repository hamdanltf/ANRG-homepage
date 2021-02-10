<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="style-research.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../img/common/logo anrg.png">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Cellular Access Network RG</title>
</head>

<body>
    <!-- Navbar mulai -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="../../index.php">AccessNet.rg</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="http://anrg-belajar.blogspot.com/">Blog</a>
                    <a class="nav-item nav-link" href="../../about/index.php">About Us</a>
                    <a class="nav-item nav-link" href="../index.php">Research</a>
                    <a class="nav-item nav-link" href="../../quest/index.php">Quest</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar bubar -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../../img/home/cellular.svg" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="display-4">OpenBTS</h1>
                    <p class="lead">Divisi Cellular | Access Network Research Group</p>
                </div>
            </div>
        </div>
    </div>


    <!-- riset mulai -->
    <div class="container">
        <section class="riset" id="riset">
            <div class="container ">
                <div class="row col-md-12 riset-head justify-content-center text-center" id="riset-head">
                    <h2>Apa itu OpenBTS?</h2>
                </div>
                <hr>
                <div class="row col-md-8 offset-md-2 riset-content justify-content-center text-center">
                    <p>Open BTS adalah sebuah aplikasi opensource yang berjalan pada platform linux yang tidak berbeda
                        jauh dengan BTS(Base Transceiver Station) pada umumnya.
                    </p>
                </div>
            </div>
            <div class="container">
                <div class="col-md-12 riset-head justify-content-center text-center" id="riset-head">
                    <h2>Komponen yang digunakan</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-10 offset-md-1 riset-content-text">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-right">
                                <h5>USRP 210</h5>
                                <p>FPGA jenis Xipnx spartan 3A-DSP 3400 <br>
                                    Port Gigabyte Ehernet<br>
                                    Port Exapansi Mimo<br>
                                    Transfer rate data dari perangkat ke host 50 ms<br>
                                    Frekuensi pengiriman sampai 6 Ghz<br>
                                    Dua port untuk tx dan rx<br>
                                    Power adapter</p>
                            </div>
                            <div class="col-md-5">
                                <div class="card border-light" style="width: 100%;">
                                    <img src="../../img/research/cellular/openbts/Picture1.png" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="riset-content-text">
                        <div class="row justify-content-center-antena">
                            <div class="col-md-3">
                                <div class="card border-0" style="width: 100%;">
                                    <img src="../../img/research/cellular/openbts/Picture2.png" class="card-img-top"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-3 riset-content-text-antena">
                                <h5>Antena Rubberduck VERT900</h5>
                                <p>Frequency: 824 to 960 MHz, 1710 to 1990 MHz <br>
                                    Gain: 3dBi <br>Pattern: Omni
                                </p>
                            </div>
                            <div class="col-md-5 offset-md-1 riset-content-alatlain">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card border-0" style="width: 100%;">
                                            <img src="../../img/research/cellular/openbts/Picture3.jpg"
                                                class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md text-left">
                                        <h5>LAN Gigabit</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card border-0" style="width: 100%;">
                                            <img src="../../img/research/cellular/openbts/Picture4.jpg"
                                                class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md text-left">
                                        <h5>Switch Gigabit</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-auto">
                    <div class="row col-md-12 riset-head justify-content-center text-center">
                        <h2>Perangkat Lunak</h2>
                    </div>
                    <hr>
                    <div class="row justify-content-center text-center logo">
                        <div class="col-sm-3 my-auto">
                            <div class="card border-0" style="width: 100%;">
                                <img src="../../img/research/cellular/openbts/asterisk.svg" class="card-img-top"
                                    alt="...">
                            </div>
                        </div>
                        <div class="col-sm-3 my-auto">
                            <div class="card border-0" style="width: 100%;">
                                <img src="../../img/research/cellular/openbts/ubuntu-01.svg"
                                    class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-sm-3 my-auto">
                            <div class="card border-0" style="width: 100%;">
                                <img src="../../img/research/cellular/openbts/openbts-01.svg" class="card-img-top"
                                    alt="...">
                            </div>
                        </div>
                        <div class="col-sm-3 my-auto">
                            <div class="card border-0" style="width: 100%;">
                                <img src="../../img/research/cellular/openbts/gnu-01.svg"
                                    class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <div class="row col-md-12 riset-head justify-content-center text-center" id="riset-head">
                        <h2>Cara kerjanya?</h2>
                    </div>
                    <hr>
                    <div class="row col-md-8 offset-md-2 justify-content-center text-center">
                        <div class="card border-0" style="width: 100%;">
                            <img src="../../img/research/cellular/openbts/diagrama2.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer mulai -->
            <section class="footer" id="footer">
                <div class="footer text-center">
                    <hr>
                    <b>© Access Network Research 2019</b>
                    <br>
                    <p>theme by Hamdan Latief</p>
                </div>
            </section>
            <!-- footer bubar -->
    </div>
    <nav class="navbar navbar-light" style="background-color: orange;">
    </nav>
    </div>
    </section>
    </div>
    <!-- riset bubar -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>