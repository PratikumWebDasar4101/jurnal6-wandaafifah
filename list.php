<?php

require_once("db.php"); 

?>

<table border=1>

    <thead>

        <th>Nama</th>

        <th>Nim</th>

        <th>Kelas</th>

        <th>jeniskelamin</th>

        <th>Hobi</th>

        <th>Fakultas</th>

        <th>Alamat</th>

    </thead>

    <tbody>

<?php

$sql    = "SELECT * FROM data";

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {
        $id= $row['id'];

        echo "<tr>";

        echo "<td>" . $row["nama"]. "</td>"; 

        echo "<td>" . $row["nim"]. "</td>";

        echo "<td>" . $row["kelas"]. "</td>";

         echo "<td>" . $row["jeniskelamin"]. "</td>";

          echo "<td>" . $row["hobi"]. "</td>";

           echo "<td>" . $row["fakultas"]. "</td>";

            echo "<td>" . $row["alamat"]. "</td>";

            echo "<td>" . "<a href ='update.php?id=$id'>";




    }

} else {

    echo "0 results";

}

mysqli_close($conn);

?> 

    </tbody>

</table>