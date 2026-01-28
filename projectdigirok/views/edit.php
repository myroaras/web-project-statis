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
    $service->update($id, [
        'judul' => sanitize($_POST['judul']),
        'penulis' => sanitize($_POST['penulis']),
        'tahunTerbit' => (int) $_POST['tahunTerbit'],
    ]);

    redirect("index.php");
}

ob_start();
require "form.php";
$content = ob_get_clean();

$title = "Edit Buku";
require "layout.php";
