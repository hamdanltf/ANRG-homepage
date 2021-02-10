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

    <title>Access Network RG</title>
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
            <h1 class="display-4">Kirim Idemu!</h1>
            <i>Punya ide menarik atau ingin berkarya bersama kami? <br> yuk isi form di bawah ini dan kita wujudkan
                idemu
                bersama!</i>
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
                            <form class="needs-validation" method="post" action="../functions/proses-quest.php">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Bambang Sudrajat"
                                            required>
                                        <div class="invalid-feedback">
                                            Masukkan nama dengan benar!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email">Alamat Surel</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="bams@accessnetrg.id"
                                            required>
                                        <div class="invalid-feedback">
                                            Masukkan surel yang valid!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor ponsel / Whatsapp"
                                            required>
                                        <div class="invalid-feedback">
                                            Masukkan nomor telepon yang valid!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Kabupaten Bandung"
                                            required>
                                        <div class="invalid-feedback">
                                            Masukkan alamat dengan benar!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label for="specification">Spesifikasi</label>
                                            <textarea minlength="20" class="form-control" id="specification" name="spesification"
                                                rows="5" required placeholder="Jelaskan ide anda pada kami dengan rinci"></textarea>
                                        </div>
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