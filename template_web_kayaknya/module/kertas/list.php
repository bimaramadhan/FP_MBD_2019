<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kertas&action=form"; ?>"
    class="tombol-action">+ Tambah Barang</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT kertas.* from kertas");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel kertas</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Kertas</th>
                <th class='kiri'>Jenis Kertas</th>
                <th class='kiri'>Harga Kertas</th>
                <th class='kiri'>Ukuran Kertas</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[k_id]</td>
                    <td class='kiri'>$row[k_jenis]</td>
                    <td class='kiri'>".rupiah($row["k_harga"])."</td>
                    <td class='tengah'>$row[k_ukuran]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=kertas&action=form&barang_id=$row[k_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>