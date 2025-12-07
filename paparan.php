<!DOCTYPE html>
<html>
<head>
    <title>Insurans</title>
</head>
<body>
    <center>
    <h2>TRAVEL SAFE INSURANS</h2>
    <h3>Terima kasih kerana menggunakan perkhidmatan kami<h3>
        <?php

        if(isset($_POST["hantar"])){

            //menyemak borang selepas pengguna menekan butang 'submit'
            $Nama=$_POST['Nama'];
            $IC=$_POST['IC'];
            $Nombor=$_POST['Nombor'];
            $Email=$_POST['Email'];
            $alamat=$_POST['alamat'];
            $umur=$_POST['umur'];
            $lokasi=$_POST['lokasi'];
            $perlindungan=$_POST['perlindungan']; 
            
            //variable 
            $harga = "";
            
            //menentukan harga berdasarkan umur
            if ($umur == "wargaemas"){
                $harga = "RM 25";
            } elseif($umur == "dewasa"){
                $harga = "RM 50";
            } elseif($umur == "remaja"){
                $harga = "RM 35";
            } else{
                $harga = "RM 15";
            }
            
            //memaparkan semua data yang telah diterima dan harga akhir
            echo "Nama: $Nama<br><br>";
            echo "IC: $IC<br><br>";
            echo "Nombor: $Nombor<br><br>";
            echo "Email: $Email<br><br>";
            echo "Nama dan Alamat: $alamat<br><br>";
            echo "Umur: $umur<br><br>";
            echo "Lokasi: $lokasi<br><br>";
            echo "Perlindungan: $perlindungan<br><br>";
            echo "Harga Bersih: $harga <br><br>"; 
        }
        ?>
    <a href="travel.php"><button type="button">Back</button></a>
</body>
</html>