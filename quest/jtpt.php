<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../img/common/logo anrg.png">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>Quest Access Network RG</title>
</head>

<body>
    <!-- Navbar mulai -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../index.php">AccessNet.rg</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="http://anrg-belajar.blogspot.com/">Blog</a>
                    <a class="nav-item nav-link" href="../about/index.php">About Us</a>
                    <a class="nav-item nav-link" href="../research/index.php">Research</a>
                    <a class="nav-item nav-link active" href="index.php">Quest</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar bubar -->

    <!-- jumbotron mulai -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Feedback</h1>
            <i>Praktikum Jaringan dan Teknik Penyambungan Telekomunikasi</i>
        </div>
    </div>
    <!-- jumbotron bubar -->

    <!-- quest mulai -->
    <section class="quest" id="quest">
        <div class="container">
            <div class="row quest-head justify-content-center">
                <div class="col-lg-8 quest">
                    <div class="card">
                        <div class="card-body">
                            <form class="needs-validation" method="post" action="../functions/proses-jtpt.php">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="praktikan">Nama</label>
                                        <input type="text" class="form-control" id="praktikan" name="praktikan"
                                            placeholder="Hai1001" required>
                                        <div class="invalid-feedback">
                                            Masukkan nama dengan benar!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim" placeholder="110118XXXX"
                                            required>
                                        <div class="invalid-feedback">
                                            Masukkan NIM yang valid!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="kelompok">Kelompok</label>
                                        <input type="text" class="form-control" id="kelompok" name="kelompok"
                                            placeholder="1001" required>
                                        <div class="invalid-feedback">
                                            Masukkan kelompok dengan benar!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/ADM-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="adm">ADM - Adam Audia</label>
                                            <textarea minlength="50" class="form-control" id="adm" name="adm" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/AJI-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="aji">AJI - Aji Nur Sanyoto</label>
                                            <textarea minlength="50" class="form-control" id="aji" name="aji" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/CIN-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="cin">CIN - Chinthya Aulia</label>
                                            <textarea minlength="50" class="form-control" id="cin" name="cin" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/DIR-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="dir">DIR - Nadira Mumtaz</label>
                                            <textarea minlength="50" class="form-control" id="dir" name="dir" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/HAN-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="han">HAN - Muhammad Farhan Nugroho</label>
                                            <textarea minlength="50" class="form-control" id="han" name="han" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/LTE-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="lte">LTE - Muhammad Hamdan Latief</label>
                                            <textarea minlength="50" class="form-control" id="lte" name="lte" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/NAB-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="nab">NAB - Siti Nabilla Ainun Taqwa</label>
                                            <textarea minlength="50" class="form-control" id="nab" name="nab" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/REY-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="rey">REY - Safida Reynita Sari</label>
                                            <textarea minlength="50" class="form-control" id="rey" name="rey" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/RRS-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="rrs">RRS - Ramadhan Rizki Setyadi</label>
                                            <textarea minlength="50" class="form-control" id="rrs" name="rrs" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/HNA-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="hna">HNA - Hana Rizky Herdika</label>
                                            <textarea minlength="50" class="form-control" id="hna" name="hna" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card mx-auto" style="width: 100%">
                                            <img src="../img/assisten/ZAL-01-min.png" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <div class="form-group">
                                            <label for="zal">ZAL - Syafrizal Mahendra</label>
                                            <textarea minlength="50" class="form-control" id="zal" name="zal" rows="5"
                                                required placeholder="Kesan dan pesan pada assisten"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>BAIK</b></p>
                                    </div>
                                    <label for="baik" class="sr-only">baik</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="baik" id="baik" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='HNA'>HNA</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>PELIT</b></p>
                                    </div>
                                    <label for="pelit" class="sr-only">pelit</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="pelit" id="pelit" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='HNA'>HNA</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>GANTENG</b></p>
                                    </div>
                                    <label for="ganteng" class="sr-only">ganteng</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="ganteng" id="ganteng" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>CANTIK</b></p>
                                    </div>
                                    <label for="cantik" class="sr-only">cantik</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="cantik" id="cantik" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='HNA'>HNA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>ASIK</b></p>
                                    </div>
                                    <label for="asik" class="sr-only">asik</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="asik" id="asik" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='HNA'>HNA</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>SABAR</b></p>
                                    </div>
                                    <label for="sabar" class="sr-only">sabar</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="sabar" id="sabar" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='HNA'>HNA</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center" style="padding-top: 6px;">
                                        <p>Assisten ter-<b>GALAK</b></p>
                                    </div>
                                    <label for="galak" class="sr-only">galak</label>
                                    <div class="col-lg-12">
                                        <select class="form-control" name="galak" id="sabar" required>
                                            <option value="" disabled selected style="display: none;">Pilih Assisten</option>
                                            <option value='ADM'>ADM</option>
                                            <option value='AJI'>AJI</option>
                                            <option value="CIN">CIN</option>
                                            <option value='DIR'>DIR</option>
                                            <option value='HAN'>HAN</option>
                                            <option value='LTE'>LTE</option>
                                            <option value='NAB'>NAB</option>
                                            <option value='REY'>REY</option>
                                            <option value='RRS'>RRS</option>
                                            <option value='HNA'>HNA</option>
                                            <option value='ZAL'>ZAL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                </div>
                                <button type="submit" class="btn btn-warning btn-lg btn-block" name="submitData">Submit
                                    Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- quest bubar -->

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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>