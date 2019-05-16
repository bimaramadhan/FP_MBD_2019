<?php
    
    $pegawai_id = isset($_GET['pegawai_id']) ? $_GET['pegawai_id'] : false;
    
    $pegawai_nama = "";
    $pegawai_tgllahir = "";
    $pegawai_alamat = "";
    $pegawai_notelp = "";
    $pegawai_bagian = "";

    /*
    $kategori_id = "";
    $nama_pegawai = "";
    $spesifikasi = "";

    $keterangan_gambar = "";
    $gambar = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";
    */

    $button = "Add";
    
    if($pegawai_id){
        $query = mysqli_query($koneksi," SELECT * FROM pegawai WHERE pg_id like '$pegawai_id' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $pegawai_id = $row['pg_id'];
        $pegawai_nama = $row['pg_nama'];
        $pegawai_tgllahir = $row['pg_tgl_lahir'];
        $pegawai_alamat = $row['pg_alamat'];
        $pegawai_notelp = $row['pg_notelp'];
        $pegawai_bagian = $row['pg_bagian'];
        
        //echo $pegawai_id;
        /*
        $nama_pegawai = $row['nama_pegawai'];
        $kategori_id = $row['kategori_id'];
        $spesifikasi = $row['spesifikasi'];
        $gambar = $row['gambar'];
        $harga = $row['harga'];
        $stok = $row['stok'];

        $status = $row['status'];
        */

        $button = "Update";
        

        //$keterangan_gambar = "( Klik pilih gambar jika ingin ganti gambar umu )";
        /*      $gambar = "<img src='".BASE_URL."images/pegawai/$gambar' 
        style='width: 200px;vertical-align: middle;' />";               */
    }
    

?>

<script src="<?php echo BASE_URL."javascript/ckeditor/ckeditor.js"; ?>" ></script>

<form action="<?php echo BASE_URL."module/pegawai/action.php?pegawai_id=$pegawai_id"; ?>" method="POST" enctype="multipart/form-data">

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
            <label>ID Pegawai</label>
            <span><input type="text" name="pg_id" value="<?php echo $pegawai_id ?>" /></span>
    </div>

    <div class="element-form">
            <label>Nama Pegawai</label>
            <span><input type="text" name="pg_nama" value="<?php echo $pegawai_nama ?>" /></span>
    </div>

    <div class="element-form">
            <label>Tanggal Lahir</label>
            <span><input type="text" name="pg_tgl_lahir" value="<?php echo $pegawai_tgllahir ?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    <div class="element-form">
            <label>Alamat</label>
            <span><input type="text" name="pg_alamat" value="<?php echo $pegawai_alamat ?>" /></span>
    </div>

    <div class="element-form">
            <label>No Telepon</label>
            <span><input type="text" name="pg_notelp" value="<?php echo $pegawai_notelp ?>" /></span>
    </div>

    <div class="element-form">
            <label>Bagian</label>
            <span><input type="text" name="pg_bagian" value="<?php echo $pegawai_bagian ?>" /></span>
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