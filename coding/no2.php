<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama = $_POST['nama'];
    $tahun_lahir = $_POST['tahun_lahir'];

    // Mendapatkan tahun sekarang
    $tahun_sekarang = date("Y");

    // Hitung umur
    $umur = $tahun_sekarang - $tahun_lahir;

    // Tampilkan hasilnya
    echo "Halo, " . $nama . "!\n";
    echo "Umur kamu sekarang adalah " . $umur . " tahun.\n";
}
?>
