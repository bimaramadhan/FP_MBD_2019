<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM detil_transaksi WHERE k_id = '$detil_transaksi_kid' ");
    $row = mysqli_fetch_assoc($query);

    // $detil_transaksi_kid_old = $row['k_id'];

    $detil_transaksi_kid = $_POST['k_id'];
    $detil_transaksi_tid = $_POST['t_id'];
    $detil_transaksi_jumlah = $_POST['dt_jumlah'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_detil_transaksi = $_POST['nama_detil_transaksi'];
    $spesifikasi = $_POST['spesifikasi'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $update_gambar = "";

    //bagian ini mengecek apakah $_FILES sudah berisi atau tidak,
    //jika sudah berisi, maka file gambar akan diupload
    if(!emdty($_FILES["file"]["name"])){

    //scridt dasar untuk mengupload file gambar kedalam server
    //pastikan selalu tambahkan / setelah folder terakhir yg diakses
    $nama_file = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/detil_transaksi/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO detil_transaksi (nama_detil_transaksi, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_detil_transaksi','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO detil_transaksi (k_id, t_id, dt_jumlah) 
                                            VALUES ('$detil_transaksi_kid','$detil_transaksi_tid','$detil_transaksi_jumlah')");
    }

      
    else if($button == "Update"){

        //$detil_transaksi_kid = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE detil_transaksi SET k_id = '$detil_transaksi_kid',
                                                    t_id = '$detil_transaksi_tid',
                                                    dt_jumlah = '$detil_transaksi_jumlah'

                                                    WHERE k_id = '$detil_transaksi_kid' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=detil_transaksi&action=list");
?>