<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Basis Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav>
        <h2>arya wiratama.</h2>
        <div>
            <a href="#">
                <p>Tugas basis data</p>
            </a>
            <a href="gambar.php">
                <p>Soal Tugas</p>
            </a>
        </div>
    </nav>

    <div class="container">
        <h3>Apoteker</h3>
        <table border="3" class="tabel-apoteker">
            <thead>
                <tr>
                    <th>ID Apoteker</th>
                    <th>Nama</th>
                    <th>Spesialisasi</th>
                    <th>Nomor Telpon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM apoteker';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_apoteker'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['spesialisasi'] ?></td>
                        <td><?php echo $row['no_telpon'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h3>Obat</h3>
        <table border="3" class="tabel-obat">
            <thead>
                <tr>
                    <th>ID Obat</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM obat';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_obat'] ?></td>
                        <td><?php echo $row['nama_obat'] ?></td>
                        <td><?php echo $row['harga'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <div class="container">
        <h3>Pelanggan</h3>
        <table border="3" class="tabel-pelanggan">
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Nomor Telpon</th>
                    <th>Nomor Asuransi</th>
                    <th>Nomor Polis</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM pelanggan';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_pelanggan'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['tanggal_lahir'] ?></td>
                        <td><?php echo $row['no_telpon'] ?></td>
                        <td><?php echo $row['no_asuransi'] ?></td>
                        <td><?php echo $row['no_polis'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h3>Transaksi</h3>
        <table border="3" class="tabel-transaksi">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Pelanggan</th>
                    <th>ID Apoteker</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Biaya</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM transaksi';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_transaksi'] ?></td>
                        <td><?php echo $row['id_pelanggan'] ?></td>
                        <td><?php echo $row['id_apoteker'] ?></td>
                        <td><?php echo $row['tanggal_transaksi'] ?></td>
                        <td><?php echo $row['total_biaya'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h3>Detail Transaksi</h3>
        <table border="3" class="tabel-detail-transaksi">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>ID Obat</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM detail_transaksi';
                $query = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id_transaksi'] ?></td>
                        <td><?php echo $row['id_obat'] ?></td>
                        <td><?php echo $row['jumlah'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>