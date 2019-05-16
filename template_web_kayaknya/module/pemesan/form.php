<?php
    
    $pemesan_id = isset($_GET['pemesan_id']) ? $_GET['pemesan_id'] : false;
    
    $pemesan_nama = "";
    $pemesan_tgllahir = "";
    $pemesan_alamat = "";
    $pemesan_notelp = "";
    
    /*
    $kategori_id = "";
    $nama_pemesan = "";
    $spesifikasi = "";

    $keterangan_gambar = "";
    $gambar = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";
    */

    $button = "Add";
    
    if($pemesan_id){
        $query = mysqli_query($koneksi," SELECT * FROM pemesan WHERE pm_id like '$pemesan_id' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $pemesan_id = $row['pm_id'];
        $pemesan_nama = $row['pm_nama'];
        $pemesan_tgllahir = $row['pm_tgl_lahir'];
        $pemesan_alamat = $row['pm_alamat'];
        $pemesan_notelp = $row['pm_notelp'];
        
        //echo $pemesan_id;
        /*
        $nama_pemesan = $row['nama_pemesan'];
        $kategori_id = $row['kategori_id'];
        $spesifikasi = $row['spesifikasi'];
        $gambar = $row['gambar'];
        $harga = $row['harga'];
        $stok = $row['stok'];

        $status = $row['status'];
        */

        $button = "Update";
        

        //$keterangan_gambar = "( Klik pilih gambar jika ingin ganti gambar umu )";
        /*      $gambar = "<img src='".BASE_URL."images/pemesan/$gambar' 
        style='width: 200px;vertical-align: middle;' />";               */
    }
    

?>

<script src="<?php echo BASE_URL."javascript/ckeditor/ckeditor.js"; ?>" ></script>

<form action="<?php echo BASE_URL."module/pemesan/action.php?pemesan_id=$pemesan_id"; ?>" method="POST" enctype="multipart/form-data">

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
            <label>ID Pemesan</label>
            <span><input type="text" name="pm_id" value="<?php echo $pemesan_id ?>" /></span>
    </div>

    <div class="element-form">
            <label>Nama Pemesan</label>
            <span><input type="text" name="pm_nama" value="<?php echo $pemesan_nama ?>" /></span>
    </div>

    <div class="element-form">
            <label>Tanggal Lahir</label>
            <span><input type="text" name="pm_tgl_lahir" value="<?php echo $pemesan_tgllahir ?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    <div class="element-form">
            <label>Alamat</label>
            <span><input type="text" name="pm_alamat" value="<?php echo $pemesan_alamat ?>" /></span>
    </div>

    <div class="element-form">
            <label>No Telepon</label>
            <span><input type="text" name="pm_notelp" value="<?php echo $pemesan_notelp ?>" /></span>
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