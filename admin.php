<?php 
include 'config.php';
// mengaktifkan session
session_start();
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Berhasil</title>
</head>
<body>
<div class="Kembali">
    <p>Kembali ke halaman login? <a href="index.php" style="Color:black">Klik disini</a></p>
</div>
</body>
</html>
