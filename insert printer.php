
<form action="insert printer.php" method="post">
filter<br>
id: <input type=text name=id><br>
nama: <input type=text name=nama><br>
status:<input type=text name=stat><br>
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
if (!isset($_POST["id"])&&!isset($_POST["nama"])&&!isset($_POST["stat"]))
	{
		//echo "incomplete form";
		exit();
	}

//ini sqlnya copy aja ke sini
$sql = "INSERT INTO `printer`(`pt_id`, `pt_nama`, `pt_status`) VALUES ('".$_POST["id"]."','".$_POST["nama"]."','".$_POST["stat"]."')";
$result = $conn->query($sql);
echo "sukses";
$conn->close();
?>