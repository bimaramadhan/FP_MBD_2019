<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM transaksi WHERE t_id = '$transaksi_id' ");
    $row = mysqli_fetch_assoc($query);

    // $transaksi_id_old = $row['k_id'];

    $transaksi_id = $_POST['t_id'];
    $transaksi_spid = $_POST['sp_id'];
    $transaksi_pgid = $_POST['pg_id'];
    $transaksi_pmid = $_POST['pm_id'];
    $transaksi_ptid = $_POST['pt_id'];
    $transaksi_tglmasuk = $_POST['t_tgl_masuk'];
    $transaksi_tgljadi = $_POST['t_tgl_jadi'];
    $transaksi_tglambil = $_POST['t_tgl_ambil'];
    $transaksi_totalharga = $_POST['t_total_harga'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_transaksi = $_POST['nama_transaksi'];
    $spesifikasi = $_POST['spesifikasi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $update_gambar = "";

    //bagian ini mengecek apakah $_FILES sudah berisi atau tidak,
    //jika sudah berisi, maka file gambar akan diupload
    if(!empty($_FILES["file"]["name"])){

    //script dasar untuk mengupload file gambar kedalam server
    //pastikan selalu tambahkan / setelah folder terakhir yg diakses
    $nama_file = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/transaksi/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO transaksi (nama_transaksi, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_transaksi','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO transaksi (t_id, sp_id, pg_id, pm_id, pt_id, t_tgl_masuk, t_tgl_jadi, t_tgl_ambil, t_total_harga) 
                                            VALUES ('$transaksi_id','$transaksi_spid','$transaksi_pgid','$transaksi_pmid','$transaksi_ptid','$transaksi_tglmasuk','$transaksi_tgljadi','$transaksi_tglambil','$transaksi_totalharga')");
    }

      
    else if($button == "Update"){

        //$transaksi_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE transaksi SET t_id = '$transaksi_id',
                                                    sp_id = '$transaksi_spid',
                                                    pg_id = '$transaksi_pgid',
                                                    pm_id = '$transaksi_pmid',
                                                    pt_id = '$transaksi_ptid',
                                                    t_tgl_masuk = '$transaksi_tglmasuk',
                                                    t_tgl_jadi = '$transaksi_tgljadi',
                                                    t_tgl_ambil = '$transaksi_tglambil',
                                                    t_total_harga = '$transaksi_totalharga'

                                                    WHERE t_id = '$transaksi_id' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=transaksi&action=list");
?>