<?php
require_once __DIR__ . "/../app/Helpers/General.php";
require_once __DIR__ . "/../app/Services/BukuService.php";

$service = new BukuService();
$id = (int) $_GET['id'];
$book = null;

foreach ($service->all() as $b) {
    if ($b['id'] === $id) {
        $book = $b;
    }
}

if (!$book) {
    die("Buku tidak ditemukan");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'judul' => sanitize($_POST['judul']),
        'penulis' => sanitize($_POST['penulis']),
        'tahunTerbit' => (int) $_POST['tahunTerbit']
    ];

    $service->update($id, $data);
    redirect("index.php");
}
?>

<h2>Edit Buku</h2>

<form method="post">
    Judul <br>
    <input type="text" name="judul" value="<?= $book['judul'] ?>" required><br><br>

    Penulis <br>
    <input type="text" name="penulis" value="<?= $book['penulis'] ?>" required><br><br>

    Tahun Terbit <br>
    <input type="number" name="tahunTerbit" value="<?= $book['tahunTerbit'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>
