<?php
header("Content-Type: application/json");

// Konfigurasi koneksi ke database (sesuaikan dengan pengaturan Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "tugas-job1-db";

// Buat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Kueri SQL untuk mengambil data dari tabel karyawan dan tabel_gaji
$sql = "SELECT k.nama_karyawan, g.gaji_pokok
        FROM tabelkaryawan AS k
        INNER JOIN tabelgaji AS g ON k.id_karyawan = g.id_karyawan
        ORDER BY g.gaji_pokok ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Mengirim data sebagai JSON
    echo json_encode($data);
} else {
    echo json_encode(array("message" => "Tidak ada data yang ditemukan."));
}

// Tutup koneksi ke database
$conn->close();
?>
