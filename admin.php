<?php
// admin.php

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "skynet");

// Query untuk mengambil semua data dari tabel pendaftaran
$query = "SELECT * FROM pendaftaran";
$result = mysqli_query($conn, $query);

// Memuat data ke dalam formulir admin
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="admin.css" />
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
</head>
<body>
    <div class="background">
<img src="backgroundpanjang.jpg" alt="">
    
    <h2>Data Pendaftaran</h2>
    <div class="data">
    
<div class="tabel1">
    <table>
        <tr>
            <th class="oo">Kota / Kabupaten</th>
            <th class="oo">kecamatan</th>
            <th class="oo">Kelurahan</th>
            <th class="oo">Kode Pos</th>
            <th class="oo">Nama Jalan</th>
            <th class="oo">Nama Gang</th>
            <th class="oo">RT</th>
            <th class="oo">RW</th>
            <th class="oo">Blok Rumah</th>
            <th class="oo">No Rumah</th>
            <th class="oo">Catatan</th>
            <th class="o3">Nama Panggilan</th>
            <th class="o3">Nama Lengkap</th>
            <th class="o3">Tempat Lahir</th>
            <th class="o3">Nomor HP</th>
            <th class="o3">Nomor Alternatif</th>
            <th class="o3">Email</th>
            <th class="o3">Gambar</th>

            <!-- Tambahkan kolom sesuai dengan data yang ingin ditampilkan -->
        </tr>
        </div>
       <div class="tabel2">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td class="oo"><?php echo $row['Kota / Kabupaten']; ?></td>
                <td class="oo"><?php echo $row['Kecamatan']; ?></td>
                <td class="oo"><?php echo $row['Kelurahan']; ?></td>
                <td class="oo"><?php echo $row['Kode Pos']; ?></td>
                <td class="oo"><?php echo $row['Nama Jalan']; ?></td>
                <td class="oo"><?php echo $row['Nama Gang']; ?></td>
                <td class="oo"><?php echo $row['RT']; ?></td>
                <td class="oo"><?php echo $row['RW']; ?></td>
                <td class="oo"><?php echo $row['Blok Rumah']; ?></td>
                <td class="oo"><?php echo $row['No Rumah']; ?></td>
                <td class="oo"><?php echo $row['Catatan']; ?></td>
                <td class="o3"><?php echo $row['Nama Panggilan']; ?></td>
                <td class="o3"><?php echo $row['Nama Lengkap']; ?></td>
                <td class="o3"><?php echo $row['Tempat Lahir']; ?></td>
                <td class="o3"><?php echo $row['Nomor HP']; ?></td>
                <td class="o3"><?php echo $row['Nomor Alternatif']; ?></td>
                <td class="o3"><?php echo $row['Email']; ?></td>
                <td class="o3"><img src="uploads/<?php echo $row['gambar']?>" width="50" ></td>
             

                <!-- Tambahkan kolom sesuai dengan data yang ingin ditampilkan -->
            </tr>
        <?php endwhile; ?>
        
        </div>
       
    </table>
    </div>
</body>
</html>
