<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>GAJI KARYAWAN</h1>
<fieldset>

<form action="hasil.php" method="POST">
<legend><h1> Penghitungan Gaji </h1> </legend>

<p> <label> Masukan Nama Anda   :  </label>
<input type="text" name="nama" placeholder="Masukan Nilai Gaji Anda">
</p>

<p> <label> Masukan Bagian Divisi Anda    :  <label>
    <input type="text" name="divisi" placeholder="Masukan Bagian Divisi Anda">
</p>

<p> <label> Masukan Nilai Gaji Bulanan Anda   :  </label>
<input type="teks" name="gaji" placeholder="Masukan Nilai Gaji Anda">
</p> 

<p> <label> Apakah anda memiliki NPWP atau Tidak? </label>
<select name="npwp" id=" ">
    <option value="Ya">  IYA </option>
    <option value="Tidak"> TIDAK </option> 
</p> 

<p>
    <input type="submit" name="submit" value="Submit">
</p>


</fieldset>

</body>
</html>