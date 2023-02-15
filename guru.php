<!DOCTYPE html>
<html lang="en">
<!-- Panggil file head.php -->
<?php include "head.php" ?>

<body>
    <!-- Panggil file header.php -->
    <?php include "header.php" ?>

    <!-- Panggil file navbar.php -->
    <?php include "navbar.php" ?>

    <!-- Bagian Isi-->
    <div>
        <h3 class="center"> Selamat Datang di Halaman Guru </h3>
        <h3>
            Daftar Nama Guru SMKN 1 Kuwus
        </h3>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Jenis Kelamin</th>
                <th>Mapel yang diajar</th>
                <th>Alamat</th>
            </tr>
            <!--Bagian isi Tabel-->
            <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tb_guru";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                                <tr>
                                    <td> ".$row["id"]." </td>
                                    <td> ".$row["nama_guru"]." </td>
                                    <td> ".$row["nip"]." </td>
                                    <td> ".$row["jk"]." </td>
                                    <td> ".$row["mapel"]." </td>
                                    <td> ".$row["alamat"]." </td>
                                </tr>
                             ";
                    }
                    echo "</table>";
                } else {
                    echo "0 result";
                }
            ?>
    </div>
    <!-- Panggil file navbar.php -->
    <?php include "footer.php" ?>
</body>
</html>