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

echo "<h1>Tugas Individu - David Laksamana</h1>
    <br><h2>View</h2>";

//bagian ini buat VIEW, xxxxxx nya diganti ya.
echo "<h3>1. xxxxxx </h3>";
//$queryview1 = mysqli_query($koneksi,"SELECT * from barang");
    //query nya diganti sesuai yg dikerjain.

//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";
echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>aaaa</th>
        <th class='kiri'>bbbb</th>
        <th class='kiri'>cccc</th>
     </tr>";

$noview1 = 1;
//nanti uncomment aja
//while($row=mysqli_fetch_assoc($queryview1)){}

    /** 
     *  ini juga ganti aaaa bbbb ccccnya
     *  jadi $row[nama_kolom_yang_ada_di_viewnya]
     * 
    */
echo "<tr>
        <td class='kolom-nomor'>$noview1</td>
        <td class='kiri'>aaaaaa</td>
        <td class='kiri'>bbbbbb</td>
        <td class='kiri'>cccccc</td>
        ";
echo "</table>";

echo "<h3>1. yyyyyyyyy </h3>";
echo "<table class='table-list'>";
echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>aaaa</th>
        <th class='kiri'>bbbb</th>
        <th class='kiri'>cccc</th>
     </tr>";

$noview1 = 1;
//nanti uncomment aja
//while($row=mysqli_fetch_assoc($queryview1)){}

    /** 
     *  ini juga ganti aaaa bbbb ccccnya
     *  jadi $row[nama_kolom_yang_ada_di_viewnya]
     * 
    */
echo "<tr>
        <td class='kolom-nomor'>$noview1</td>
        <td class='kiri'>aaaaaa</td>
        <td class='kiri'>bbbbbb</td>
        <td class='kiri'>cccccc</td>
        ";
echo "</table>";

//ini buat fungsi
echo "<br><h2>Function</h2>";
$query = mysqli_query($koneksi,"SELECT pt_id,dbo.hitung_pemakaian(pt_id) as jumlah_pemakaian from printer");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel pemesan</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Printer</th>
                <th class='kiri'>jumlah pemakaian</th>
                
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[pt_id]</td>
                    <td class='kiri'>$row[jumlah_pemakaian]</td>
                </tr>";

            $no++;
            }
        echo "</table>";
//isi ini
echo "<h3>2. gfdfdfgf </h3>";
//isi ini juga

//ini buat prosedur
echo "<br><h2>Procedure</h2>";
echo "<h3>1. iiyyui </h3>";
//isi ini
echo "<h3>2. tytvnnb </h3>";
//isi ini juga

//ini buat trigger
echo "<br><h2>Trigger</h2>";
echo "<h3>1. pjkghj </h3>";
//isi ini
echo "<h3>2. xxxxxx </h3>";
//isi ini juga

//ini buat join
echo "<br><h2>Join</h2>";
//join berarti tabel kan? ini ngopas dari view
echo "<h3>1. xxxxxx </h3>";
//$queryview1 = mysqli_query($koneksi,"SELECT * from barang");
    //query nya diganti sesuai yg dikerjain.

//ini aaaaa, bbbbb, ccccc nya ganti
echo "<table class='table-list'>";
echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>aaaa</th>
        <th class='kiri'>bbbb</th>
        <th class='kiri'>cccc</th>
     </tr>";

$noview1 = 1;
//nanti uncomment aja
//while($row=mysqli_fetch_assoc($queryview1)){}

    /** 
     *  ini juga ganti aaaa bbbb ccccnya
     *  jadi $row[nama_kolom_yang_ada_di_viewnya]
     * 
    */
echo "<tr>
        <td class='kolom-nomor'>$noview1</td>
        <td class='kiri'>aaaaaa</td>
        <td class='kiri'>bbbbbb</td>
        <td class='kiri'>cccccc</td>
        ";
echo "</table>";

echo "<h3>1. yyyyyyyyy </h3>";
echo "<table class='table-list'>";
echo "<tr class='baris-title'>
        <th class='kolom-nomor'>No</th>
        <th class='kiri'>aaaa</th>
        <th class='kiri'>bbbb</th>
        <th class='kiri'>cccc</th>
     </tr>";

$noview1 = 1;
//nanti uncomment aja
//while($row=mysqli_fetch_assoc($queryview1)){}

    /** 
     *  ini juga ganti aaaa bbbb ccccnya
     *  jadi $row[nama_kolom_yang_ada_di_viewnya]
     * 
    */
echo "<tr>
        <td class='kolom-nomor'>$noview1</td>
        <td class='kiri'>aaaaaa</td>
        <td class='kiri'>bbbbbb</td>
        <td class='kiri'>cccccc</td>
        ";
echo "</table>";


//ini buat fungsi
echo "<br><h2>Function-based Index</h2>";
echo "<h3>zxczczxc </h3>";
//isi ini

echo "</div>";
?>
