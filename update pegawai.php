
<form action="update pegawai.php" method="post">
update<br>
id: <input type=text name=id><br>
nama: <input type=text name=nama><br>
tanggal lahir: <input type=text name=tgllahir><br>
telp: <input type=text name=telp><br>
menjadi<br>
nama: <input type=text name=namab><br>
tanggal lahir:<input type=text name=tgllahirb><br>
alamat:<input type=text name=alamat><br>
telp:<input type=text name=telpb><br>
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
if ((!isset($_POST["id"]||!isset($_POST["nama"]||!isset($_POST["ukuran"])&&(!isset($_POST["namab"]||!isset($_POST["ukuranb"]||!isset($_POST["harga"]));
if (isset($_POST["id"]))$cek1="pg_id='".$_POST["id"]."'";
if (isset($_POST["nama"]))$cek2="pg_nama='".$_POST["nama"]."'";
if (isset($_POST["telp"]))$cek3="pg_telp='".$_POST["telp"]."'";
if (isset($_POST["tgllahir"]))$cek4="pg_tgl_lahir='".$_POST["tgllahir"]."'";
if (isset($_POST["namab"]))$update1="pg_nama='".$_POST["namab"]."'";
if (isset($_POST["telpb"]))$update3="pg_telp='".$_POST["telpb"]."'";
if (isset($_POST["tgllahirb"]))$update2="pg_tgl_lahir='".$_POST["tgllahirb"]."'";
if (isset($_POST["alamat"]))$update4="pg_alamat='".$_POST["alamat"]."'";
echo $input;
//ini sqlnya copy aja ke sini
$sql = "update pegawai set ".$update1." ".$update2." ".$update3." ".$update4." where ".$cek1." ".$cek2." ".$cek3." ".$cek4;
$result = $conn->query($sql);

$conn->close();
?>