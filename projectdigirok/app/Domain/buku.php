<?php

class Buku
{
    protected string $judul;
    protected string $penulis;
    protected int $tahunTerbit;
    protected string $status;

    public function __construct(
        string $judul,
        string $penulis,
        int $tahunTerbit,
        string $status = "tersedia"
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
        $this->status = $status;
    }

    public function getJudul(): string {
        return $this->judul;
    }

    public function getPenulis(): string {
        return $this->penulis;
    }

    public function getTahunTerbit(): int {
        return $this->tahunTerbit;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function pinjam(): void {
        $this->status = "dipinjam";
    }

    public function kembalikan(): void {
        $this->status = "tersedia";
    }

    public function getTipe(): string {
        return "biasa";
    }

    public function bolehDipinjam(): bool {
        return true;
    }
}
