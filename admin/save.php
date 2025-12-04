<?php
session_start();

// Cek Login
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Ambil data dari form
    $new_promos = $_POST['promos'];

    // 2. Format ulang array (opsional, untuk membersihkan index)
    $clean_data = array_values($new_promos);

    // 3. Simpan ke JSON
    file_put_contents('../data/promos.json', json_encode($clean_data, JSON_PRETTY_PRINT));

    // 4. Redirect kembali
    echo "<script>alert('Data Berhasil Disimpan!'); window.location.href='index.php';</script>";
}
?>