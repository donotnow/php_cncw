<?php
    // echo "Ket noi thanh cong";
    $mysqli = new mysqli("localhost","root","","cnw_csdl");
    if($mysqli->connect_error){
        die("Ket noi that bai: ".$mysqli->connect_error);
        // exit();
    }
    
?>
