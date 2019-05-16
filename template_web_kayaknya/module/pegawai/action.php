<?php

    /*
        ada ../ biar bisa naik tingkat
        soalnya file action.php ada di subfolder module/kategori, sedangkan
        koneksi.php sama helper ada di folder function

    */

    include_once("../../function/connection.php");
    include_once("../../function/helper.php");

    $query = mysqli_query($koneksi," SELECT * FROM pegawai WHERE pg_id = '$pegawai_id' ");
    $row = mysqli_fetch_assoc($query);

    // $pegawai_id_old = $row['k_id'];

    $pegawai_id = $_POST['pg_id'];
    $pegawai_nama = $_POST['pg_nama'];
    $pegawai_tgllahir = $_POST['pg_tgl_lahir'];
    $pegawai_alamat = $_POST['pg_alamat'];
    $pegawai_notelp = $_POST['pg_notelp'];
    $pegawai_bagian = $_POST['pg_bagian'];
    
    $button = $_POST['button'];

    /*
    $kategori_id = $_POST['kategori_id'];
    $status = $_POST['status'];
    $button = $_POST['button'];

    $nama_pegawai = $_POST['nama_pegawai'];
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
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/pegawai/".$nama_file);
    //sampai sini

    $update_gambar = ", gambar='$nama_file'";
    
    }

    */
    
    if($button == "Add")
    {
        /* 
        mysqli_query($koneksi, "INSERT INTO pegawai (nama_pegawai, kategori_id, spesifikasi, gambar, harga, stok, status) 
                                            VALUES ('$nama_pegawai','$kategori_id','$spesifikasi','$nama_file','$harga','$stok','$status')");
    
        */

        mysqli_query($koneksi, " INSERT INTO pegawai (pg_id, pg_nama, pg_tgl_lahir, pg_alamat, pg_notelp, pg_bagian) 
                                            VALUES ('$pegawai_id','$pegawai_nama','$pegawai_tgllahir','$pegawai_alamat','$pegawai_notelp', '$pegawai_bagian')");
    }

      
    else if($button == "Update"){

        //$pegawai_id = $_GET['b_id'];
        
        
        mysqli_query($koneksi, " UPDATE pegawai SET pg_id = '$pegawai_id',
                                                    pg_nama = '$pegawai_nama',
                                                    pg_tgl_lahir = '$pegawai_tgllahir',
                                                    pg_alamat = '$pegawai_alamat',
                                                    pg_notelp = '$pegawai_notelp',
                                                    pg_bagian = '$pegawai_bagian'

                                                    WHERE pg_id = '$pegawai_id' ");
        }

    header("location:".BASE_URL."index.php?page=my_profile&module=pegawai&action=list");
?>