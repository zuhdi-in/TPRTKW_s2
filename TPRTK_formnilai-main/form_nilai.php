<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Nilai Siswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container ">
		<div class="px-5 shadow p-3 rounded-1 mt-4">
			<h5 class="mt-2">Sistem Penilaian</h5><hr>
			<h2 class="mb-5 mt-3 text-center">Form Nilai Siswa</h2>
			<form method="POST" action="array_siswa.php" class="row ">
			<div class="row mb-4 mt-4">
				<label class="col-3">Nama</label> 
				<input type="text" name="nama" value="" size="30" class="col-7" />
			</div>
			<div class="row mb-4">
				<label class="col-3">Mata Kuliah</label> 
				<select name="matkul" class="col-5">
					<option value="DDP">Dasar-Dasar Pemrograman</option>
					<option value="BDI">Basis Data I</option>
					<option value="WEB1">Pemrograman Web</option>
				</select>
			</div>
			<div class="row mb-4">
				<label class="col-3">Nilai UTS</label> 
				<input type="number" name="nilai_uts" value="" size="6" class="col-1"/>
			</div>
			<div class="row mb-4">
				<label class="col-3">Nilai UAS</label> 
				<input type="number" name="nilai_uas" value="" size="6" class="col-1"/>
			</div>
			<div class="row mb-4">
				<label class="col-3">Nilai Tugas/Praktikum</label> 
				<input type="number" name="nilai_tugas" value="" size="6" class="col-1"/>
			</div>
			<input type="submit" value="Simpan" name="proses" class="btn btn-primary col-2 mx-auto mb-2 mt-5" />
			</form>
		</div>
	</div>

</body>
</html>