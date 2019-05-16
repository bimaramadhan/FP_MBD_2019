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



    $p_id=$_POST["pm_id"];
	$pnama=$_POST["pm_nama"];
	$ptgl=$_POST["pm_tgl_lahir"];
	$palamat=$_POST["pm_alamat"];
	$ptelp=$_POST["pm_notelp"];

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

        mysqli_query($koneksi, " INSERT INTO pemesan (`pm_id`, `pm_nama`, `pm_tgl_lahir`, `pm_alamat`, `pm_notelp`) 
                                            VALUES ('$p_id','$pnama','$ptgl','$palamat','$ptelp')");
    }

      
    else if($button == "Update"){

        //$barang_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE pemesan SET pm_id='$p_id'
													pm_nama='$pnama'
													pm_tgl_lahir='$ptgl'
													pm_alamat='$palamat'
													pm_notelp='$ptelp'");
    
    
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=kertas&action=list");
?>