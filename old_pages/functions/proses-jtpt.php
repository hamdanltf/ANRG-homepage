<?php

			include("konek.php");

			
				$praktikan = htmlspecialchars($_POST['praktikan']);
				$nim = htmlspecialchars($_POST['nim']);
				$kelompok = htmlspecialchars($_POST['kelompok']);
				$adm = htmlspecialchars($_POST['adm']);
				$aji = htmlspecialchars($_POST['aji']);
				$cin = htmlspecialchars($_POST['cin']);
				$dir = htmlspecialchars($_POST['dir']);
				$han = htmlspecialchars($_POST['han']);
				$lte = htmlspecialchars($_POST['lte']);
				$nab = htmlspecialchars($_POST['nab']);
				$rey = htmlspecialchars($_POST['rey']);
				$rrs = htmlspecialchars($_POST['rrs']);
				$hna = htmlspecialchars($_POST['hna']);
				$zal = htmlspecialchars($_POST['zal']);
				$baik = ($_POST['baik']);
				$pelit = ($_POST['pelit']);
				$ganteng = ($_POST['ganteng']);
				$cantik = ($_POST['cantik']);
				$asik = ($_POST['asik']);
				$sabar = ($_POST['sabar']);
				$galak = ($_POST['galak']);


				$query = "INSERT INTO fitbek SET praktikan='$praktikan',nim='$nim', kelompok='$kelompok',adm='$adm',aji='$aji',cin='$cin',dir='$dir',han='$han',lte='$lte',nab='$nab',rey='$rey',rrs='$rrs',hna='$hna',zal='$zal',baik='$baik',pelit='$pelit',ganteng='$ganteng',cantik='$cantik',asik='$asik',sabar='$sabar',galak='$galak' ";

				$result = mysqli_query($connect, $query);

				if($result){
					//header("location:jtpt.php");
					echo"BERHASIL. Klik <a href='../quest/jtpt.php'>disini</a> untuk melanjutkan";
				}
				else{
					echo"GAGAL DIMASUKKAN. Klik <a href='../quest/jtpt.php'>disini</a> untuk mengulangi input data";
				}
			
		?>