<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM pemesan WHERE pm_id = '$pemesan_id' ");
    $row = mysqli_fetch_assoc($query);

    // $pemesan_id_old = $row['k_id'];

    $pemesan_id = $_POST['pm_id'];
    $pemesan_nama = $_POST['pm_nama'];
    $pemesan_tgllahir = $_POST['pm_tgl_lahir'];
    $pemesan_alamat = $_POST['pm_alamat'];
    $pemesan_notelp = $_POST['pm_notelp'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_pemesan = $_POST['nama_pemesan'];
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
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/pemesan/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO pemesan (nama_pemesan, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_pemesan','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO pemesan (pm_id, pm_nama, pm_tgl_lahir, pm_alamat, pm_notelp) 
                                            VALUES ('$pemesan_id','$pemesan_nama','$pemesan_tgllahir','$pemesan_alamat','$pemesan_notelp')");
    }

      
    else if($button == "Update"){

        //$pemesan_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE pemesan SET pm_id = '$pemesan_id',
                                                    pm_nama = '$pemesan_nama',
                                                    pm_tgl_lahir = '$pemesan_tgllahir',
                                                    pm_alamat = '$pemesan_alamat',
                                                    pm_notelp = '$pemesan_notelp'

                                                    WHERE pm_id = '$pemesan_id' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=pemesan&action=list");
?>