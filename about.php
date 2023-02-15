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
        <h3 class="center"> Selamat Datang di Halaman About </h3>
        <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tb_about WHERE id=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "0 result";
            }
        ?>

        <p>
          <?php echo $row["keterangan"]; ?>
        </p>
        <!--Bagian Video -->
        <video class="center" controls>
            <source src="video/video websiteSekolah.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Panggil file navbar.php -->
    <?php include "footer.php" ?>
</body>
</html>