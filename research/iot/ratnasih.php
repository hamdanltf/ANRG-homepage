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
                    <h3 class="text-center">Aquaponic Automation Prototype System Based on Internet of Things (IoT)</h3>
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
                            <h5 class="mt-0">Ratnasih</h5>
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
                        <!-- <div class="col-md-6">
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
                        </div> -->

                        <div class="col-md-12">
                            <p>Akuaponik adalah sistem pertanian yang mengkombinasikan sistem akuakultur dengan sistem
                                hidroponik dalam lingkungan yang bersifat simbiotik. Tentunya sistem akuaponik akan
                                sangat menguntungkan karena dapat memelihara ikan sekaligus bercocok tanam. Namun
                                disisi lain akuaponik sangat membutuhkan perhatian dan perawatan karena keadan sistem
                                akuakultur dan hidroponik akan saling mempengaruhi satu sama lain.</p>
                            <p>Maka dari itu didalam tugas akhir ini dirancang sebuah prototype sistem otomasi
                                akuaponik untuk melakukan proses monitoring dan menjalankan aktuator yang bekerja
                                otomatis ketika terjadi perubahan pada unsur tanaman dan akuakultur sesuai konsep IoT
                                (Internet Of Things). Parameter unsur tersebut difokuskan menggunakan nodeMCU sebagai
                                mikrokontroler, sensor ultrasonic, sensor ph, sensor suhu air (DS18B20), relay, dan
                                micro servo. Protokol komunikasi IoT yang digunakan untuk tugas akhir ini adalah MQTT
                                (Message Queue Telemetry Transport) dan mengunakan interface berupa aplikasi android.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Model Sistem</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/ciat/model sistem.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Pemodelan Sistem</figcaption>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Sistem ini adalah proses perancangan sistem otomasi akuaponik yang terdiri dari
                                pengisian air, pemberian pakan ikan, pemberian carian pH up dan pH down dan pengawasan
                                kondisi lingkungan terhadap ikan dan tanaman dengan memanfaatkan sistem IoT. Sehingga
                                akuaponik dapat dikontrol secara otomatis dengan pengawasan yang dapat dilakukan dari
                                jarak jauh. Pada sistem ini, pengawasan menggunakan beberapa sensor dan aktuator yang
                                akan bekerja membaca kondisi lingkungan akuaponik dan terhubung dengan jaringan
                                internet untuk proses pengiriman data ke broker MQTT untuk akhirnya dapat sampai ke
                                aplikasi android.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Sub-model Sistem</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/ciat/submodel siste,.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Sub-model Sistem</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>Gambar diatas menunjukkan bahwa sensor node yang terbagi menjadi 2 nodeMCU yang masing
                                masing terhubung dengan sensor dan aktuator. Setiap sensor node akan melakukan
                                pemindaian lingkungan sekitar akuaponik untuk mendapatkan data. Data tersebut akan
                                diproses nodeMCU dengan acuan threshold yang telah tentukan. Setelah itu nodeMCU akan
                                memberikan perintah ke relay dan microservo untuk melakukan aksi lanjutan jika data
                                yang didapatkan melewati threshold yang telah ditentukan tersebut. Selain itu dalam
                                waktu yang bersamaan nodeMCU mengirimkan hasil data pemindaian sensor ke MQTT broker
                                untuk diteruskan ke aplikasi android.</p>
                        </div>
                    </div>

                    <div class="row judul justify-content-center">
                        <h1>Perancangan</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/ciat/raftaing.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Model Rafting</figcaption>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>Akuaponik memiliki berbagai macam jenis sistem yang dapat digunakan, mulai dari NFT,
                                DFT, rafting system, hingga sistem pasang surut. Setiap jenis sistem tersebut memiliki
                                kekurangan dan kelebihan masing – masing. Pada tugas akhir ini, sistem akuaponik
                                rafting system karena sistem tersebut merupakan sistem yang paling sederhana untuk
                                diterapkan dirumah karena mengingat skala akuaponik yang dibuat pada tugas akhir ini
                                adalah skala rumahan. Rafting system adalah sistem yang menempatkan tanaman tepat
                                diatas permukaan tank ikan dan dibiarkan mengapung menggunakan sterofoam. Untuk menjaga
                                oksigen tetap cukup, maka ditambahkan aerator di dalam tank ikan. Selain itu,
                                ditambahkan juga pompa air untuk menyaring kotoran agar kebersihan air tank tetap
                                terjaga.</p>
                        </div>
                    </div>


                    <div class="row judul justify-content-center">
                        <h1>Diagram Alir</h1>
                    </div>
                    <hr>
                    <div class="row isi text-justify">
                        <div class="col-md-6 offset-md-3">
                            <div class="card card border-white mb-3">
                                <img class="card-img-top" src="../../img/research/iot/ciat/flow.jpg" alt="Card image cap">
                                <figcaption class="figure-caption text-center">Diagram Alir </figcaption>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Gambar di atas menunjukan alur kerja dari sistem otomasi akuaponik yang dimulai dari
                                proses pemindaian data oleh sensor ultrasonic, sensor pH, dan sensor DB18B20 hingga
                                data tersebut sampai ke aplikasi android. Proses awal dimulai dengan inisilisasi
                                perangkat dan koneksi internet semua perangkat. Tahap ini bertujuan untuk memastikan
                                bahwa perangkat yang digunakan dapat berjalan dengan baik dan terhubung dengan baik.
                                Setelah itu semua sensor akan melakukan pemindaian sesuai dengan fungsi mereka masing –
                                masing. Data tersebut kemudian diproses oleh NodeMCU untuk dilakukan pengecekan sesuai
                                dengan threshold yang telah ditentukan. Jika threshold terlampaui, maka NodeMCU akan
                                memerintahkan aktuator untuk memulai aksi lanjutan. Berikut ini adalah aksi lanjutan
                                yang akan dilakukan jika threshold terlampaui :</p>
                            <ol>
                                <li>Jika ketinggian air melampaui threshold, maka relay akan menghidupkan solenoid
                                    valve untuk melakukan pengisian air.</li>
                                <li>Jika pH air melampaui threshold, maka micro servo akan membuka cairan pH up dan pH
                                    down.Jika pH air melampaui threshold, maka micro servo akan membuka cairan pH up
                                    dan pH down.</li>
                                <li>Jika suhu air melampaui threshold, maka relay akan menghidupkan lampu untuk
                                    menaikan kembali suhu air</li>
                                <li>Jika waktu alarm melampaui threshold, maka micro servo akan bergerak untuk
                                    memberikan pakan ikan.</li>
                            </ol>
                            <p>Selain itu, disaat yang bersamaan data tersebut dikirimkan ke MQTT broker. Kemudian data
                                tersebut diteruskan ke aplikasi android sesuai dengan topik yang telah ditentukan dan
                                berlangganan sebelumnya, sehingga pengguna dapat melakukan pemantauan terhadap keadaan
                                sistem.</p>
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
                                        <td>NodeMCU</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Sensor ultrasonic</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sensor pH</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sensor DS18B20</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Relay 2 Channel</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>microservo</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Power Supply Board</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Lampu</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Selenoid valve</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Laptop</td>
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
                                        <td>Untuk membuat dan mengunggah script ke NodeMCU</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Android Studio</td>
                                        <td>Untuk membuat aplikasi android</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>VPS</td>
                                        <td>Untuk membuat server virtual, agar monitoring dapat dilakukan dimana saja.</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Wireshark</td>
                                        <td>menganalisis jaringan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Putty </td>
                                        <td>Untuk mengkonfigurasi MQTT broker</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Library ESP8266WiFi</td>
                                        <td>Untuk dapat menggunakan NodeMCU sebagai mikrokontroler</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Library MQTT Client</td>
                                        <td>Untuk dapat membuat script terhubung dengan MQTT broker</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Library OneWire & DallasTemperature</td>
                                        <td>Library yang digunakan untuk dapat menjalankan sensor DS18B20</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Library TimeLib & TimeAlarms</td>
                                        <td>Library yang digunakan untuk dapat menjalankan alarm</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Library servo</td>
                                        <td>Library yang digunakan untuk dapat menjalankan servo</td>
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