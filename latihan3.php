<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];
    
    // Menghitung umur
    $tanggal_sekarang = new DateTime();
    $tanggal_lahir = new DateTime($tanggal_lahir);
    $umur = $tanggal_sekarang->diff($tanggal_lahir)->y;
    
    // Menentukan gaji berdasarkan pekerjaan
    $gaji = 0;
    switch ($pekerjaan) {
        case 'Guru':
            $gaji = 5000000;
            break;
        case 'Dokter':
            $gaji = 15000000;
            break;
        case 'Programmer':
            $gaji = 10000000;
            break;
        // Tambahkan kasus lainnya sesuai kebutuhan
    }
    
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp" . number_format($gaji, 2, ',', '.') . "<br>";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="nama">
  Tanggal Lahir: <input type="date" name="tanggal_lahir">
  Pekerjaan:
  <select name="pekerjaan">
    <option value="Guru">Guru</option>
    <option value="Dokter">Dokter</option>
    <option value="Programmer">Programmer</option>
    <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
  </select>
  <input type="submit" value="Submit">
</form>
