<?php
require_once __DIR__ . "/../app/Helpers/General.php";
require_once __DIR__ . "/../app/Services/BukuService.php";

$service = new BukuService();
$books = $service->all();

ob_start();
require __DIR__ . "/../views/list.php";
$content = ob_get_clean();

$title = "Daftar Buku";
require __DIR__ . "/../views/layout.php";
