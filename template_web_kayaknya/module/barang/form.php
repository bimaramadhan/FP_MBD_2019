<?php
    
    $barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;
    
    $barang_jenis = "";
    $barang_harga = "";
    $barang_keterangan = "";

    /*
    $kategori_id = "";
    $nama_barang = "";
    $spesifikasi = "";

    $keterangan_gambar = "";
    $gambar = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";
    */

    $button = "Add";
    
    if($barang_id){
        $query = mysqli_query($koneksi," SELECT * FROM barang WHERE b_id = '$barang_id' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $barang_id = $row['b_id'];
        $barang_jenis = $row['b_jenis'];
        $barang_harga = $row['b_harga'];
        $barang_keterangan = $row['b_keterangan'];
        
        //echo $barang_id;
        /*
        $nama_barang = $row['nama_barang'];
        $kategori_id = $row['kategori_id'];
        $spesifikasi = $row['spesifikasi'];
        $gambar = $row['gambar'];
        $harga = $row['harga'];
        $stok = $row['stok'];

        $status = $row['status'];
        */

        $button = "Update";
        

        //$keterangan_gambar = "( Klik pilih gambar jika ingin ganti gambar umu )";
        /*      $gambar = "<img src='".BASE_URL."images/barang/$gambar' 
        style='width: 200px;vertical-align: middle;' />";               */
    }
    

?>

<script src="<?php echo BASE_URL."javascript/ckeditor/ckeditor.js"; ?>" ></script>

<form action="<?php echo BASE_URL."module/barang/action.php?barang_id=$barang_id"; ?>" method="POST" enctype="multipart/form-data">

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
            <span><input type="text" name="b_id" value="<?php echo $barang_id ?>" /></span>
    </div>

    <div class="element-form">
            <label>Jenis Kertas</label>
            <span><input type="text" name="b_jenis" value="<?php echo $barang_jenis ?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    <div class="element-form">
            <label>Harga</label>
            <span><input type="text" name="b_harga" value="<?php echo $barang_harga ?>" /></span>
    </div>

    <div class="element-form">
            <label>Keterangan</label>
            <span><input type="text" name="b_keterangan" value="<?php echo $barang_keterangan ?>" /></span>
    </div>
    
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