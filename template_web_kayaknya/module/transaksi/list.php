<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=transaksi&action=form"; ?>"
    class="tombol-action">+ Tambah Transaksi</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT transaksi.* from transaksi");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel transaksi</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Transaksi</th>
                <th class='kiri'>Id Status Pengiriman</th>
                <th class='kiri'>Id Pegawai</th>
                <th class='kiri'>Id Pemesan</th>
                <th class='kiri'>Id Printer</th>
                <th class='kiri'>Tanggal Masuk</th>
                <th class='kiri'>Tanggal Jadi</th>
                <th class='kiri'>Tanggal Ambil</th>
                <th class='kiri'>Total Harga</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[t_id]</td>
                    <td class='kiri'>$row[sp_id]</td>
                    <td class='kiri'>$row[pg_id]</td>
                    <td class='kiri'>$row[pm_id]</td>
                    <td class='kiri'>$row[pt_id]</td>
                    <td class='kiri'>$row[t_tgl_masuk]</td>
                    <td class='kiri'>$row[t_tgl_jadi]</td>
                    <td class='kiri'>$row[t_tgl_ambil]</td>
                    <td class='kiri'>$row[t_total_harga]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=transaksi&action=form&transaksi_id=$row[t_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>