<div id="frame-tambah">

    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=printer&action=form"; ?>"
    class="tombol-action">+ Tambah Printer</a>

</div>

<?php 

    $query = mysqli_query($koneksi,"SELECT printer.* from printer");

    if(mysqli_num_rows($query) == 0){
        echo "<h4>Maaf, tidak ada apapun dalam tabel printer</h4>";
    }
    else{

        echo "<table class='table-list'>";

        echo "<tr class='baris-title'>
                <th class='kolom-nomor'>No</th>
                <th class='kiri'>Id Printer</th>
                <th class='kiri'>Nama Printer</th>
                <th class='kiri'>Status</th>
                <th class='tengah'>Tindakan</th>
            </tr>";

            $no = 1;
            while($row=mysqli_fetch_assoc($query)){

                echo "<tr>
                    <td class='kolom-nomor'>$no</td>
                    <td class='kiri'>$row[pt_id]</td>
                    <td class='kiri'>$row[pt_nama]</td>
                    <td class='kiri'>$row[pt_status]</td>
                    <td class='tengah'>
                        <a class=tombol-action href='".BASE_URL."index.php?page=my_profile&module=printer&action=form&printer_id=$row[pt_id]'>Ganti</a>
                    </td>
                
                </tr>";

            $no++;
            }


        echo "</table>";
    }

?>