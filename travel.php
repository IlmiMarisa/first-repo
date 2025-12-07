<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Insurans</title>
</head>
<body>  
    <center>
        <form method="POST" action="paparan.php">
            <h1>TRAVEL SAFE INSURANS</h1>
            <h3>:::Kami menyediakan insurans yang murah untuk perjalanan anda:::</h3>
            
            <!--pengguna mengisi borang maklumat diri-->
            Nama :
            <input type="text" name="Nama"><br><br>

            No. Kad Pengenalan :
            <input type="text" name="IC"><br><br>
 
            No. Telefon :
            <input type="text" name="Nombor"><br><br>

            E-mail :
            <input type="text" name="Email"><br><br>

            Nama dan Alamat Penerima :<br><br>
            <textarea name="alamat"></textarea><br><br>
            
            <!--pemilihan kategori umur-->
            <label for="umur">Kategori umur :</label>
                <select name="umur" id="umur">
                    <option value="kanak-kanak">1-12 Tahun</option>
                    <option value="remaja">13-18 tahun</option>
                    <option value="dewasa">19-59 tahun</option>
                    <option value="wargaemas">60 tahun >></option>
                </select>
                <br><br>        
            <!--pemilihan lokasi sama ada di dalam negeri atau antarabangsa-->
            <label for="lokasi">Pilihan Lokasi :</label>
                <select name="lokasi" id="lokasi">
                    <option value="Negeri">Dalam Negeri</option>
                    <option value="Antarabangsa">Antarabangsa</option>
                </select>
                <br><br>    

            <!--pilihan untuk mendapatkan perlindungan covid19 atau tidak-->        
            <label for="perlindungan">Perlindungan tambahan Covid-19 :</label>
                <select name="perlindungan" id="protec">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
                <br><br>

            <!--butang submit untuk menghantar borang-->
            <input type="submit" value="Submit" name="hantar">
            <button type="reset">Reset</button>
        </form>
</body>
</html>