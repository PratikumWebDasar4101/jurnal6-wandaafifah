<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form  action="submit.php" method="POST" enctype="multipart/form-data">

			Nama : <input type="text" name="nama"  minlength="1" maxlength="35" ><br></br>
			NIM : <input type="number"  name="nim" maxlength="10"  required ><br></br>
			Kelas:<input type="radio" name="kelas " value="d3mi4101" required>D3MI4101
					<input type="radio" name="kelas" value="d3mi4102" required>D3MI4102
					<br>
					<br>
			Jenis Kelamin :	<input type="radio" name="jeniskelamin" value="Laki-Laki" required>Laki-laki

					 		<input type="radio" name="jeniskelamin" value="Perempuan" required>Perempuan

					 		<br>

					 			</br>

						<br>

					Hobi :

					<input type="checkbox" name="hobi" value="Jalan-jalan" >jalan-jalan

					<input type="checkbox" name="hobi" value="Baca Novel">Baca Novel

						<br>

					<br>
			Fakultas :

					<select name="fakultas">

						<option>FIT</option>

						<option>FKB</option>

						<option>FRI</option>

						<option>FIK</option>	

						<option>FIF</option>

						<option>FEB</option>

						<option>FTE</option>

					</select>

						<br>

					<br>

			Alamat : <textarea row ="20" cols="28" name="alamat"></textarea>
						<br><br>
					<input type="submit" name="kirim" value="submit">

						<br>

					<br>

			

	</form>

</body>

</center>

</html>