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
    <link rel="stylesheet" href="style-research.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../../img/common/logo anrg.png">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <title>IoT Access Network RG</title>
</head>

<body>
    <!-- Navbar mulai -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
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

    <header>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="../../img/research/iot/iot.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100  align-items-center">
                <div class="w-100 text-white">
                    <img src="../../img/home/iot.svg" alt="">
                    <h3 class="text-center">Trash Monitoring System Prototype Based on Internet of Things (IoT)</h3>
                </div>
            </div>
        </div>
    </header>


    <!-- riset mulai -->
    <div class="container">
        <section class="riset" id="riset">
            <div class="row riset-head">
                <div class="col-md-6">
                    <div class="media">
                        <img src="../../img/Logo dengan BG.png" class="mr-3" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Achmad Auliyaa Zulfikri</h5>
                            <p>Divisi IoT (Alumni)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="riset-content">
                <div class="container">

                    <div class="row judul justify-content-center">
                        <h1>Abstrak</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">

                        <div class="col-lg-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/aul/pro1-01.png" alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <p>Sampah rumah tangga merupakan hal yang tidak bisa dipisahkan dari kehidupan sehari-hari
                                di wilayah perumahan, hal yang perlu di garisbawahi oleh pengelola perumahan ialah
                                penanganan terhadap sampah yang terdapat di tiap-tiap tempat sampah di perumahan
                                tersebut,tentunya hal ini menjadi tanggung jawab dari petugas kebersihan yang ada di
                                perumahan tersebut. Namun pada praktiknya sering kali terjadi nya penimbunan sampah di
                                salah satu sudut perumahan sehingga menyebabkan pandangan dan bau yang tidak sedap ,hal
                                itu terjadi karena petugas kebersihan telat datang untuk mengambil sampah-sampah
                                tersebut.Selain itu pada kasus lain yang mungkin terjadi ialah saat petugas kebersihan
                                datang untuk mengambil sampah namun sampah nya belum ada karena sebagian besar penghuni
                                sedang tidak beraktifitas di rumahnya dalam waktu yang relatif lama,hal itu tentu
                                merugikan bagi petugas kebersihan dari segi efisien waktu karena harus mencari sampah
                                mana yang sudah penuh.</p>
                            <p>Oleh karena itu di dalam tugas akhir ini akan dibuat sistem prototype pemantauan sampah
                                berbasis Internet of Things (IoT) yang berfungsi untuk memantau secara real time
                                kondisi ketinggian sampah di tempat sampah yang ada di suatu perumahan, sehingga
                                petugas kebersihan dapat mengetahui tempat sampah mana saja yang memang sudah harus
                                diangkut, sehingga di harapkan tidak adanya penimbunan sampah dan waktu kerja yang
                                lebih efisien untuk petugas kebersihan.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Gambaran Umum</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-lg-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/aul/gambaran umum.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Gambaran Umum Sistem</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>Sistem prototype pemantauan sampah ini memanfaatkan teknologi Internet of Things (IoT)
                                dalam perancangannya,dimana nantinya menggunakan tempat sampah buatan yang sudah
                                dimodifikasi dengan tambahan sensor ultrasonic HC-SR04,NodeMCU,modem Wi-Fi dan catuan
                                daya di dalamnya. Nantinya sistem tersebut akan terhubung ke sebuah server / MQTT
                                broker guna mengumpulkan data-data yang didapat dari sensor,MQTT broker yang digunakan
                                ialah mosquito yang ditanam di sebuah virtual private server (VPS) dan pada akhirnya
                                akan ditampilkan pada antarmuka aplikasi untuk pengguna.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Model Sistem</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-lg-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/aul/model sistem.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Sub-model Sistem</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>Gambar di atas merupakan diagram alir pengerjaan, proses inisialisasi dilakukan oleh
                                NodeMCU yaitu untuk mengaktifkan sensor,serta proses menghubungkan NodeMCU ke modem
                                Wi-Fi agar NodeMCU mendapatkan koneksi internet. Kemudian sensor mengambil data secara
                                berkala lalu di proses di NodeMCU,apakah ketinggian sampah pada tempat sampah sudah
                                melewati batas yang di tentukan atau belum. Setiap data yang di dapat akan di kirim ke
                                sebuah IoT platform / server untuk di olah dan di tampilkan ,jika data yang didapat
                                dari sensor sudah melewati batas ketinggian yang ditentukan maka sistem akan memberikan
                                notifikasi langsung ke aplikasi smartphone yang dibuat untuk melakukan pemantauan bahwa
                                ketinggian sampah sudah melewati batas yang di tentukan,namun jika belum melewati batas
                                yang di tentukan,data ketinggian sampah akan tetap di pantau melalui tampilan aplikasi
                                yang di bentuk untuk pemantauan ketinggian sampah tersebut. Selain itu juga akan
                                dilakukan pengujian terhadap performansi sistem yang dibuat</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Diagram Alir</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/aul/flow.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Diagram Alir </figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Gambar di atas merupakan diagram alir pengerjaan, proses inisialisasi dilakukan oleh
                                NodeMCU yaitu untuk mengaktifkan sensor,serta proses menghubungkan NodeMCU ke modem
                                Wi-Fi agar NodeMCU mendapatkan koneksi internet. Kemudian sensor mengambil data secara
                                berkala lalu di proses di NodeMCU,apakah ketinggian sampah pada tempat sampah sudah
                                melewati batas yang di tentukan atau belum. Setiap data yang di dapat akan di kirim ke
                                sebuah IoT platform / server untuk di olah dan di tampilkan ,jika data yang didapat
                                dari sensor sudah melewati batas ketinggian yang ditentukan maka sistem akan memberikan
                                notifikasi langsung ke aplikasi smartphone yang dibuat untuk melakukan pemantauan bahwa
                                ketinggian sampah sudah melewati batas yang di tentukan,namun jika belum melewati batas
                                yang di tentukan,data ketinggian sampah akan tetap di pantau melalui tampilan aplikasi
                                yang di bentuk untuk pemantauan ketinggian sampah tersebut. Selain itu juga akan
                                dilakukan pengujian terhadap performansi sistem yang dibuat</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Komponen Pendukung</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr class="bg-warning">
                                        <th scope="col">No.</th>
                                        <th scope="col">Perangkat Keras</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>NodeMCU v3</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sensor HC-SR04</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Modem Wi-Fi</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Cattu Daya</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table">
                                <thead>
                                    <tr class="bg-warning">
                                        <th scope="col">No.</th>
                                        <th scope="col">Perangkat Lunak</th>
                                        <th scope="col">Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Arduino IDE</td>
                                        <td>Memprogram NodeMCU</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mosquitto</td>
                                        <td>MQTT broker</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Android Studio</td>
                                        <td>software pembuat aplikasi Android.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Wireshark</td>
                                        <td>menganalisis jaringan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>VPS</td>
                                        <td>Sebagai tempat ditanamnya Mosquitto</td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>