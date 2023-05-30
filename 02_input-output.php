<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I/O TextField</title>
</head>
<body>
    <h3>Form Data Siswa</h3>
    <!-- # karena akan dieksekusi di halaman yg sama -->
    <form action="#" method="POST">
        <input type="text" name="txNama" placeholder="Nama" id="">
        <input type="number" name="numbUmur" placeholder="Umur" id="">
        <input type="text" name="txJurusan" placeholder="Jurusan" id="">
        <input type="submit" value="Simpan" name="btSimpan">
    </form>

<?php 

    class Biodata{
        public $data;

        public function dataSiswa($data){
            $this->data = $data;
            if ($this->data != ""){
                return $data;
            }else{
                return "Data butuh diisi!";
            }
            
        }
    }

        $biodata = new Biodata();
        if(isset($_POST['btSimpan'])){
           echo $biodata->dataSiswa($_POST['txNama']) ." | ". 
                $biodata->dataSiswa($_POST['numbUmur'])." | ". 
                $biodata->dataSiswa($_POST['txJurusan']);
        }
    
    ?>
</body>
</html>