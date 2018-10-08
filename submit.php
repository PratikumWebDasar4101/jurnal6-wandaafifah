<?php

require_once("db.php");



$nama       = $_POST['nama'];

$nim        = $_POST['nim'];

$kelas  = $_POST['kelas'];

$jeniskelamin       = $_POST['jeniskelamin'];

$hobi        = $_POST['hobi'];

$fakultas  = $_POST['fakultas'];

$alamat  = $_POST['alamat'];






$sql = "INSERT INTO data(nama, nim, kelas, jeniskelamin, hobi, fakultas, alamat) 

        VALUES ('$nama','$nim','$kelas', '$jeniskelamin', '$hobi','$fakultas','$alamat')";






if (mysqli_query($conn, $sql)) {

    echo "New record created successfully<br>";

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}



mysqli_close($conn);

echo "silahkan klik <a href='list.php'>link</a> untuk ke halaman list";

?> 