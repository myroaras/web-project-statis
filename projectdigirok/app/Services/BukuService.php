<?php

require_once __DIR__ . "/../Storage/JSONStorage.php";

class BukuService
{
    private JSONStorage $storage;

    public function __construct()
    {
        $this->storage = new JSONStorage(__DIR__ . "/../../storage/buku.json");
    }

    public function all(): array
    {
        return $this->storage->all();
    }

    public function tambah(array $data): void
    {
        if (empty($data['judul']) || empty($data['penulis'])) {
            return;
        }

        $books = $this->all();

        $data['id'] = count($books) + 1;
        $data['status'] = "tersedia";

        $books[] = $data;
        $this->storage->save($books);
    }

    public function delete(int $id): void
    {
        $books = $this->all();

        $books = array_filter($books, function ($book) use ($id) {
            return $book['id'] !== $id;
        });

        $this->storage->save(array_values($books));
    }

    public function pinjam(int $id): void
    {
        $books = $this->all();

        foreach ($books as &$book) {
            if ($book['id'] === $id && $book['status'] === 'tersedia' && $book['tipe'] === 'biasa') {
                $book['status'] = 'dipinjam';
            }
        }

        $this->storage->save($books);
    }

    public function kembalikan(int $id): void
    {
        $books = $this->all();

        foreach ($books as &$book) {
            if ($book['id'] === $id) {
                $book['status'] = 'tersedia';
            }
        }

        $this->storage->save($books);
    }

    public function update(int $id, array $data): void
    {
        $books = $this->all();

        foreach ($books as &$book) {
            if ($book['id'] === $id) {
                $book['judul'] = $data['judul'];
                $book['penulis'] = $data['penulis'];
                $book['tahunTerbit'] = $data['tahunTerbit'];
            }
        }

        $this->storage->save($books);
    }
}
