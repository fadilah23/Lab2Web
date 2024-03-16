<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar </title>
</head>
<body>
    <!-- form input -->
<h2>Form Input </h2>
<form method="post">
    <label>Nama : </label>
    <input type="text" name="nama">
    <input type="submit" value="kirim">
</form>
<br>
    <?php
    echo 'Selamat Datang' . $_GET ['nama'];
    ?>
    
<!-- operator  -->

<p>
<?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
?>
</p>

<!-- Kondisi IF -->
<p>
<?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Selasa";
    } else {
    echo "Rabu";
    }
?>
</p>

<!-- Kondisi Switch -->
<p>
<?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";}
?>
</P>


<!--Perulangan For   -->
<p>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
?>
</p>

<!-- perulangan while  -->
<p>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
?>
</p>

<!-- Perulangan Downline  -->
<p>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
?>
</p>
</body>
</html>
