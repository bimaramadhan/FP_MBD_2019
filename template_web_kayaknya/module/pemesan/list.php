<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=pemesan&action=form"; ?>"
    class="tombol-action">+ Tambah Pemesan</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT pemesan.* from pemesan");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel pemesan</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Pemesan</th>
                <th class='kiri'>Nama Pemesan</th>
                <th class='kiri'>Tanggal Lahir</th>
                <th class='kiri'>Alamat</th>
                <th class='kiri'>No Telepon</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[pm_id]</td>
                    <td class='kiri'>$row[pm_nama]</td>
                    <td class='kiri'>$row[pm_tgl_lahir]</td>
                    <td class='kiri'>$row[pm_alamat]</td>
                    <td class='kiri'>$row[pm_notelp]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=pemesan&action=form&pemesan_id=$row[pm_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>