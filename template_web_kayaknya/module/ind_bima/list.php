<?php
/**
 * template, kurang lebih kyk gini nanti
 * kalo ada apa2 figure-out sendiri tolong bro plis bro
 * aku juga belom bikin punyaku plis bro ga becanda bro
 * oh god oh fucj
 * 
 */
//echo "bruh";
echo "<div id= individual>";
echo "<h1>Tugas Individu - Bima Satria Ramadhan</h1>
    <br><h2>View</h2>";
//bagian ini buat VIEW, xxxxxx nya diganti ya.
echo "<h3>1. Menampilkan pemesan dan pegawai yang melayani </h3>";
$query = mysqli_query($koneksi,"CREATE OR REPLACE VIEW melayani AS 
                                    SELECT DISTINCT pm_nama, pg_nama
                                    FROM pemesan pm JOIN transaksi t USING(pm_id)
                                    JOIN pegawai pg USING(pg_id)");
$queryview1 = mysqli_query($koneksi,"SELECT * FROM melayani");
    //query nya diganti sesuai yg dikerjain.
//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";

echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>Nama Pemesan</th>
        <th class='kiri'>Nama Pegawai</th>
     </tr>";
$noview1 = 1;
//nanti uncomment aja
while($row=mysqli_fetch_assoc($queryview1)){
    echo "<tr>
    <td class='kolom-nomor'>$noview1</td>
    <td class='kiri'>$row[pm_nama]</td>
    <td class='kiri'>$row[pg_nama]</td>
        </tr>";
    $noview1++;
}
echo "</table>";

echo "<h3>2. Menampilkan pegawai yang belum pernah melayani transaksi</h3>";
$query2 = mysqli_query($koneksi,"CREATE OR REPLACE VIEW belum_melayani AS
                                SELECT DISTINCT pg.pg_nama
                                FROM pegawai pg WHERE NOT EXISTS
                                (SELECT * FROM transaksi t WHERE t.pg_id = pg.pg_id");
$queryview2 = mysqli_query($koneksi,"SELECT * FROM belum_melayani");
    //query nya diganti sesuai yg dikerjain.
//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";

echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>Id Pegawai</th>
        <th class='kiri'>Nama Pegawai</th>
        <th class='kiri'>Tanggal Lahir</th>
        <th class='kiri'>Alamat</th>
        <th class='kiri'>No Telepon</th>
        <th class='kiri'>Bagian</th>
     </tr>";
$noview1 = 1;
//nanti uncomment aja
while($row=mysqli_fetch_assoc($queryview2)){
    echo "<tr>
    <td class='kolom-nomor'>$noview1</td>
    <td class='kiri'>$row[pg_id]</td>
    <td class='kiri'>$row[pg_nama]</td>
    <td class='kiri'>$row[pg_tgl_lahir]</td>
    <td class='kiri'>$row[pg_alamat]</td>
    <td class='kiri'>$row[pg_notelp]</td>
    <td class='kiri'>$row[pg_bagian]</td>
        </tr>";
    $noview1++;
}
echo "</table>";
?>

<?php
//ini buat fungsi
echo "<br><h2>Function</h2>";
echo "<h3>1. Menghitung total harga yang pernah dilakukan pemesan tertentu </h3>";
echo '<form action="list.php" method="get">';
echo '<input type="text" name="pm_id" placeholder="ID PEMESAN">';
echo '<button type="submit" name="hitung">Hitung</button>';
echo '</form>';
if( isset($_GET['pm_id']) ){

    // ambil id dari query string
    $id = $_GET['pm_idl'];

    // buat query hapus
    $sql = "SELECT total_harga('$id') AS total";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?

    if($row=mysqli_fetch_assoc($query)){
        echo   "<div> 
                    <h3> Total Harga = $rows[total]<h3>
                </div>";
    } else {
        die("gagal query...");
    }
}
?>
<?php
    
?>

<?php
echo "<h3>2. Menampilkan jumlah berapa kali pegawai melayani transaksi pelanggan </h3>";
//isi ini juga
?>
<div>
		<form action="list.php" method="get">
		<input type="text" name="id_hotel" placeholder="ID_HOTEL">
		<button type="submit" name="Cek Kamar">Cek Kamar</button>
		</form>
</div>


<?php
//ini buat prosedur
echo "<br><h2>Procedure</h2>";
echo "<h3>1. Memberikan diskon 3% untuk pemesan yang melakukan transaksi pada hari ulang tahunnya </h3>";
//isi ini
echo "<h3>2. Menampilkan status pengiriman dari pemesan tertentu </h3>";
//isi ini juga
?>

<?php
//ini buat trigger
echo "<br><h2>Trigger</h2>";
echo "<h3>1. Insert : menambah record pada tabel pegawai </h3>";
//isi ini
echo "<h3>2. Update : mengubah record pada tabel pegawai </h3>";
//isi ini juga
$querytrigger = mysqli_query($koneksi,"SELECT * FROM log_pegawai");
    //query nya diganti sesuai yg dikerjain.
//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";
echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>Id Pegawai</th>
        <th class='kiri'>Nama Pegawai</th>
        <th class='kiri'>Tanggal Lahir</th>
        <th class='kiri'>Alamat</th>
        <th class='kiri'>No Telepon</th>
        <th class='kiri'>Bagian</th>
        <th class='kiri'>Tanggal Log</th>
        <th class='kiri'>Status Log</th>
     </tr>";
$notrigger = 1;
//nanti uncomment aja
while($row=mysqli_fetch_assoc($querytrigger)){
    echo "<tr>
    <td class='kolom-nomor'>$notrigger</td>
    <td class='kiri'>$row[pg_id]</td>
    <td class='kiri'>$row[pg_nama]</td>
    <td class='kiri'>$row[pg_tgl_lahir]</td>
    <td class='kiri'>$row[pg_alamat]</td>
    <td class='kiri'>$row[pg_notelp]</td>
    <td class='kiri'>$row[pg_bagian]</td>
    <td class='kiri'>$row[tanggal_log]</td>
    <td class='kiri'>$row[status_log]</td>
        </tr>";
    $notrigger++;
}
echo "</table>";
?>

<?php
//ini buat join
echo "<br><h2>Join</h2>";
//join berarti tabel kan? ini ngopas dari view
echo "<h3>1. Menampilkan nama pemesan beserta printer yang dipakai pada transaksi (Inner Join) </h3>";
$queryjoin1 = mysqli_query($koneksi,"SELECT pm.pm_nama, pt.pt_nama
                                    FROM pemesan pm JOIN transaksi t USING(pm_id)
                                    JOIN printer pt USING(pt_id)");
    //query nya diganti sesuai yg dikerjain.
//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";

echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>Nama Pemesan</th>
        <th class='kiri'>Nama Printer</th>
     </tr>";
$nojoin1 = 1;
//nanti uncomment aja
while($row=mysqli_fetch_assoc($queryjoin1)){
    echo "<tr>
    <td class='kolom-nomor'>$nojoin1</td>
    <td class='kiri'>$row[pm_nama]</td>
    <td class='kiri'>$row[pt_nama]</td>
        </tr>";
    $nojoin1++;
}
echo "</table>";

echo "<h3>2. Menampilkan semua nama pegawai dan pemesan yang pernah dilayani (Outer Join) </h3>";
$queryjoin2 = mysqli_query($koneksi,"SELECT pg.pg_nama, pm.pm_nama
                                    FROM pemesan pm JOIN transaksi t USING(pm_id)
                                    RIGHT JOIN pegawai pg USING(pg_id)");
    //query nya diganti sesuai yg dikerjain.
//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";

echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>Nama Pegawai</th>
        <th class='kiri'>Nama Pemesan</th>
     </tr>";
$nojoin2 = 1;
//nanti uncomment aja
while($row=mysqli_fetch_assoc($queryjoin2)){
    echo "<tr>
    <td class='kolom-nomor'>$nojoin2</td>
    <td class='kiri'>$row[pg_nama]</td>
    <td class='kiri'>$row[pm_nama]</td>
        </tr>";
    $nojoin2++;
}
echo "</table>";
?>

<?php
//ini buat fungsi
echo "<br><h2>Function-based Index</h2>";
echo "<h3>Membuat indeks pada tabel transaksi berdasarkan tanggal masuk, tanggal jadi dan tanggal ambil </h3>";
$queryindex = mysqli_query($koneksi,"CREATE INDEX idx_transaksi 
                                    ON transaksi(t_tgl_masuk, t_tgl_jadi, t_tgl_ambil)");
echo "</div>";
?>

		
