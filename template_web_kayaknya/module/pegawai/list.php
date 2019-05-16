<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kertas&action=form"; ?>"
    class="tombol-action">+ Tambah Barang</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT * from pegawai");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel pegawai</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id</th>
                <th class='kiri'>nama</th>
                <th class='kiri'>tgl lahir</th>
                <th class='kiri'>alamat</th>
				<th class='kiri'>no telp</th>
				<th class='kiri'>jabatan</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[pg_id]</td>
                    <td class='kiri'>$row[pg_nama]</td>
                    <td class='kiri'>$row[pg_tgl_lahir]</td>
                    <td class='tengah'>$row[pg_alamat]</td>
					<td class='tengah'>$row[pg_notelp]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=kertas&action=form&barang_id='$row[pg_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>