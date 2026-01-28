<?php
require_once __DIR__ . "/../app/Helpers/General.php";
require_once __DIR__ . "/../app/Services/BukuService.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $service = new BukuService();

    $data = [
        'judul' => sanitize($_POST['judul']),
        'penulis' => sanitize($_POST['penulis']),
        'tahunTerbit' => (int) $_POST['tahunTerbit'],
        'tipe' => $_POST['tipe']
    ];

    $service->tambah($data);
    redirect("index.php");
}
?>

<h2>Tambah Buku</h2>

<form method="post">
    Judul <br>
    <input type="text" name="judul" required><br><br>

    Penulis <br>
    <input type="text" name="penulis" required><br><br>

    Tahun Terbit <br>
    <input type="number" name="tahunTerbit" required><br><br>

    Tipe <br>
    <select name="tipe">
        <option value="biasa">Biasa</option>
        <option value="referensi">Referensi</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
