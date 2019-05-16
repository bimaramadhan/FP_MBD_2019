<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");
    
    $query = mysqli_query($koneksi," SELECT * FROM kertas WHERE k_id = '$barang_id' ");
    $row = mysqli_fetch_assoc($query);

    $barang_id_old = $row['k_id'];

    $barang_id = $_POST['b_id'];
    $barang_jenis = $_POST['b_jenis'];
    $barang_harga = $_POST['b_harga'];
    $barang_keterangan = $_POST['b_keterangan'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_barang = $_POST['nama_barang'];
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
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/barang/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO barang (nama_barang, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_barang','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO kertas (k_id, k_jenis, k_harga, k_ukuran) 
                                            VALUES ('$barang_id','$barang_jenis','$barang_harga','$barang_keterangan')");
    }

      
    else if($button == "Update"){

        //$barang_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE kertas SET k_id = '$barang_id',
                                                    k_jenis = '$barang_jenis',
                                                    k_harga = '$barang_harga',
                                                    k_ukuran = '$barang_keterangan'

                                                    WHERE k_id = '$barang_id' ");
    
    
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=kertas&action=list");
?>