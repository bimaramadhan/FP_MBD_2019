<?php

    define("BASE_URL","http://localhost/printing/");

		function direct($url){
			echo "<script> window.location = '$url'; </script>";
		}

    function rupiah($nilai = 0){
		$string = "Rp, ". number_format($nilai);
		return $string;
	}


?>