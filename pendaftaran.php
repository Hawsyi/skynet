<?php

require 'functions.php';

if( isset($_POST["register"]) ) {


    if( pendaftaran($_POST) > 0 ){
        echo "<script>
        alert('berhasil bro!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
    
}



?>

<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" href="pendaftaran.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="shortcut icon" href="logo title.png " type="image/x-icon" />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />   
    <title>Registrasi</title>
    
        <body>
        <nav class="navbar">
     
     <a href="index.php" class="navbar-logo"
         > <img src="solutions.png" alt=""></a
       >
 
       <div class="navbar-nav">
         <a href="pendaftaran.php">Layanan</a>
         <a href="#">Promo</a>
         <a href="#">Tentang Skynet</a>
         <a href="#">Hubungi Kami</a>
       </div>
 
       <div class="navbar-extra">
         <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
         <a href="#" class="search" id="search"><i data-feather="search"></i></a>
       </div>
 
 
     </nav>
        <div class="daftar">
              
            <h1>Form Pendaftaran</h1>
            <div class="slogan">
            <p>Terima kasih sudah tertarik untuk berlangganan Internet Skynet. Silahkan isi data kamu pada kolom di bawah ini:</p>
            </div>     
            <form action=""method="post" enctype="multipart/form-data">
                
                <ul>
               
           
                            <li >
                                <label for="kota">Kota / Kabupaten :</label>
                                <input type="text" name="kota" id="kota">
                            </li>
                            <li >
                                <label for="kecamatan">Kecamatan :</label>
                                <input  type="text" name="kecamatan" id="kecamatan"  required>
                            </li>
                    
                            <li>
                                <label for="kelurahan">kelurahan :</label>
                                <input  type="text" name="kelurahan" id="kelurahan" required>
                            </li>
                            <li>
                                <label for="kodepos">Kode POS :</label>
                                <input  type="number" name="kodepos" id="kodepos"  required>
                            </li>
                            <li>
                                <label for="namajalan">Nama Jalan :</label>
                                <input  type="text" name="namajalan" id="namajalan" required>
                            </li>
                            <li>
                                <label for="namagang">Nama Gang:</label>
                                <input  type="text" name="namagang" id="namagang"  required>
                            </li>
                            <li>
                                <label for="rt">RT :</label>
                                <input  type="number" name="rt" id="rt"  required>
                            </li>
                            <li>
                                <label for="rw">RW :</label>
                                <input  type="number" name="rw" id="rw" required>
                            </li>
                            <li>
                                <label for="blokrumah">Blok Rumah :</label>
                                <input  type="text" name="blokrumah" id="blokrumah" required>
                            </li>
                            <li>
                                <label for="norumah">No Rumah:</label>
                                <input  type="number" name="norumah" id="norumah" required>
                            </li>
                            <li>
                                <label for="catatan">Catatan :</label>
                                <input  type="text" name="catatan" id="catatan" required>
                            </li>
                            <li>
                                <label for="namapanggilan">Nama Panggilan :</label>
                                <input  type="text" name="namapanggilan" id="namapanggilan" required>
                            </li>
                            <li>
                                <label for="namalengkap">Nama lengkap :</label>
                                <input  type="text" name="namalengkap" id="namalengkap">
                            </li>
                            <li>
                                <label for="tempatlahir">Tempat Lahir :</label>
                                <input  type="text" name="tempatlahir" id="tempatlahir">
                            </li>
                            <li>
                                <label for="tanggallahir">Tanggal Lahir :</label>
                                <input  type="text" name="tanggallahir" id="tanggallahir">
                            </li>
                         
                            <li>
                                <label for="nomorhp">Nomor HP :</label>
                                <input  type="number" name="nomorhp" id="nomorhp">
                            </li>
                            <li>
                                <label for="nomoralternatif">Nomor Alternatif :</label>
                                <input  type="number" name="nomoralternatif" id="nomoralternatif">
                            </li>
                            <li>
                                <label for="email">Email :</label>
                                <input  type="text" name="email" id="email">
</li>
                            <li>
                                <label for="gambar">Poto Rumah :</label>
                                <input  type="file" name="gambar" id="gambar">
                            </li>
                         
                         
                            
                          
                            <button type="submit" name="register">Register</button>
                          
                   
                       </ul>
                    </form>
            </div>    
            <!-- footer start-->
    <!-- <footer>
      <div class="futer">
      <div class="social">
        <a href="https://www.instagram.com/fahri.setyaa/">
          <i data-feather="instagram"></i>
        </a>
        <a href="#">
          <i data-feather="facebook"></i>
        </a>
      </div>


      <div class="credit">
      <p>Created by<a href=""> Fahri Setya Gunawan </a>.|&copy;2024.</p>
      </div>
      </div>
    </footer>  -->
    <!-- footer end --> 
        </div>
     <!-- feather icons -->
<!-- 
     <script>
      feather.replace();
    </script> -->
    <!-- my java script -->
    <script src="script.js"></script>
  </body>
        </div>
          
        
    </head>
</html>