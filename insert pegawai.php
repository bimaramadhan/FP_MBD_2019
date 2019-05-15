
<form action="insert pegawai.php" method="post">
filter<br>
id: <input type=text name=id><br>
nama: <input type=text name=nama><br>
tgl lahir: <input type=text name=tgllahir> formatnya tahun-bulan-tanggal<br>
alamat: <input type=text name=alamat><br>
notelp:	<input type=text name=telp><br>
bagian: <input type=text name=bagian><br>
<input type=submit>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
//sesuaikan nama DB!!
$dbname = "fp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//ini input hadling
if (!isset($_POST["id"])&&!isset($_POST["nama"])&&!isset($_POST["tgllahir"])&&!isset($_POST["alamat"])&&!isset($_POST["telp"])&&!isset($_POST["bagian"]))
	{
		//echo "incomplete form";
		exit();
	}

//ini sqlnya copy aja ke sini
$sql = "INSERT INTO `pegawai`(`pg_id`, `pg_nama`, `pg_tgl_lahir`, `pg_alamat`, `pg_notelp`, `pg_bagian`) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["tgllahir"]."','".$_POST["alamat"]."','".$_POST["telp"]"','".$_POST["bagian"]."')";
$result = $conn->query($sql);
echo "sukses";
$conn->close();
?>