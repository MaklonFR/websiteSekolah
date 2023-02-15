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
        <h3 class="center"> Selamat Datang di Halaman Jurusan </h3>
        <h3> Daftar Jurusan SMKN 1 Kuwus</h3>
        <table class="myTable">
            <!--Bagian Kop Tabel-->
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Jumlah Kelas</th>
            </tr>
            <!--Bagian isi Tabel-->
            <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tb_jurusan";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "
                                <tr>
                                    <td> ".$row["id"]." </td>
                                    <td> ".$row["nama_jurusan"]." </td>
                                    <td> ".$row["jumlah_kelas"]." </td>
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