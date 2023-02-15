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
    <div class="center">
        <h3> Selamat Datang di Halaman Home </h3>
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
        <img src="image/<?php echo $row["file"]; ?>" alt="SMKN 1 Kuwus">
    </div>

    <!-- Panggil file navbar.php -->
    <?php include "footer.php" ?>
</body>
</html>