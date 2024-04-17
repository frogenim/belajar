<!DOCTYPE HTML>
<html>
    <head>
        <title>Penanganan Form</title>
    </head>
    <body>
        <form action="" method="POST" name="input">
            <label>Nama Anda : </label>
            <input type="text" name="nama" placeholder="Isi Nama Anda" required>
            <br><br>
            <input type="submit" name="kirim" value="Proses">
        </form>
    </body>
</html>
<?php
//menangkap variabel nama dari form 
$nama=$_POST['nama'];
//menangkap variabel kirim dari form (submit)
$kirim=$_POST['kirim'];
    if(isset($kirim)){
        echo "Nama Anda : <b>$nama</b>";
    }
?>