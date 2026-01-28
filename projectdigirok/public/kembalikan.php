<?php
require_once __DIR__ . "/../app/Services/BukuService.php";
require_once __DIR__ . "/../app/Helpers/General.php";

$service = new BukuService();
$service->kembalikan((int) $_GET['id']);

redirect("index.php");
