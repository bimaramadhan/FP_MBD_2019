<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=status&action=form"; ?>"
    class="tombol-action">+ Tambah Status</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT status_pengiriman.* from status_pengiriman");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel status</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Status</th>
                <th class='kiri'>Id Transaksi</th>
                <th class='kiri'>Status</th>
                <th class='kiri'>Alamat</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[sp_id]</td>
                    <td class='kiri'>$row[t_id]</td>
                    <td class='kiri'>$row[sp_status]</td>
                    <td class='kiri'>$row[sp_alamat]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=status&action=form&status_id=$row[sp_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>