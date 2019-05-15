
<form action="update kertas.php" method="post">
update<br>
id: <input type=text name=id><br>
nama: <input type=text name=nama><br>
ukuran: <input type=text name=ukuran><br>
menjadi<br>
nama: <input type=text name=namab><br>
ukuran:<input type=text name=ukuranb><br>
harga:<input type=text name=harga><br>
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
if (isset($_POST["id"]))$cek1="b_id='".$_POST["id"]."'";
if (isset($_POST["ukuran"]))$cek2="b_ukuran='".$_POST["ukuran"]."'";
if (isset($_POST["nama"]))$cek3="b_jenis='".$_POST["nama"]."'";
if (isset($_POST["namab"]))$update1="b_jenis='".$_POST["namab"]."'";
if (isset($_POST["harga"]))$update3="b_harga='".$_POST["harga"]."'";
if (isset($_POST["ukuranb"]))$update2="b_ukuran='".$_POST["ukuranb"]."'";
echo $input;
//ini sqlnya copy aja ke sini
$sql = "update kertas set ".$update1." ".$update2." ".$update3." where ".$cek1." ".$cek2." ".$cek3;
$result = $conn->query($sql);

$conn->close();
?>