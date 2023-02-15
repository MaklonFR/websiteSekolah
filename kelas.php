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
        <h3 class="center"> Selamat Datang di Halaman Kelas </h3>
        <h3>Daftar Kelas SMKN 1 Kuwus</h3>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Jumlah Siswa</th>
            </tr>
            <!--Bagian isi tabel-->
            <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tb_kelas";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                                <tr>
                                    <td> ".$row["id"]." </td>
                                    <td> ".$row["nama_kelas"]." </td>
                                    <td> ".$row["jurusan"]." </td>
                                    <td> ".$row["jumlah_siswa"]." </td>
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