<?php

if($user_id){
    //kalau sudah login, nanti bisa bakal ngambil modul, action sama mode
    $module = isset($_GET['module']) ? $_GET['module'] : false;
    $action = isset($_GET['action']) ? $_GET['action'] : false;
    $mode = isset($_GET['mode']) ? $_GET['mode'] : false;
}else{
    //kalau belum login, nanti redirect ke login.
    //jadinya halaman myprofile cuma bisa diakses kalo udah login
    header("location: ".BASE_URL."index.php?page=login");
}

?>

<div id="bg-page-profile">

    <div id="menu-profile">

        <ul>
            <?php
                //kalo level usernya superadmin, bisa liat
                //semuanya.
                if($level == 'admin'){
            ?>
                <li>
                <a <?php if($module == "transaksi") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=transaksi&action=list"; ?> ">Transaksi</a>
                </li>
                <li>
                <a <?php if($module == "detil_transaksi") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=detil_transaksi&action=list"; ?> ">Detil Transaksi</a>
                </li>
                <li>
                <a <?php if($module == "barang") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=list"; ?> ">Barang</a>
                </li>
                <li>
                <a <?php if($module == "pemesan") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=pemesan&action=list"; ?> ">Pemesan</a>
                </li>
                <li>
                <a <?php if($module == "pegawai") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=pegawai&action=list"; ?> ">Pegawai</a>
                </li>
                <li>
                <a <?php if($module == "printer") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=printer&action=list"; ?> ">Printer</a>
                </li>
                <li>
                <a <?php if($module == "status") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=status&action=list"; ?> ">Status Pengiriman</a>
                </li>

                <div id="individual">

                <li>
                <a <?php if($module == "ind_jihad") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=ind_jihad&action=list"; ?> ">Tugas Individu - Jihad</a>
                </li>
                <li>
                <a <?php if($module == "ind_bima") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=ind_bima&action=list"; ?> ">Tugas Individu - Bima</a>
                </li>
                <li>
                <a <?php if($module == "ind_david") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=ind_david&action=list"; ?> ">Tugas Individu - David</a>
                </li>

                </div>

            <?php
                }
            ?>
            <li>
                <!--
            <a <?php if($module == "pesanan") { echo "class='active'"; } ?> href ="<?php echo BASE_URL."index.php?page=my_profile&module=pesanan&action=list"; ?> ">Pesanan</a>
                -->
        </li>
        </ul>

    </div>

    <div id="profile-content">

    <!--Belum ada uwu -->
    <?php
        //ngecek apakah module atau/dan action file ny ada
        $file = "module/$module/$action.php";
        if(file_exists($file)){
            //kalau ada, diinclude
            include_once($file);
        }
        else{
            //kalau ngga, dikasih tau kalo belom ada
            echo "<h4>Maaf, file $file tidak ada uwu</h4>";
        }

    ?>
    </div>
</div>