<?php
	session_start();
	include "koneksii.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
<form method="post">
	<label>Username	:	</label>
	<input type="text" name="fusername"><br><br>
	<label>password:	</label>
	<input type="password" name="fpassword"><br><br>
	<button type="submit" name="fmasuk">Login</button>
</form>

<?php
 if (isset($_POST['fmasuk'])){
 	$username = $_POST['fusername'];
 	$password = $_POST['fpassword'];
 	$qry = mysqli_query($koneksii,"SELECT * FROM tab_login WHERE username = '$username' AND password = '$password'");
 	$cek = mysqli_num_rows($qry);
 	if ($cek==1){
 		$_SESSION['userweb']=$username;
 		header ('location:tampilkontak.php');
 		exit;
 	}
 	else {
 		echo "Maaf username dan password anda salah";
 	}
 }
?>
</body>
</html>
