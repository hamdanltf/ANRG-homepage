<?php  
  session_start();
  include "../functions/konek.php";

  // Total baik
  	//adm
	  $querybaikadm = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'adm'";
	  $databaikadm = mysqli_query($connect, $querybaikadm);
	  $resultbaikadm = mysqli_fetch_array($databaikadm);
	  $totalbaikadm = $resultbaikadm[0];

  	//aji
	  $querybaikaji = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'aji'";
	  $databaikaji = mysqli_query($connect, $querybaikaji);
	  $resultbaikaji = mysqli_fetch_array($databaikaji);
	  $totalbaikaji = $resultbaikaji[0];

	//cin
	  $querybaikcin = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'cin'";
	  $databaikcin = mysqli_query($connect, $querybaikcin);
	  $resultbaikcin = mysqli_fetch_array($databaikcin);
	  $totalbaikcin = $resultbaikcin[0];

  	//dir
	  $querybaikdir = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'dir'";
	  $databaikdir = mysqli_query($connect, $querybaikdir);
	  $resultbaikdir = mysqli_fetch_array($databaikdir);
	  $totalbaikdir = $resultbaikdir[0];

	 //han
	  $querybaikhan = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'han'";
	  $databaikhan = mysqli_query($connect, $querybaikhan);
	  $resultbaikhan = mysqli_fetch_array($databaikhan);
	  $totalbaikhan = $resultbaikhan[0];

  	//lte
	  $querybaiklte = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'lte'";
	  $databaiklte = mysqli_query($connect, $querybaiklte);
	  $resultbaiklte = mysqli_fetch_array($databaiklte);
	  $totalbaiklte = $resultbaiklte[0];

	  //nab
	  $querybaiknab = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'nab'";
	  $databaiknab = mysqli_query($connect, $querybaiknab);
	  $resultbaiknab = mysqli_fetch_array($databaiknab);
	  $totalbaiknab = $resultbaiknab[0];

	  //rey
	  $querybaikrey = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'rey'";
	  $databaikrey = mysqli_query($connect, $querybaikrey);
	  $resultbaikrey = mysqli_fetch_array($databaikrey);
	  $totalbaikrey = $resultbaikrey[0];

	  //rrs
	  $querybaikrrs = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'rrs'";
	  $databaikrrs = mysqli_query($connect, $querybaikrrs);
	  $resultbaikrrs = mysqli_fetch_array($databaikrrs);
	  $totalbaikrrs = $resultbaikrrs[0];

	  //hna
	  $querybaikhna = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'hna'";
	  $databaikhna = mysqli_query($connect, $querybaikhna);
	  $resultbaikhna = mysqli_fetch_array($databaikhna);
	  $totalbaikhna = $resultbaikhna[0];

	  //zal
	  $querybaikzal = "SELECT COUNT(nim) FROM fitbek WHERE baik = 'zal'";
	  $databaikzal = mysqli_query($connect, $querybaikzal);
	  $resultbaikzal = mysqli_fetch_array($databaikzal);
      $totalbaikzal = $resultbaikzal[0];
      
        // Total pelit
  	//adm
	  $querypelitadm = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'adm'";
	  $datapelitadm = mysqli_query($connect, $querypelitadm);
	  $resultpelitadm = mysqli_fetch_array($datapelitadm);
	  $totalpelitadm = $resultpelitadm[0];

  	//aji
	  $querypelitaji = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'aji'";
	  $datapelitaji = mysqli_query($connect, $querypelitaji);
	  $resultpelitaji = mysqli_fetch_array($datapelitaji);
	  $totalpelitaji = $resultpelitaji[0];

	//cin
	  $querypelitcin = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'cin'";
	  $datapelitcin = mysqli_query($connect, $querypelitcin);
	  $resultpelitcin = mysqli_fetch_array($datapelitcin);
	  $totalpelitcin = $resultpelitcin[0];

  	//dir
	  $querypelitdir = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'dir'";
	  $datapelitdir = mysqli_query($connect, $querypelitdir);
	  $resultpelitdir = mysqli_fetch_array($datapelitdir);
	  $totalpelitdir = $resultpelitdir[0];

	 //han
	  $querypelithan = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'han'";
	  $datapelithan = mysqli_query($connect, $querypelithan);
	  $resultpelithan = mysqli_fetch_array($datapelithan);
	  $totalpelithan = $resultpelithan[0];

  	//lte
	  $querypelitlte = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'lte'";
	  $datapelitlte = mysqli_query($connect, $querypelitlte);
	  $resultpelitlte = mysqli_fetch_array($datapelitlte);
	  $totalpelitlte = $resultpelitlte[0];

	  //nab
	  $querypelitnab = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'nab'";
	  $datapelitnab = mysqli_query($connect, $querypelitnab);
	  $resultpelitnab = mysqli_fetch_array($datapelitnab);
	  $totalpelitnab = $resultpelitnab[0];

	  //rey
	  $querypelitrey = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'rey'";
	  $datapelitrey = mysqli_query($connect, $querypelitrey);
	  $resultpelitrey = mysqli_fetch_array($datapelitrey);
	  $totalpelitrey = $resultpelitrey[0];

	  //rrs
	  $querypelitrrs = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'rrs'";
	  $datapelitrrs = mysqli_query($connect, $querypelitrrs);
	  $resultpelitrrs = mysqli_fetch_array($datapelitrrs);
	  $totalpelitrrs = $resultpelitrrs[0];

	  //hna
	  $querypelithna = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'hna'";
	  $datapelithna = mysqli_query($connect, $querypelithna);
	  $resultpelithna = mysqli_fetch_array($datapelithna);
	  $totalpelithna = $resultpelithna[0];

	  //zal
	  $querypelitzal = "SELECT COUNT(nim) FROM fitbek WHERE pelit = 'zal'";
	  $datapelitzal = mysqli_query($connect, $querypelitzal);
	  $resultpelitzal = mysqli_fetch_array($datapelitzal);
      $totalpelitzal = $resultpelitzal[0];
      
              // Total ganteng cantik
  	//adm
	  $querygantengadm = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'adm'";
	  $datagantengadm = mysqli_query($connect, $querygantengadm);
	  $resultgantengadm = mysqli_fetch_array($datagantengadm);
	  $totalgantengadm = $resultgantengadm[0];

  	//aji
	  $querygantengaji = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'aji'";
	  $datagantengaji = mysqli_query($connect, $querygantengaji);
	  $resultgantengaji = mysqli_fetch_array($datagantengaji);
      $totalgantengaji = $resultgantengaji[0];
      
	 //han
	  $querygantenghan = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'han'";
	  $datagantenghan = mysqli_query($connect, $querygantenghan);
	  $resultgantenghan = mysqli_fetch_array($datagantenghan);
	  $totalgantenghan = $resultgantenghan[0];

  	//lte
	  $querygantenglte = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'lte'";
	  $datagantenglte = mysqli_query($connect, $querygantenglte);
	  $resultgantenglte = mysqli_fetch_array($datagantenglte);
      $totalgantenglte = $resultgantenglte[0];
      
	  //rrs
	  $querygantengrrs = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'rrs'";
	  $datagantengrrs = mysqli_query($connect, $querygantengrrs);
	  $resultgantengrrs = mysqli_fetch_array($datagantengrrs);
      $totalgantengrrs = $resultgantengrrs[0];
      
	  //zal
	  $querygantengzal = "SELECT COUNT(nim) FROM fitbek WHERE ganteng = 'zal'";
	  $datagantengzal = mysqli_query($connect, $querygantengzal);
	  $resultgantengzal = mysqli_fetch_array($datagantengzal);
	  $totalgantengzal = $resultgantengzal[0];

	//cin
	  $querycantikcin = "SELECT COUNT(nim) FROM fitbek WHERE cantik = 'cin'";
	  $datacantikcin = mysqli_query($connect, $querycantikcin);
	  $resultcantikcin = mysqli_fetch_array($datacantikcin);
	  $totalcantikcin = $resultcantikcin[0];

  	//dir
	  $querycantikdir = "SELECT COUNT(nim) FROM fitbek WHERE cantik = 'dir'";
	  $datacantikdir = mysqli_query($connect, $querycantikdir);
	  $resultcantikdir = mysqli_fetch_array($datacantikdir);
	  $totalcantikdir = $resultcantikdir[0];

	  //nab
	  $querycantiknab = "SELECT COUNT(nim) FROM fitbek WHERE cantik = 'nab'";
	  $datacantiknab = mysqli_query($connect, $querycantiknab);
	  $resultcantiknab = mysqli_fetch_array($datacantiknab);
	  $totalcantiknab = $resultcantiknab[0];

	  //rey
	  $querycantikrey = "SELECT COUNT(nim) FROM fitbek WHERE cantik = 'rey'";
	  $datacantikrey = mysqli_query($connect, $querycantikrey);
	  $resultcantikrey = mysqli_fetch_array($datacantikrey);
	  $totalcantikrey = $resultcantikrey[0];

	  //hna
	  $querycantikhna = "SELECT COUNT(nim) FROM fitbek WHERE cantik = 'hna'";
	  $datacantikhna = mysqli_query($connect, $querycantikhna);
	  $resultcantikhna = mysqli_fetch_array($datacantikhna);
      $totalcantikhna = $resultcantikhna[0];
      
              // Total asik
  	//adm
	  $queryasikadm = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'adm'";
	  $dataasikadm = mysqli_query($connect, $queryasikadm);
	  $resultasikadm = mysqli_fetch_array($dataasikadm);
	  $totalasikadm = $resultasikadm[0];

  	//aji
	  $queryasikaji = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'aji'";
	  $dataasikaji = mysqli_query($connect, $queryasikaji);
	  $resultasikaji = mysqli_fetch_array($dataasikaji);
	  $totalasikaji = $resultasikaji[0];

	//cin
	  $queryasikcin = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'cin'";
	  $dataasikcin = mysqli_query($connect, $queryasikcin);
	  $resultasikcin = mysqli_fetch_array($dataasikcin);
	  $totalasikcin = $resultasikcin[0];

  	//dir
	  $queryasikdir = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'dir'";
	  $dataasikdir = mysqli_query($connect, $queryasikdir);
	  $resultasikdir = mysqli_fetch_array($dataasikdir);
	  $totalasikdir = $resultasikdir[0];

	 //han
	  $queryasikhan = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'han'";
	  $dataasikhan = mysqli_query($connect, $queryasikhan);
	  $resultasikhan = mysqli_fetch_array($dataasikhan);
	  $totalasikhan = $resultasikhan[0];

  	//lte
	  $queryasiklte = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'lte'";
	  $dataasiklte = mysqli_query($connect, $queryasiklte);
	  $resultasiklte = mysqli_fetch_array($dataasiklte);
	  $totalasiklte = $resultasiklte[0];

	  //nab
	  $queryasiknab = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'nab'";
	  $dataasiknab = mysqli_query($connect, $queryasiknab);
	  $resultasiknab = mysqli_fetch_array($dataasiknab);
	  $totalasiknab = $resultasiknab[0];

	  //rey
	  $queryasikrey = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'rey'";
	  $dataasikrey = mysqli_query($connect, $queryasikrey);
	  $resultasikrey = mysqli_fetch_array($dataasikrey);
	  $totalasikrey = $resultasikrey[0];

	  //rrs
	  $queryasikrrs = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'rrs'";
	  $dataasikrrs = mysqli_query($connect, $queryasikrrs);
	  $resultasikrrs = mysqli_fetch_array($dataasikrrs);
	  $totalasikrrs = $resultasikrrs[0];

	  //hna
	  $queryasikhna = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'hna'";
	  $dataasikhna = mysqli_query($connect, $queryasikhna);
	  $resultasikhna = mysqli_fetch_array($dataasikhna);
	  $totalasikhna = $resultasikhna[0];

	  //zal
	  $queryasikzal = "SELECT COUNT(nim) FROM fitbek WHERE asik = 'zal'";
	  $dataasikzal = mysqli_query($connect, $queryasikzal);
	  $resultasikzal = mysqli_fetch_array($dataasikzal);
      $totalasikzal = $resultasikzal[0];

              // Total sabar
  	//adm
	  $querysabaradm = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'adm'";
	  $datasabaradm = mysqli_query($connect, $querysabaradm);
	  $resultsabaradm = mysqli_fetch_array($datasabaradm);
	  $totalsabaradm = $resultsabaradm[0];

  	//aji
	  $querysabaraji = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'aji'";
	  $datasabaraji = mysqli_query($connect, $querysabaraji);
	  $resultsabaraji = mysqli_fetch_array($datasabaraji);
	  $totalsabaraji = $resultsabaraji[0];

	//cin
	  $querysabarcin = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'cin'";
	  $datasabarcin = mysqli_query($connect, $querysabarcin);
	  $resultsabarcin = mysqli_fetch_array($datasabarcin);
	  $totalsabarcin = $resultsabarcin[0];

  	//dir
	  $querysabardir = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'dir'";
	  $datasabardir = mysqli_query($connect, $querysabardir);
	  $resultsabardir = mysqli_fetch_array($datasabardir);
	  $totalsabardir = $resultsabardir[0];

	 //han
	  $querysabarhan = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'han'";
	  $datasabarhan = mysqli_query($connect, $querysabarhan);
	  $resultsabarhan = mysqli_fetch_array($datasabarhan);
	  $totalsabarhan = $resultsabarhan[0];

  	//lte
	  $querysabarlte = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'lte'";
	  $datasabarlte = mysqli_query($connect, $querysabarlte);
	  $resultsabarlte = mysqli_fetch_array($datasabarlte);
	  $totalsabarlte = $resultsabarlte[0];

	  //nab
	  $querysabarnab = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'nab'";
	  $datasabarnab = mysqli_query($connect, $querysabarnab);
	  $resultsabarnab = mysqli_fetch_array($datasabarnab);
	  $totalsabarnab = $resultsabarnab[0];

	  //rey
	  $querysabarrey = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'rey'";
	  $datasabarrey = mysqli_query($connect, $querysabarrey);
	  $resultsabarrey = mysqli_fetch_array($datasabarrey);
	  $totalsabarrey = $resultsabarrey[0];

	  //rrs
	  $querysabarrrs = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'rrs'";
	  $datasabarrrs = mysqli_query($connect, $querysabarrrs);
	  $resultsabarrrs = mysqli_fetch_array($datasabarrrs);
	  $totalsabarrrs = $resultsabarrrs[0];

	  //hna
	  $querysabarhna = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'hna'";
	  $datasabarhna = mysqli_query($connect, $querysabarhna);
	  $resultsabarhna = mysqli_fetch_array($datasabarhna);
	  $totalsabarhna = $resultsabarhna[0];

	  //zal
	  $querysabarzal = "SELECT COUNT(nim) FROM fitbek WHERE sabar = 'zal'";
	  $datasabarzal = mysqli_query($connect, $querysabarzal);
	  $resultsabarzal = mysqli_fetch_array($datasabarzal);
      $totalsabarzal = $resultsabarzal[0];

              // Total galak
  	//adm
	  $querygalakadm = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'adm'";
	  $datagalakadm = mysqli_query($connect, $querygalakadm);
	  $resultgalakadm = mysqli_fetch_array($datagalakadm);
	  $totalgalakadm = $resultgalakadm[0];

  	//aji
	  $querygalakaji = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'aji'";
	  $datagalakaji = mysqli_query($connect, $querygalakaji);
	  $resultgalakaji = mysqli_fetch_array($datagalakaji);
	  $totalgalakaji = $resultgalakaji[0];

	//cin
	  $querygalakcin = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'cin'";
	  $datagalakcin = mysqli_query($connect, $querygalakcin);
	  $resultgalakcin = mysqli_fetch_array($datagalakcin);
	  $totalgalakcin = $resultgalakcin[0];

  	//dir
	  $querygalakdir = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'dir'";
	  $datagalakdir = mysqli_query($connect, $querygalakdir);
	  $resultgalakdir = mysqli_fetch_array($datagalakdir);
	  $totalgalakdir = $resultgalakdir[0];

	 //han
	  $querygalakhan = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'han'";
	  $datagalakhan = mysqli_query($connect, $querygalakhan);
	  $resultgalakhan = mysqli_fetch_array($datagalakhan);
	  $totalgalakhan = $resultgalakhan[0];

  	//lte
	  $querygalaklte = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'lte'";
	  $datagalaklte = mysqli_query($connect, $querygalaklte);
	  $resultgalaklte = mysqli_fetch_array($datagalaklte);
	  $totalgalaklte = $resultgalaklte[0];

	  //nab
	  $querygalaknab = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'nab'";
	  $datagalaknab = mysqli_query($connect, $querygalaknab);
	  $resultgalaknab = mysqli_fetch_array($datagalaknab);
	  $totalgalaknab = $resultgalaknab[0];

	  //rey
	  $querygalakrey = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'rey'";
	  $datagalakrey = mysqli_query($connect, $querygalakrey);
	  $resultgalakrey = mysqli_fetch_array($datagalakrey);
	  $totalgalakrey = $resultgalakrey[0];

	  //rrs
	  $querygalakrrs = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'rrs'";
	  $datagalakrrs = mysqli_query($connect, $querygalakrrs);
	  $resultgalakrrs = mysqli_fetch_array($datagalakrrs);
	  $totalgalakrrs = $resultgalakrrs[0];

	  //hna
	  $querygalakhna = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'hna'";
	  $datagalakhna = mysqli_query($connect, $querygalakhna);
	  $resultgalakhna = mysqli_fetch_array($datagalakhna);
	  $totalgalakhna = $resultgalakhna[0];

	  //zal
	  $querygalakzal = "SELECT COUNT(nim) FROM fitbek WHERE galak = 'zal'";
	  $datagalakzal = mysqli_query($connect, $querygalakzal);
	  $resultgalakzal = mysqli_fetch_array($datagalakzal);
      $totalgalakzal = $resultgalakzal[0];



?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nominasi Assisten</title>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"> -->

    <!-- javascript -->
    <script type="text/javascript" src="../js/ajax.js"></script>

    <!-- Highchart -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../code/highcharts.js"></script>
    <script type="text/javascript" src="../code/highcharts-more.js"></script>
    <script type="text/javascript" src="../code/modules/exporting.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- style.css -->
    <link rel="stylesheet" href="style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../img/common/logo anrg.png">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

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

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!-- Konten utama -->
                        <div class="konten-utama">

                            <!-- Awal konten -->
                            <div class="isi-konten-dashboard">

                                <!-- Digram BATANG dengan baik dan JUMLAH PENDAFTAR per baik -->
                                <div class="col-lg-12 "
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartbaik"></div>
                                    <!-- CHART baik -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartbaik', {
                                            title: {
                                                text: 'Assisten terbaik'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'CIN', 'DIR', 'HAN', 'LTE', 'NAB', 'REY', 'RRS', 'HNA', 'ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalbaikadm, $totalbaikaji, $totalbaikcin, $totalbaikdir, $totalbaikhan, $totalbaiklte, $totalbaiknab, $totalbaikrey, $totalbaikrrs, $totalbaikhna, $totalbaikzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartpelit"></div>
                                    <!-- CHART pelit -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartpelit', {
                                            title: {
                                                text: 'Assisten terpelit'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'CIN', 'DIR', 'HAN', 'LTE', 'NAB','REY', 'RRS', 'HNA', 'ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalpelitadm, $totalpelitaji, $totalpelitcin, $totalpelitdir, $totalpelithan, $totalpelitlte, $totalpelitnab, $totalpelitrey, $totalpelitrrs, $totalpelithna, $totalpelitzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartganteng"></div>
                                    <!-- CHART ganteng -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartganteng', {
                                            title: {
                                                text: 'Assisten terganteng'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'HAN', 'LTE', 'RRS','ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalgantengadm, $totalgantengaji, $totalgantenghan, $totalgantenglte, $totalgantengrrs,$totalgantengzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartcantik"></div>
                                    <!-- CHART cantik -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartcantik', {
                                            title: {
                                                text: 'Assisten tercantik'
                                            },

                                            xAxis: {
                                                categories: ['CIN', 'DIR','NAB', 'REY', 'HNA']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalcantikcin, $totalcantikdir, $totalcantiknab, $totalcantikrey, $totalcantikhna"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartasik"></div>
                                    <!-- CHART asik -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartasik', {
                                            title: {
                                                text: 'Assisten terasik'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'CIN', 'DIR', 'HAN', 'LTE', 'NAB', 'REY', 'RRS', 'HNA', 'ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalasikadm, $totalasikaji, $totalasikcin, $totalasikdir, $totalasikhan, $totalasiklte, $totalasiknab, $totalasikrey, $totalasikrrs, $totalasikhna, $totalasikzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>

                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartsabar"></div>
                                    <!-- CHART sabar -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartsabar', {
                                            title: {
                                                text: 'Assisten tersabar'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'CIN', 'DIR', 'HAN', 'LTE', 'NAB', 'REY', 'RRS', 'HNA', 'ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalsabaradm, $totalsabaraji, $totalsabarcin, $totalsabardir, $totalsabarhan, $totalsabarlte, $totalsabarnab, $totalsabarrey, $totalsabarrrs, $totalsabarhna, $totalsabarzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>
                                
                                <div class="col-lg-12"
                                    style="background-color: #fff; height: 430px; margin-bottom: 20px;">
                                    <div id="chartgalak"></div>
                                    <!-- CHART galak -->
                                    <script type="text/javascript">
                                        var chart = Highcharts.chart('chartgalak', {
                                            title: {
                                                text: 'Assisten tergalak'
                                            },

                                            xAxis: {
                                                categories: ['ADM', 'AJI', 'CIN', 'DIR', 'HAN', 'LTE', 'NAB', 'REY', 'RRS', 'HNA', 'ZAL']
                                            },
                                            tooltip: {
                                                pointFormat: 'Pendaftar : <b>{point.y} orang</b>'
                                            },

                                            series: [{
                                                type: 'column',
                                                colorByPoint: true,
                                                data: [
                                                    <?php echo "$totalgalakadm, $totalgalakaji, $totalgalakcin, $totalgalakdir, $totalgalakhan, $totalgalaklte, $totalgalaknab, $totalgalakrey, $totalgalakrrs, $totalgalakhna, $totalgalakzal,"; ?>
                                                ],
                                                showInLegend: false
                                            }]
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
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
</body>

</html>
<?php  ?>