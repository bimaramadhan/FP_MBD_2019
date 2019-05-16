<?php

    include_once("function/connection.php");
    include_once("function/helper.php");

    $email = $_POST['email'];
    //$password = md5($_POST['password']); <- soalnya di database printing, passwordnya ngga dalam bentuk
    //md5 awkaoawokawok

    $password = $_POST['password'];

    $query = mysqli_query($koneksi,"SELECT * FROM user WHERE u_email='$email' AND u_password='$password' AND u_status='on'");

    if(mysqli_num_rows($query) == 0){

        header("location: ".BASE_URL."index.php?page=login&notif=true");
    }
    else{

        $row = mysqli_fetch_assoc($query);

        //ini mulai session
        session_start();
        $_SESSION['user_id'] = $row['u_id'];
        $_SESSION['nama'] = $row['u_nama'];
        $_SESSION['level'] = $row['u_level'];

        header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");
        
        //echo $row['nama']."</br>";
        //echo $row['email'];
    }

?>