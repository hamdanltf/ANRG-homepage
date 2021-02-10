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

    <title>Admin ANRG</title>
</head>

<body>
    <!-- Navbar mulai -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="admin-jtpt.php">root@AccessNet.rg</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="admin-jtpt.php">JTPT</a>
                    <a class="nav-item nav-link" href="admin-quest.php">Quest</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar bubar -->

    <!-- riset mulai -->
    <section class="riset" id="riset">
        <div class="riset-content">
            <div class="container">

                <div class="row judul justify-content-center">
                    <h1>Feedback JTPT</h1>
                </div>
                <hr>

                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="admin-jtpt.php">Praktikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - adm.php">ADM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - aji.php">AJI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - cin.php">CIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - dir.php">DIR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - han.php">HAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - lte.php">LTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - nab.php">NAB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - rey.php">REY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - rrs.php">RRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - hna.php">HNA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - zal.php">ZAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-jtpt - nominasi.php">Nominasi</a>
                    </li>
                </ul>
                <br>

                <div class="row isi text-justify">

                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr class="bg-warning">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Praktikan</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Kesan dan Pesan</th>
                                </tr>

                                <!-- awal dari database -->

                                <?php 
                    include("../functions/konek.php");
                    $query = "SELECT * FROM quest";
                    $result = mysqli_query($connect, $query);
                    $total = mysqli_num_rows($result);
                    $sqlQuery = mysqli_query($connect, "SELECT * FROM fitbek ORDER BY nim ASC"  );
                            $no = 1;
                            while($data = mysqli_fetch_array($sqlQuery)){ 
                              echo '<tr>';
                                echo '<td>'.$no.'</td>';  //menampilkan nomor urut
                                echo '<td>'.$data['praktikan'].'</td>';                 
                                echo '<td>'.$data['nim'].'</td>';  
                                echo '<td>'.$data['aji'].'</td>';                   
                            echo "</tr>";                            
                              $no++;
                            }              
                      mysqli_close($connect);
                    ?>
                                <!-- akhir data sto dari database -->
                            </thead>
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

        <nav class="navbar navbar-light" style="background-color: black;">
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