<?php

require_once __DIR__ . "/Buku.php";

class BukuReferensi extends Buku
{
    public function getTipe(): string {
        return "referensi";
    }

    public function bolehDipinjam(): bool {
        return false;
    }
}

