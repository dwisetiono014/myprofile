<?php
    /* Note
     parameter = ("IP addres database","username DB","password DB","DB")
    */
    $DBO = mysqli_connect ("localhost","root","","fm_dw");
    if (mysqli_connect_errno()){
        echo "Koneksi Gagal".mysqli_connect_error();
    }else {
        return $DBO;
    }
?>
