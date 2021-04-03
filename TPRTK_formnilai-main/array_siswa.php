<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Nilai Siswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    	<div class="px-5 shadow p-3 rounded-1 mt-5 row">					
			<?php
			$proses = $_POST['proses'];
		    $nama_siswa = $_POST['nama']; 
		    $mata_kuliah = $_POST['matkul'];
		    $nilai_uts = $_POST['nilai_uts'];
		    $nilai_uas = $_POST['nilai_uas'];
		    $nilai_tugas = $_POST['nilai_tugas'];
		    $hasil_sementara = $nilai_uts + $nilai_uas + $nilai_tugas;
		    	$total = $hasil_sementara / 3;		        
		        if ($total >= 90){
		            $grade = "A (Sangat Memuaskan)";
		        }
		        elseif ($total >= 85){
		           $grade = "B (Memuaskan)";
		        }
		        elseif ($total >= 70){
		           $grade = "C (Cukup)";
		        }
		        elseif ($total >= 56){
		           $grade = "D (Kurang)";
		        }
		        elseif ($total >= 36){
		           $grade = "E (Sangat Kurang)";
		        }

		         elseif ($total >= 55){
		            $ket= "Tidak Lulus";
		        }
		         else;{
		           $ket= "Lulus";
		        }
		    			        	    

			$ns1 = ['id'=>1,'nama'=>'Junaedi', 'matakuliah'=>$mata_kuliah,'uts'=>80,'uas'=>84,'tugas'=>78, 'rata-rata'=>80,'grade'=>'B','keterangan'=>'Lulus'];
			$ns2 = ['id'=>2,'nama'=>'Sutisna', 'matakuliah'=>$mata_kuliah,'uts'=>70,'uas'=>50,'tugas'=>68, 'rata-rata'=>62,'grade'=>'C','keterangan'=>'Lulus'];
			$ns3 = ['id'=>3,'nama'=>'Malik Robani', 'matakuliah'=>$mata_kuliah,'uts'=>60,'uas'=>86,'tugas'=>70, 'rata-rata'=>72,'grade'=>'C','keterangan'=>'Lulus'];
			$ns4 = ['id'=>4,'nama'=>'Galih Prasetyo', 'matakuliah'=>$mata_kuliah,'uts'=>90,'uas'=>91,'tugas'=>82, 'rata-rata'=>87,'grade'=>'B','keterangan'=>'Lulus'];
			$ns5 = ['id'=>5,'nama'=> $nama_siswa, 'matakuliah'=>$mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas, 'rata-rata'=>$total,'grade'=>$grade,'keterangan'=>$ket];


			$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];

			?>
			<div class="col-4 text-center" >
				<table border="1" width="100%" class="table table-striped">
				<thead>
					<tr>
					  <th>Range Nilai</th>					 
					</tr>
				</thead>
				<tbody>

					<tr>
					  <td>A : 85 - 100</td>
					</tr>
					  <td>B : 70 -84</td>
					<tr>
					  <td>C: 56-69</td>
					</tr>
					  <td>D : 36 - 55</td>
					<tr>
					  <td>E : Kurang dari 35</td>
					</tr>
				</tbody>
				</table>
			</div>		
		</div>	
	</div>		
    <div class="container">
    	<div class="px-5 shadow p-3 rounded-1 mt-5">
			<h5 class="mt-2">Sistem Penilaian</h5><hr>
			<h2 class="mb-5 mt-3 text-center">Daftar Nilai Siswa</h2>
			<table border="1" width="100%" class="table table-striped table-hover">
			<thead>
				<tr>
					<th>No</th><th>Nama</th><th>Mata Kuliah</th><th>UTS</th>
					<th>UAS</th><th>Tugas</th><th>Rata-rata</th><th>Grade</th><th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php
			 	$nomor = 1;
				foreach($ar_nilai as $ns){
					echo '<tr><td>'.$nomor.'</td>';
					echo '<td>'.$ns['nama'].'</td>';
					echo '<td>'.$ns['matakuliah'].'</td>';
					echo '<td>'.$ns['uts'].'</td>';
					echo '<td>'.$ns['uas'].'</td>';
					echo '<td>'.$ns['tugas'].'</td>';					
					echo '<td>'.$ns['rata-rata'].'</td>';
					echo '<td>'.$ns['grade'].'</td>';
					echo '<td>'.$ns['keterangan'].'</td>';
					echo '<tr/>';
					$nomor++;
                }				
				?>
			</tbody>
			</table></br></br></br></br>
		</div>
	</div>
</body>
</html>