<?php

    //ngecek apakah sudah login atau belum
    //jika sudah, maka user tidak bisa mengakses login sampai logout
    if($user_id){

        //header("location : ".BASE_URL);
        direct(BASE_URL);
    }

?>

<div id="container-user-access">

    <form action="<?php echo BASE_URL."proses_login.php"; ?>" method="POST">
    
        <?php 
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $password = isset($_GET['password']) ? $_GET['password'] : false;
            

            if($notif == "true")
            {
                echo "<div class='notif'>Maaf, email atau password salah BRUH</div>";
            }
            
        ?>

        <div class="element-form">

            <label>Email</label>
            <span><input type="text" name="email" /></span>

        </div>

        <div class="element-form">

            <label>Password</label>
            <span><input type="password" name="password" /></span>

        </div>

        <div class="element-form">

            <span><input type="submit" value="login" /></span>

        </div>

    </form>

</div>