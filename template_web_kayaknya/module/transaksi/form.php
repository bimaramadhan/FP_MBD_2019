<?php
    
    $transaksi_id = isset($_GET['transaksi_id']) ? $_GET['transaksi_id'] : false;
    
    $transaksi_spid = "";
    $transaksi_pgid = "";
    $transaksi_pmid = "";
    $transaksi_ptid = "";
    $transaksi_tglmasuk = "";
    $transaksi_tgljadi = "";
    $transaksi_tglambil = "";
    $transaksi_totalharga = "";
    
    /*
    $kategori_id = "";
    $nama_transaksi = "";
    $spesifikasi = "";

    $keterangan_gambar = "";
    $gambar = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";
    */

    $button = "Add";
    
    if($transaksi_id){
        $query = mysqli_query($koneksi," SELECT * FROM transaksi WHERE t_id like '$transaksi_id' ");
        //sidenote = kalo pake WHERE X = 'nama' gabisa, mesti WHERE X like 'nama'

        $row = mysqli_fetch_assoc($query);

        $transaksi_id = $row['t_id'];
        $transaksi_spid = $row['sp_id'];
        $transaksi_pgid = $row['pg_id'];
        $transaksi_pmid = $row['pm_id'];
        $transaksi_ptid = $row['pt_id'];
        $transaksi_tglmasuk = $row['t_tgl_masuk'];
        $transaksi_tgljadi = $row['t_tgl_jadi'];
        $transaksi_tglambil = $row['t_tgl_ambil'];
        $transaksi_totalharga = $row['t_total_harga'];
        
        //echo $transaksi_id;
        /*
        $nama_transaksi = $row['nama_transaksi'];
        $kategori_id = $row['kategori_id'];
        $spesifikasi = $row['spesifikasi'];
        $gambar = $row['gambar'];
        $harga = $row['harga'];
        $stok = $row['stok'];

        $status = $row['status'];
        */

        $button = "Update";
        

        //$keterangan_gambar = "( Klik pilih gambar jika ingin ganti gambar umu )";
        /*      $gambar = "<img src='".BASE_URL."images/transaksi/$gambar' 
        style='width: 200px;vertical-align: middle;' />";               */
    }
    

?>

<script src="<?php echo BASE_URL."javascript/ckeditor/ckeditor.js"; ?>" ></script>

<form action="<?php echo BASE_URL."module/transaksi/action.php?transaksi_id=$transaksi_id"; ?>" method="POST" enctype="multipart/form-data">

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
            <label>ID Transaksi</label>
            <span><input type="text" name="t_id" value="<?php echo $transaksi_id ?>" /></span>
    </div>

    <div class="element-form">
            <label>ID Status Pengiriman</label>
            <span><input type="text" name="sp_id" value="<?php echo $transaksi_spid ?>" /></span>
    </div>

    <div class="element-form">
            <label>ID Pegawai</label>
            <span><input type="text" name="pg_id" value="<?php echo $transaksi_pgid ?>" /></span>
    </div>

    <div class="element-form">
            <label>ID Pemesan</label>
            <span><input type="text" name="pm_id" value="<?php echo $transaksi_pmid ?>" /></span>
    </div>

    <div class="element-form">
            <label>ID Printer</label>
            <span><input type="text" name="pt_id" value="<?php echo $transaksi_ptid ?>" /></span>
    </div>

    <!--
    <div style="margin-bottom:10px">
            <label style="font-weight:bold" >Spesifikasi</label>
            <span><textarea name="spesifikasi" id="editor" ><?php echo $spesifikasi; ?></textarea></span>
    </div>
    -->

    <div class="element-form">
            <label>Tanggal Masuk</label>
            <span><input type="text" name="t_tgl_masuk" value="<?php echo $transaksi_tglmasuk ?>" /></span>
    </div>

    <div class="element-form">
            <label>Tanggal Jadi</label>
            <span><input type="text" name="t_tgl_jadi" value="<?php echo $transaksi_tgljadi ?>" /></span>
    </div>

    <div class="element-form">
            <label>Tanggal Ambil</label>
            <span><input type="text" name="t_tgl_ambil" value="<?php echo $transaksi_tglambil ?>" /></span>
    </div>

    <div class="element-form">
            <label>Total Harga</label>
            <span><input type="text" name="t_total_harga" value="<?php echo $transaksi_totalharga ?>" /></span>
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