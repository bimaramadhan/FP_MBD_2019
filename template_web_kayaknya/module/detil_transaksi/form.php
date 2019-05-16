<?php
    
    $detil_transaksi_kid = isset($_GET['detil_transaksi_kid']) ? $_GET['detil_transaksi_kid'] : false;
    
    $detil_transaksi_tid = "";
    $detil_transaksi_jumlah = "";
    
    /*
    $kategori_id = "";
    $nama_detil_transaksi = "";
    $spesifikasi = "";

    $keterangan_gambar = "";
    $gambar = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";
    */

    $button = "Add";
    
    if($detil_transaksi_kid){
        $query = mysqli_query($koneksi," SELECT * FROM detil_transaksi WHERE k_id like '$detil_transaksi_kid' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $detil_transaksi_kid = $row['k_id'];
        $detil_transaksi_tid = $row['t_id'];
        $detil_transaksi_jumlah = $row['dt_jumlah'];
        
        //echo $detil_transaksi_kid;
        /*
        $nama_detil_transaksi = $row['nama_detil_transaksi'];
        $kategori_id = $row['kategori_id'];
        $spesifikasi = $row['spesifikasi'];
        $gambar = $row['gambar'];
        $harga = $row['harga'];
        $stok = $row['stok'];

        $status = $row['status'];
        */

        $button = "Update";
        

        //$keterangan_gambar = "( Klik pilih gambar jika ingin ganti gambar umu )";
        /*      $gambar = "<img src='".BASE_URL."images/detil_transaksi/$gambar' 
        style='width: 200px;vertical-align: middle;' />";               */
    }
    

?>

<script src="<?php echo BASE_URL."javascript/ckeditor/ckeditor.js"; ?>" ></script>

<form action="<?php echo BASE_URL."module/detil_transaksi/action.php?detil_transaksi_kid=$detil_transaksi_kid"; ?>" method="POST" enctype="multipart/form-data">

<!--

    <div class="element-form">
            <label>Kategori</label>
            <span>
                <select name="kategori_id">
                    <?php
                        
                        /*
                        $query = mysqli_query($koneksi,"SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
                        while($row=mysqli_fetch_assoc($query))
                        {
                            if($kategori_id == $row['kategori_id']){
                                echo "<option value='$row[kategori_id]' selected='true'>$row[kategori]</option>";
                            }
                            else{
                            echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
                            }

                        }

                        */

                    ?>

                </select>
            
            </span>
    </div>

                    -->

    <div class="element-form">
            <label>ID Kertas</label>
            <span><input type="text" name="k_id" value="<?php echo $detil_transaksi_kid ?>" /></span>
    </div>

    <div class="element-form">
            <label>ID Transaksi</label>
            <span><input type="text" name="t_id" value="<?php echo $detil_transaksi_tid ?>" /></span>
    </div>

    <div class="element-form">
            <label>Jumlah</label>
            <span><input type="text" name="dt_jumlah" value="<?php echo $detil_transaksi_jumlah ?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    
    <!--
    <div class="element-form">
            <label>Gambar <?php echo $keterangan_gambar; ?> </label>
            <span>
                <input type="file" name="file" />
                <?php echo $gambar; ?>
            </span>
    </div>

    <div class="element-form">
            <label>Status</label>
            <span><input type="radio" name="status" value="on" <?php if($status == "on" ){ echo "checked ='true'"; } ?> />On
            <input type="radio" name="status" value="off" <?php if($status == "off" ){ echo "checked ='true'"; } ?>/>Off
            </span>
    </div>
    -->

    <div class="element-form">
            <!-- <label>Kategori</label> -->
            <span><input type="submit" name="button" value="<?php echo $button ?>" /></span>
    </div>

</form>

<script>
    CKEDITOR.replace("editor");
</script>