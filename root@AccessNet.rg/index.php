<?php  
  
  session_start();
  include "../functions/konek.php";
  if(isset($_POST['submitLogin'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $query = "select * from admin where user='$user' and pass='$pass'";
    $data = mysqli_query ($connect, $query);
    
    if(mysqli_num_rows($data)>0){
      $_SESSION['login'] = $user;
      echo "<script>window.location.href = 'admin-jtpt.php';</script>";
    }
    else{
      echo "<h3 style='margin-top:100px;' align='center'>Akses login yang anda masukan salah. Silahkan ulangi kembali pada link dibawah ini!</h3>";
      echo "<h3 align='center'><a href='index.php'><b>LOGIN ADMIN</b></a></h3>";
    }
  }
  else{
?>
<!DOCTYPE html>
<html>

<head>
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

	<title>Admin ANRG</title>
</head>

<body style="background-color: orange;">
	<div class="container" style="padding-top:7%">
		<div class="row justify-content-center">
			<div class="col-md-4 col-lg-offset-4"
				style="border: solid; border-color: #ccc; padding-bottom: 10px; background-color: #fff;"><br>

				<h2 class="text-center"><b>Login Admin</b></h2><br><br>
				<form class="form-horizontal" class="form-center " method="post" role="form">
					<div class="form-group">
						<div class="col-4 offset-4">
							<img src="../img/common/logo anrg.png" class="img-fluid" alt="">
						</div>
						<br><br>
						<label for="user" class="sr-only">user</label>
						<div class="col-md-12">
							<input type="text" class="form-control" id="user" name="user" placeholder="user" required>
						</div>
					</div>
					<div class="form-group">
						<label for="pass" class="sr-only">pass</label>
						<div class="col-md-12">
							<input type="password" class="form-control" id="pass" name="pass" placeholder="pass" required>
						</div>
					</div><br>
					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-warning btn-lg btn-block" name="submitLogin">Login</button>
						</div>
					</div>
				</form><br><br><br>
				<p class="text-center"><b>Access Network Research &copy; 2019</b> <br>theme by Hamdan Latief</p><br>
			</div>


		</div>
	</div>
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
<?php  
  }
 ?>