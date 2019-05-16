<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=detil_transaksi&action=form"; ?>"
    class="tombol-action">+ Tambah Detil_Transaksi</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT detil_transaksi.* from detil_transaksi");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel detil_transaksi</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Kertas</th>
                <th class='kiri'>Id Transaksi</th>
                <th class='kiri'>Jumlah</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[k_id]</td>
                    <td class='kiri'>$row[t_id]</td>
                    <td class='kiri'>$row[dt_jumlah]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=detil_transaksi&action=form&detil_transaksi_kid=$row[k_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>