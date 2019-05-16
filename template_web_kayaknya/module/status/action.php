<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM status WHERE sp_id = '$status_id' ");
    $row = mysqli_fetch_assoc($query);

    // $status_id_old = $row['k_id'];

    $status_id = $_POST['sp_id'];
    $status_tid = $_POST['t_id'];
    $status_status = $_POST['sp_status'];
    $status_alamat = $_POST['sp_alamat'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_status = $_POST['nama_status'];
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
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/status/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO status (nama_status, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_status','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO status_pengiriman (sp_id, t_id, sp_status, sp_alamat) 
                                            VALUES ('$status_id','$status_tid','$status_status','$status_alamat')");
    }

      
    else if($button == "Update"){

        //$status_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE status_pengiriman SET sp_id = '$status_id',
                                                    t_id = '$status_tid',
                                                    sp_status = '$status_status',
                                                    sp_alamat = '$status_alamat'

                                                    WHERE sp_id = '$status_id' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=status&action=list");
?>