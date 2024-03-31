<?php
	

$conn = mysqli_connect("localhost", "root", "", "skynet");
function pendaftaran($data) {
    global $conn;
    
    $kota = strtolower(stripcslashes($data["kota"]));
    $kecamatan = strtolower(stripcslashes($data["kecamatan"]));
    $kelurahan = strtolower(stripcslashes($data["kelurahan"]));
    $kodepos = strtolower(stripcslashes($data["kodepos"]));
    $namajalan = strtolower(stripcslashes($data["namajalan"]));
    $namagang = strtolower(stripcslashes($data["namagang"]));
    $rt = strtolower(stripcslashes($data["rt"]));
    $rw = strtolower(stripcslashes($data["rw"]));
    $blokrumah = strtolower(stripcslashes($data["blokrumah"]));
    $norumah = strtolower(stripcslashes($data["norumah"]));
    $catatan = strtolower(stripcslashes($data["catatan"]));
    $namapanggilan = strtolower(stripcslashes($data["namapanggilan"]));
    $namalengkap = strtolower(stripcslashes($data["namalengkap"]));
    $tempatlahir = strtolower(stripcslashes($data["tempatlahir"]));
    $tanggallahir = strtolower(stripcslashes($data["tanggallahir"]));

    $nomorhp = strtolower(stripcslashes($data["nomorhp"]));
    $nomoralternatif = strtolower(stripcslashes($data["nomoralternatif"]));
    $email = strtolower(stripcslashes($data["email"]));

    
    
    // upload gambar

    $gambar = upload();
    if( !$gambar ){
        return false;
    }
   
    // tambahin user ke database    
    mysqli_query($conn, "INSERT INTO pendaftaran VALUES('', '$kota', '$kecamatan', '$kelurahan', '$kodepos', '$namajalan', '$namagang', '$rt', '$rw', '$blokrumah', '$norumah', '$catatan', '$namapanggilan', '$namalengkap', '$tempatlahir', '$tanggallahir', '$nomorhp', '$nomoralternatif', '$email', '$gambar')");

    return mysqli_affected_rows($conn);
    } 
    function upload(){
        // Mendapatkan informasi file yang diupload
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
    
        // Cek apakah terjadi error saat upload
        if($error === 4){
            echo "<script>
                alert('Pilih gambar terlebih dahulu!');
                </script>";
            return false;
        }
    
        // Cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                alert('File yang diupload bukan gambar!');
                </script>";
            return false;
        }
    
        // Cek ukuran file
        if ($ukuranFile > 5000000) {
            echo "<script>alert('Ukuran gambar terlalu besar! (Max 5MB)');</script>";
            return false;
        }
    
        // Generate nama file baru untuk menghindari duplikasi nama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
    
        // Pindahkan file yang diupload ke folder uploads
        if(move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru)){
            return $namaFileBaru; // Mengembalikan nama file baru
        } else {
            echo "<script>alert('Gagal mengupload file!');</script>";
            return false;
        }
    }
    ?> 
