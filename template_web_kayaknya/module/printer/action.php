<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM printer WHERE pt_id = '$printer_id' ");
    $row = mysqli_fetch_assoc($query);

    // $printer_id_old = $row['k_id'];

    $printer_id = $_POST['pt_id'];
    $printer_nama = $_POST['pt_nama'];
    $printer_status = $_POST['pt_status'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_printer = $_POST['nama_printer'];
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
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/printer/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO printer (nama_printer, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_printer','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO printer (pt_id, pt_nama, pt_status) 
                                            VALUES ('$printer_id','$printer_nama','$printer_status')");
    }

      
    else if($button == "Update"){

        //$printer_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE printer SET pt_id = '$printer_id',
                                                    pt_nama = '$printer_nama',
                                                    pt_status = '$printer_status'

                                                    WHERE pt_id = '$printer_id' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=printer&action=list");
?>