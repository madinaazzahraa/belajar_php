<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>
<?php

// konstantaaaa
define ("gajipokok", 5000000);
define ("bonus", 500000); 
define ("pajak", 0.12);

// operator penghitungan
$proyek = 2;
$total = gajipokok + (bonus * $proyek);
$gajibersih = $total - ($total*pajak);

echo "gaji pokok yang anda peroleh sebesar Rp5.000.000 ";
echo "<br>";
echo "total pendapatan anda adalah " . $total ;
echo "<br>";
echo "gajibersih seluruh pendapatan anda adalah " . $gajibersih;


?>
  </h1>
    
</body>
</html>



