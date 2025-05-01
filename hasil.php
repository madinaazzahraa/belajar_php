<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>GAJI KARYAWAN</h1>


<tr> <td> Nama   :  </td>
<td><?= $_POST['nama'];?> <br> </td>
</tr>

<tr> <td> Bagian Divisi    :  </td>
    <td><?= $_POST['divisi']; ?> <br></td>
</tr>

<tr> <td> Nilai Gaji Perbulan   :  </td> 
<td><?= $_POST['gaji'];?><br></td>
</tr> 

<tr> <td> NPWP     : </td>
<td><?= $_POST['npwp'];?><td>
</tr>

<p id="hasil">
<?php
    if(isset($_POST['submit'])) {

        $gaji = $_POST['gaji'] ;
        $divisi = $_POST['divisi'] ; 
        $tahunan= $gaji*12;
        $pajak = 0;
        $npwp = $_POST['npwp'];
       
        echo "gaji tahunan anda ".$tahunan."<br>";
        if($tahunan > 54000000 ) {
            if ($npwp =="Ya") {
                echo "gaji bersih bulanan Anda ".number_format($total= $tahunan - ($tahunan * 0.15),0,',','.')."<br>";
                echo "Sudah di potong pajak sebesar 15%.<br>";
            }  else {
                $total= $tahunan - ($tahunan * 0.20);
                echo "gaji bersih bulanan Anda ".number_format($akhir= $tahunan - ($tahunan * 0.20),0,',','.')."<br>";
                echo "Sudah di potong pajak sebesar 20%.";
                
            }
        }
        

    }
?>


</body>
</html>