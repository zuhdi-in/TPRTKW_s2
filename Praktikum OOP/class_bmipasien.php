<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Aplikasi BMI (Body Mass Index)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style type="text/css">
        .txt {
            font-family: Montserrat;
            font-weight: 400;
            font-size: 15px;
        }

        .txth {
            font-family: Montserrat;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5 shadow-sm py-4 px-2 bg-body rounded">
            <div class="col-6 s">
            <h4 class="text-center txth">Form Isian Indeks Massa Tubuh (BMI)</h4>
              <form method="POST" class="mt-5">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label txt">Nama Lengkap</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label txt">Umur</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="umur" required>
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-3 pt-0 txt">Jenis Kelamin</legend>
                    <div class="col-sm-9">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk"  value="Laki-Laki" name="jk" required>
                        <label class="form-check-label txt" >
                          Laki-Laki
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" name="jk" required>
                        <label class="form-check-label txt" >
                          Perempuan
                        </label>
                      </div>                      
                    </div>
                  </fieldset>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label txt">Berat Badan</label>
                    <div class="col-sm-9">
                        <div class="input-group">                        
                          <input type="number" class="form-control" name="bb" required>
                          <div class="input-group-text txt">Kg</div>
                        </div>    
                    </div>
                  </div>   
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label txt">Tinggi Badan</label>
                    <div class="col-sm-9">
                        <div class="input-group">                          
                          <input type="number" class="form-control" name="tb" required>
                          <div class="input-group-text txt">Cm</div>
                        </div>    
                    </div>                
                  </div>               
                  <button type="submit" class="btn btn-primary txt mt-5 ">Hitung BMI</button>
                </form>
            </div>
            <div class="col-6">
                <?php 
                                 
                  echo '<ul class="list-group"><li class="list-group-item active " aria-current="true"><h4 class="text-center txth">Hasil Evaluasi BMI</h4></li>';
                  if ($_POST){
                    $pasien = new BMIpasien( $_POST["nama"], $_POST["umur"], $_POST["jk"], $_POST["bb"], $_POST["tb"]);
                    $hb = $pasien->hasilBMI(); 
                    $sb = $pasien->statusBMI($hb);                                                                                                                 
                    echo '<li class="list-group-item"><strong>Nama :</strong> '.$pasien->nama.'</li>';
                    echo '<li class="list-group-item"><strong>Umur :</strong> '.$pasien->umur.'</li></ul>';
                    echo '<li class="list-group-item"><strong>Jenis Kelamin :</strong> '.$pasien->jk.'</li></ul>';
                    echo '<li class="list-group-item"><strong>Berat Badan :</strong> '.$pasien->bb.'</li></ul>';
                    echo '<li class="list-group-item"><strong>Tinggi Badan :</strong> '.$pasien->tb.'</li></ul>';
                    echo '<li class="list-group-item"><strong>Hasil BMI :</strong> '.number_format($hb,1)    .'</li></ul>';
                    echo '<li class="list-group-item"><strong>Status BMI :</strong> '.$pasien->statusBMI($hb).'</li></ul>';
                }
                   ?>
              <h4 class="text-center txth"></h4>

            </div>
        </div>
        
    </div>                        
            <?php  
            if ($_POST){       
                $ns1 = ['No'=>1,'nama'=>'Junaedi', 'Umur'=>30,'Jenis Kelamin'=>'Laki-Laki','Berat Badan'=>50,'Tinggi Badan'=>167, 'Hasil BMI'=>17.9,'Status BMI'=>'Kekurangan Berat Badan'];
                $ns2 = ['No'=>2,'nama'=>'Maemunah', 'Umur'=>35,'Jenis Kelamin'=>'Perempuan','Berat Badan'=>50,'Tinggi Badan'=>167, 'Hasil BMI'=>17.9,'Status BMI'=>'Kekurangan Berat Badan'];
                $ns3 = ['No'=>3,'nama'=>'Jaelani', 'Umur'=>34,'Jenis Kelamin'=>'Laki-Laki','Berat Badan'=>50,'Tinggi Badan'=>167, 'Hasil BMI'=>17.9,'Status BMI'=>'Kekurangan Berat Badan'];
                $ns4 = ['No'=>4,'nama'=>'Asep', 'Umur'=>25,'Jenis Kelamin'=>'Laki-Laki','Berat Badan'=>50,'Tinggi Badan'=>167, 'Hasil BMI'=>17.9,'Status BMI'=>'Kekurangan Berat Badan'];
                $ns5 = ['No'=>5,'nama'=> $pasien->nama, 'Umur'=>$pasien->umur,'Jenis Kelamin'=>$pasien->jk,'Berat Badan'=>$pasien->bb,'Tinggi Badan'=>$pasien->tb, 'Hasil BMI'=>number_format($hb,1), 'Status BMI'=>$sb];

                $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];            

            echo '<div class="container">
        <div class="row mt-5 shadow-sm py-3 px-5 bg-body rounded">
            <h5 class="mt-2 txth">Detail Daftar BMI Pasien</h5><hr>            
            <table border="1" width="100%" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th><th>Nama</th><th>Umur</th><th>Jenis Kelamin</th>
                    <th>Berat Badan</th><th>Tinggi Badan</th><th>Hasil BMI</th><th>Status BMI</th>
                </tr>
            </thead>
            <tbody>';
                                
                    $nomor = 1;
                    foreach($ar_nilai as $ns){
                        echo '<tr><td>'.$nomor.'</td>';
                        echo '<td>'.$ns['nama'].'</td>';
                        echo '<td>'.$ns['Umur'].'</td>';
                        echo '<td>'.$ns['Jenis Kelamin'].'</td>';
                        echo '<td>'.$ns['Berat Badan'].'</td>';
                        echo '<td>'.$ns['Tinggi Badan'].'</td>';                   
                        echo '<td>'.$ns['Hasil BMI'].'</td>';
                        echo '<td>'.$ns['Status BMI'].'</td>';                      
                        echo '<tr/>';
                        $nomor++;}
                
            echo '</tbody>
            </table></br></br></br></br>
        </div>
    </div>';
    }               
                ?>

</body>
</html>

<?php 
    class BMIpasien { // buka class
        public $nama;
        public $umur;
        public $jk;
        public $bb;
        public $tb;

        function __construct( $nama, $umur, $jk, $bb, $tb ){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->bb = $bb;
        $this->tb = $tb;    
        }
        public function hasilBMI(){

        return $this->bb / (($this->tb/100)**2); }

        public function statusBMI($hb){

            if ($hb < 18.5) {
                return "Kekurangan Berat Badan"; }

            else if ($hb >= 18.5 && $hb <= 24.9) {
                return "Normal (ideal)"; }

            else if ($hb >= 25.0 && $hb <= 29.9) {
                return "Kelebihan Berat Badan"; }

            else {
                return "Kegemukan (Obesitas)";
            }    
        }     
    } // tutup class    
?>
