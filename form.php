<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir</title>
</head>
<body>
    <form action="" method="post">
<fieldset>
        <h1>Formulir Peserta</h1>
        <p>
            NISN : <input type="text" name="nisn" placeholder="Masukkan NISN"> <br />
        </p>

         <p>
            Nama lengkap : <input type="text" name="nama" placeholder="Masukkan nama anda"> <br />
        </p>

        <p>
           Tempat lahir : <input type="text" name="tempat" placeholder="Masukkan tempat lahir anda"> <br />
        </p>

        <p>
            Tanggal lahir : <input type="date" name="tanggal" placeholder="Masukkan tanggal lahir anda"> <br />
        </p>    

        <p>
            Gender : <input type="radio" name="gender" value="L">Laki-laki
                     <input type="radio" name="gender" value="P">Perempuan <br />
        </p>

        <p>
            Agama : <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghucu">Konghucu</option> <br />
                    </select>
        </p>

        <p>
            <p>Alamat :</p>
            <textarea name="alamat" cols="30" rows="10"></textarea> <br />
        </p>

        <p>
            Asal sekolah : <input type="text" name="asalsekolah" placeholder="Masukkan asal sekolah anda">
        </p>

        <p>
            Pilihan jurusan 1 :
            <select name="jurusan 1">
            <option value="AKL">Akuntansi Keuangan Lembaga</option>
            <option value="MPLB">Manajemen perkantoran & layanan bisnis</option>
            <option value="PM">Pemasaran</option>
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="BCF">BroadCasting & perfilman</option>
            <option value="PH">Perhotelan</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="KL">Kuliner</option>
            </select>
        </p>

        <p>
            Pilihan jurusan 2 :
            <select name="jurusan 2">
            <option value="AKL">Akuntansi Keuangan Lembaga</option>
            <option value="MPLB">Manajemen perkantoran & layanan bisnis</option>
            <option value="PM">Pemasaran</option>
            <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
            <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
            <option value="DKV">Desain Komunikasi Visual</option>
            <option value="BCF">BroadCasting & perfilman</option>
            <option value="PH">Perhotelan</option>
            <option value="SP">Seni Pertunjukan</option>
            <option value="KL">Kuliner</option>
            </select>
        </p>

        <p>
            Ekstrakurikuler yang diminati :
            <input type="checkbox" name="osis">Osis
            <input type="checkbox" name="gds">Gerakan Disiplin Siswa
            <input type="checkbox" name="da">Dewan Ambalan
            <input type="checkbox" name="pa">Pecinta Alam
            <input type="checkbox" name="remas">Remaja Masjid
            <input type="checkbox" name="pmr">Palang Merah Remaja
            <input type="checkbox" name="futsal">futsal
            <input type="checkbox" name="basket">Basket 
            <input type="checkbox" name="voli">voli
            <input type="checkbox" name="teater">Teater Kusuma
            <input type="checkbox" name="Lh">Laskar Hijau
        </p>
        <p>
           <input type="submit" value="Input Data">
        </p>

        
    </form>
</fieldset>

    
    
</body>
</html>