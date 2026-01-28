<?php

require_once __DIR__ . "/Buku.php";

class BukuBiasa extends Buku
{
    public function getTipe(): string {
        return "biasa";
    }

    public function bolehDipinjam(): bool {
        return true;
    }
}
