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
        $query = mysqli_query($koneksi," SELECT * FROM kertas WHERE k_id = '$barang_id' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $p_id=$row["pg_id"];
		$pnama=$row["pg_nama"];
		$ptgl=$row["pg_tgl_lahir"];
		$palamat=$row["pg_alamat"];
		$ptelp=$row["pg_notelp"];
        $pjab=$row["pg_jabatan"];
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

<form action="<?php echo BASE_URL."module/kertas/action.php?barang_id=$barang_id"; ?>" method="POST" enctype="multipart/form-data">

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
            <span><input type="text" name="pg_id" value="<?php echo $p_id ?>" /></span>
    </div>

    <div class="element-form">
            <label>Nama</label>
            <span><input type="text" name="pg_nama" value="<?php echo $pnama?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    <div class="element-form">
         
		 <label>tanggal lahir</label>
            <span><input type="text" name="pg_tgl_lahir" value="<?php echo $ptgl ?>" /></span>
    </div>

    <div class="element-form">
            <label>alamat</label>
            <span><input type="text" name="pg_alamat" value="<?php echo $palamat ?>" /></span>
    </div>
	<div class="element-form">
            <label>no telepon</label>
            <span><input type="text" name="pg_notelp" value="<?php echo $ptelp ?>" /></span>
    </div>
    <div class="element-form">
            <label>jabatan</label>
            <span><input type="text" name="pg_jabatan" value="<?php echo $pjab ?>" /></span>
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