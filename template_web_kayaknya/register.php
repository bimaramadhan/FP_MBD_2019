<?php

    //ngecek apakah sudah login atau belum
    //jika sudah, maka user tidak bisa mengakses login sampai logout
    if($user_id){

        //header("location : ".BASE_URL);
        direct(BASE_URL);
    }

?>

<div id="container-user-access">

    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">
    
        <?php 
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
            $password = isset($_GET['password']) ? $_GET['password'] : false;
            $confirm_password = isset($_GET['confirm_password']) ? $_GET['confirm_password'] : false;


            if($notif == "require")
            {
                echo "<div class='notif'>Maaf, kamu harus melengkapi semua form UWU</div>";
            }
            else if($notif == "password")
            {
                echo "<div class='notif'>Maaf, password yang diinput harus sama UWU</div>";
            }
            else if($notif == "email")
            {
                echo "<div class='notif'>Maaf, email sudah terdaftar UWU</div>";
            }
        ?>


        <div class="element-form">

            <label>Nama Lengkap</label>
            <span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap ?>"/></span>
            <!-- tujuan ada php echo itu biar kalo udah diisi dan diredirect, tetep muncul -->
        </div>
    
        <div class="element-form">

            <label>Email</label>
            <span><input type="text" name="email" value="<?php echo $email ?>"/></span>

        </div>

        <div class="element-form">

            <label>Nomor Telepon / Handphone</label>
            <span><input type="text" name="phone" value="<?php echo $phone ?>"/></span>

        </div>

        <div class="element-form">

            <label>Alamat</label>
            <span><textarea name="alamat" ><?php echo $alamat ?></textarea></span>

        </div>

        <div class="element-form">

            <label>Password</label>
            <span><input type="password" name="password" /></span>

        </div>

        <div class="element-form">

            <label>Confirm Password</label>
            <span><input type="password" name="confirm_password" /></span>

        </div>

        <div class="element-form">

            <label>Submit</label>
            <span><input type="submit" value="register" /></span>

        </div>

    </form>

</div>