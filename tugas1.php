<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <label for="no">No transaksi :</label>
        <input type="number" name="no_transaksi" required>
        <br>
        <label>Nama pembeli :</label>
        <input type="text" name="nama_pembeli" required>
        <br>
        <label>Judul buku :</label>
        <input type="text" name="judul_buku" required>
        <br>
        <label>Jumlah buku :</label>
        <input type="number" name="jumlah_buku" required>
        <br>
        <label>Harga buku :</label>
        <input type="number" name="harga_buku" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
if (isset($_POST['submit'])) {
    $no_transaksi = $_POST['no_transaksi'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $judul_buku = $_POST['judul_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku = $_POST['harga_buku'];

    $total_belanja = $harga_buku * $jumlah_buku;

    $diskon_belanja = 0;
    if ($total_belanja > 150000) {
        $diskon_belanja = $total_belanja * 0.10;
    }

    $diskon_transaksi = 0;
    if ($no_transaksi <= 50) {
        $diskon_transaksi = $total_belanja * 0.05;
    }

    $total_bayar = $total_belanja - $diskon_belanja - $diskon_transaksi;
}
?>
    <?php if (isset($_POST['submit'])) { ?>
        <h3>Hasil:</h3>
        <label>No. transaksi :</label> <?php echo $no_transaksi; ?>
        <br>
        <label>Nama pembeli :</label> <?php echo $nama_pembeli; ?>
        <br>
        <label>Harga :</label> <?php echo $harga_buku; ?>
        <br>
        <label>Diskon belanja 10% :</label> <?php echo $diskon_belanja; ?>
        <br>
        <label>Diskon transaksi 5% :</label> <?php echo $diskon_transaksi; ?>
        <br>
        <label>Total Bayar :</label> <?php echo $total_bayar; ?>
    <?php } 
    ?>
</body>
</html>  
