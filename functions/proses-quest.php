<?php

			include("konek.php");

			
				$name = htmlspecialchars($_POST['name']);
				$email = htmlspecialchars($_POST['email']);
				$phone = htmlspecialchars($_POST['phone']);
				$alamat = htmlspecialchars($_POST['alamat']);
				$spesification = htmlspecialchars($_POST['spesification']);


				$query = "INSERT INTO quest SET name='$name',email='$email', phone='$phone',alamat='$alamat',spesification='$spesification' ";

				$result = mysqli_query($connect, $query);

				if($result){
					//header("location:index.php");
					echo"BERHASIL. Klik <a href='../quest/index.php'>disini</a> untuk melanjutkan";
				}
				else{
					echo"GAGAL DIMASUKKAN. Klik <a href='../quest/index.php'>disini</a> untuk mengulangi input data";
				}
			
		?>