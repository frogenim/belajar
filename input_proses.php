<?php
//menangkap variabel nama dari form
$nama=$_POST['nama'];
//menangkap variabel kirim dari form (submit)
$kirim=$_POST['kirim'];
    if(isset($kirim)){
        echo "Nama Anda : <b>$nama</b>";
    }
?>