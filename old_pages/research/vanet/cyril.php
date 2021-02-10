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

    <title>VANET Access Network RG</title>
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
            <source src="../../img/research/vanet/hero.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100  align-items-center">
                <div class="w-100 text-white">
                    <img src="../../img/home/vanet.svg" alt="">
                    <h3 class="text-center">Collision Avoidance System Prototype on Smart Car Based on Vehicular Ad-Hoc
                        Network (VANET)</h3>
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
                            <h5 class="mt-0">Cyril Nugrahutama Kurnaman</h5>
                            <p>Divisi VANET (Alumni)</p>
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
                        <div class="col-md-6">
                            <div class="row">
                                <div class="videowrapper">
                                    <iframe width="1000" height="480" src="https://www.youtube.com/embed/qBuuZLq-0Mo"
                                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="row gambar">
                                <div class="col-lg-6">
                                    <img src="../../img/research/vanet/cyril/187352 (1).jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <img src="../../img/research/vanet/cyril/187350 (1).jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p>Tabrakan antar mobil merupakan salah satu penyebab kecelakaan lalu lintas akibat
                                kelalaian
                                pengemudi yang mengabaikan kecepatan dan jarak aman antar mobil. Demi mengurangi hal
                                tersebut,
                                dibutuhkan sebuah komunikasi antar mobil agar pengemudi mobil dapat bertukar informasi
                                jarak
                                dan kecepatan dengan mobil di depannya. Selain itu, dibutuhkan pula sebuah sistem
                                dimana
                                semakin dekat jarak antar mobil maka mobil semakin memperlambat lajunya sehingga mobil
                                dapat
                                menjaga jarak aman dengan objek atau mobil di depannya dan mengantisipasi kemungkinan
                                terjadinya kecelakaan akibat tabrakan antar mobil</p>
                            <p>Sistem pencegah tabrakan dirancang menggunakan konsep vehicular ad-hoc network (VANET)
                                yang
                                memanfaatkan komunikasi vehicle-to-vehicle (V2V) dimana terdapat dua node yang saling
                                melakukan
                                pertukaran informasi data hingga data dapat ditampilkan kepada pengguna melalui laman
                                situs
                                web.</p>
                            <p>Purwarupa sistem pencegah tabrakan pada mobil pintar bekerja dengan cara mengambil data
                                jarak
                                mobil yang didapat dari sensor ultrasonik dan data kecepatan mobil yang didapat dari
                                sensor
                                kecepatan. Data yang telah diambil kemudian dikirimkan menuju mikrokontroler berupa
                                Raspberry
                                Pi 3B agar dapat dilanjutkan menuju motor driver sehingga kecepatan optimal mobil dapat
                                disesuaikan dengan jarak yang telah didapat dan menuju web server agar pengguna dapat
                                melihat
                                tampilan data yang telah diambil oleh sensor. Data yang ditampilkan berupa jarak antara
                                mobil
                                dengan objek atau mobil di depannya, kecepatan optimal mobil, dan data-data tambahan
                                lainnya
                                seperti waktu, status jarak, delay, dan throughput</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Gambaran Umum</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/vanet/cyril/model sistem.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Sistem secara umum</figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Pada penelitian ini dilakukan suatu perancangan purwarupa sistem pencegah tabrakan pada
                                mobil pintar memanfaatkan teknologi vehicular adhoc network (VANET) dengan menerapkan
                                komunikasi vehicle-to-vehicle (V2V). Dalam perancangannya, sistem ini menggunakan dua
                                buah
                                purwarupa mobil pintar yang masing-masing dipasang sebuah perangkat mikrokontroler
                                dengan
                                komponen sensor dan komponen pendukung lainnya. Sistem ini memungkinkan komunikasi
                                antar
                                mobil atau komunikasi V2V terjadi dan memungkinkan mobil untuk saling mengirim dan
                                menerima
                                informasi data yang dapat diakses pengguna melalui web server. Selain itu, sistem
                                pencegah
                                tabrakan akan bekerja secara bertahap ketika jarak minimum mobil tercapai.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Model Sistem</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-lg-12">
                            <p>Sistem pencegah tabrakan yang diterapkan pada purwarupa mobil pintar ini memanfaatkan
                                teknologi vehicular ad-hoc network (VANET) dengan menerapkan komunikasi
                                vehicle-to-vehicle (V2V). Pada bagian blok pertama dilakukan perancangan hardware.
                                Sistem ini menerapkan standar komunikasi IEEE 802.11n dengan menggunakan Raspberry Pi
                                3B sebagai mikrokontroler yang sudah terintegrasi dengan motor driver, sensor
                                kecepatan, sensor ultrasonik, boost converter, wireless adapter, dan modul real-time
                                clock. Seluruh komponen tersebut dirancang di chassis robot mobil pintar 4WD. Kemudian,
                                pada bagian blok kedua dilakukan perancangan software dimana kedua mobil melakukan
                                komunikasi V2V dan saling mengirim dan menerima informasi data melalui database dan web
                                server untuk ditampilkan pada pengguna.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Diagram Alir Sistem</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/vanet/cyril/flowall.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Digram alir keseluruhan</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Langkah pertama pada diagram alir menunjukkan proses pengambilan informasi data melalui
                                komponen sensor. Dilanjutkan dengan proses pengecekan koneksi jaringan ad-hoc pada
                                mobil A. Setelah itu mengecek jangkauan jarak antara mobil A dan mobil B. Apabila jarak
                                antar mobil terlalu dekat, maka mobil akan mengkalkulasi ulang jarak dan kecepatan
                                hingga mobil berada dalam jarak dan kecepatan optimal. Hasil pengambilan informasi data
                                kedua mobil tersebut dikirimkan ke web server melalui database MySQL agar kemudian
                                informasi data tersebut dapat diakses oleh pengguna secara real-time melalui web
                                server.</p>
                        </div>
                    </div>


                    <div class="row judul justify-content-center">
                        <h1>Data sensor</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/vanet/cyril/flowsensor.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Diagram Alir Pengambilan Data</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Gambar di atas menggambarkan proses pembacaan dan pengambilan data komponen sensor yang
                                digunakan pada sistem. Pada prosesnya, sistem pencegah tabrakan membutuhkan sensor
                                ultrasonik HC-SR04 untuk menghitung jarak antar mobil (untuk mobil B) dan jarak antara
                                mobil dengan objek (untuk mobil A). Selain jarak, kecepatan mobil dideteksi menggunakan
                                sensor kecepatan FC-03. Kecepatan dihitung dengan memanfaatkan sinar inframerah yang
                                terpancar di sensor tersebut menghasilkan jumlah revolusi pada waktu tertentu melalui
                                perputaran encoder disk dari kondisi low ke kondisi high. Jarak dan kecepatan tersebut
                                menjadi masukan untuk Raspberry Pi 3B agar dapat dikirimkan ke web server melalui
                                database dan diakses oleh pengguna.</p>
                        </div>
                    </div>


                    <div class="row judul justify-content-center">
                        <h1>Pertukaran Data</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/vanet/cyril/flowsensor2.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Diagram Alir Pertukaran Data</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Gambar di atas menggambarkan proses pengiriman dan pertukaran data sensor dari mulai
                                pengambilan data sensor hingga proses pertukaran data sensor di database dan web
                                server. Setelah pengambilan data sensor dilakukan, maka hal selanjutnya yang terjadi
                                tergantung dari fungsionalitas mobil. Mobil A melakukan pembangunan koneksi jaringan
                                ad-hoc sedangkan mobil B melakukan penyambungan koneksi ke jaringan ad-hoc mobil A.
                                Data sensor yang dikirim merupakan hasil kalkulasi dari proses pengambilan data sensor
                                HC-SR04 dan sensor FC-03.</p>
                        </div>
                    </div>


                    <div class="row judul justify-content-center">
                        <h1>Pengaturan Kecepatan</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/vanet/cyril/flowkecepatan.png" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Diagram Alir Pengaturan kecepatan</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Gambar di atas menggambarkan proses pengaturan kecepatan optimal mobil dari mulai
                                mendeteksi objek di depan (untuk mobil A) dan mengecek kedekatan jarak antar mobil
                                (untuk mobil B) hingga bagaimana mobil dapat memiliki kecepatan maksimum dan minimum.
                                Pengaturan kecepatan optimal mobil memanfaatkan motor DC yang tersambung dengan motor
                                driver dan teknologi PWM yang menggunakan siklus kerja (duty cycle). Duty cycle yang
                                dihasilkan dapat mengatur kecepatan optimal mobil sesuai dengan pembatas jarak yang
                                telah ditentukan.</p>
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
                                        <th scope="col">Spesifikasi</th>
                                        <th scope="col">Fungsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Raspberry Pi 3+ model B </td>
                                        <td>
                                            <ol>
                                                <li>ARMv8 (64/32-bit architecture)</li>
                                                <li>GHz 64-bit quad-core ARM Cortex A53</li>
                                                <li>1 GB RAM</li>
                                            </ol>
                                        <td>Mikrokomputer/Pusat Pemprosesan Sistem</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sensor Ultrasonik HC-SR04 </td>
                                        <td>
                                            <ol type="1">
                                                <li>Catu daya: +5V DC</li>
                                                <li>Arus statis: < 2mA</li> <li>Arus DC: 15mA</li>
                                                <li>Sudut efektif: < 15°</li> <li>Jarak jangkauan: 2-400cm </li>
                                                <li>Resolusi: 0,3 cm</li>
                                            </ol>
                                        </td>
                                        <td>Menentukan jarak antara sensor dan mobil atau objek terdekat di jalurnya.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sensor Kecepatan FC-03</td>
                                        <td>
                                            <ol>
                                                <li>Sudut pengukuran: 30° Trigger input pulse: 10 µs</li>
                                                <li>Dimensi: 45 mm x 20 mm x 15 mm</li>
                                                <li>Berat: ± 10 g</li>
                                                <li>Tegangan input: 3,3~5V</li>
                                                <li>Bentuk output: Digital output (0 dan 1)</li>
                                                <li>Dimensi: 3,8cm x 1,4cm x 0,7cm</li>
                                                <li>Berat: 3 g</li>
                                                <li>Lubang sekrup 3mm untuk pemasangan </li>
                                            </ol>
                                        </td>
                                        <td>Menentukan kecepatan mobil berdasarkan RPM </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Motor Driver L298N </td>
                                        <td>
                                            <ol>
                                                <li>Tegangan input: 3,2~60V DC </li>
                                                <li>Catu daya: 5–35V DC </li>
                                                <li>Arus maksimum: 2A </li>
                                                <li>Arus yang bekerja: 0~36mA </li>
                                                <li>Konsumsi daya maksimum: 20W </li>
                                                <li>Suhu penyimpanan: - 25°C ~ +130°C </li>
                                            </ol>
                                        </td>
                                        <td>pengubah kontrol PWM untuk menggerakkan motor DC</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Boost Converter MT3608</td>
                                        <td>
                                            <ol>
                                                <li>Dimensi: 3,4cm x 4,3cm x 2,7cm </li>
                                                <li>Tegangan input: 2V hingga 24V</li>
                                                <li>Frekuensi tetap: 1,2MHz</li>
                                                <li>Pembatas arus internal: 4A</li>
                                                <li>Tegangan output dapat disesuaikan hingga batasan tegangan output
                                                    maksimum 28V</li>
                                                <li>Efisiensi hingga 97%</li>
                                            </ol>
                                        </td>
                                        <td>Meningkatkan daya output</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Wireless Adapter TL-WN722N</td>
                                        <td>
                                            <ol>
                                                <li>Antarmuka USB 2.0 </li>
                                                <li>WPS Button</li>
                                                <li>Dimensi: 93.5 x 26 x 11mm </li>
                                                <li>Tipe antena: Detachable Omni Directional (RP-SMA) </li>
                                                <li>Gain antena: 4dBi</li>
                                                <li>Standar nirkabel: IEEE 802.11n, 802.11g, 802.11b </li>
                                                <li>Frekuensi: 2,4-2,4835GHz </li>
                                                <li>Signal rate: Sampai dengan 150 Mbps, 54 Mbps, dan 11 Mbps untuk
                                                    802.11n, 802.11g, dan 802.11b</li>
                                                <li>Transmit power: < 20dBm </li> <li>Wireless mode: mode Ad-Hoc atau
                                                        mode infrastruktur </li>
                                            </ol>
                                        </td>
                                        <td>Sebagai gerbang komunikasi antarmobil. </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Real-time clock DS3231 </td>
                                        <td>
                                            <ol>
                                                <li>Waktu real-time yang menghitung detik, menit, jam, tanggal, bulan,
                                                    hari, dan tahun hingga 2100 tahun.</li>
                                                <li>Akurasi ±2 ppm dari suhu 0°C sampai +40°C</li>
                                                <li>Akurasi ±3.5 ppm dari suhu -40°C sampai +85°C </li>
                                                <li>Tegangan operasi: 3,3-5,55 V </li>
                                                <li>Ukuran: 38mm (panjang) * 22mm (lebar) * 14mm (tinggi)</li>
                                                <li>Berat: 8g </li>
                                            </ol>
                                        </td>
                                        <td>Sebagai penunjuk waktu lokal pada mobil jikalau sewaktu-waktu terjadi
                                            kecelakaan</td>
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