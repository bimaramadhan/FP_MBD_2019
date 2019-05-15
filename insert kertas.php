
<form action="insert.php" method="post">
filter<br>
id: <input type=text name=id><br>
jenis: <input type=text name=jenis><br>
harga: <input type=text name=harga><br>
keterangan: <input type=text name=ukuran><br>
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
if (!isset($_POST["id"])&&!isset($_POST["jenis"])&&!isset($_POST["harga"])&&!isset($_POST["ukuran"]))
	{
		//echo "incomplete form";
		exit();
	}

//ini sqlnya copy aja ke sini
$sql = "insert into kertas (`b_id`, `b_jenis`, `b_harga`, `b_ukuran`) values('".$_POST["id"]."','".$_POST["jenis"]."','".$_POST["harga"]."','".$_POST["keterangan"]."')";
$result = $conn->query($sql);
echo "sukses";
$conn->close();
?>