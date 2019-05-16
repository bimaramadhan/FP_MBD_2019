<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=form"; ?>"
    class="tombol-action">+ Tambah Barang</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT barang.* from barang");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel barang</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Kertas</th>
                <th class='kiri'>Jenis Kertas</th>
                <th class='kiri'>Harga Kertas</th>
                <th class='kiri'>Keterangan Kertas</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[b_id]</td>
                    <td class='kiri'>$row[b_jenis]</td>
                    <td class='kiri'>".rupiah($row["b_harga"])."</td>
                    <td class='tengah'>$row[b_keterangan]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=barang&action=form&barang_id=$row[b_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>