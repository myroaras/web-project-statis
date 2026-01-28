<table border="1" cellpadding="8">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Tipe</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book['judul'] ?></td>
        <td><?= $book['penulis'] ?></td>
        <td><?= $book['tahunTerbit'] ?></td>
        <td><?= $book['tipe'] ?></td>
        <td><?= $book['status'] ?></td>
        <td>
            <?php if ($book['status'] === 'tersedia' && $book['tipe'] === 'biasa'): ?>
                <a href="pinjam.php?id=<?= $book['id'] ?>">Pinjam</a>
            <?php elseif ($book['status'] === 'dipinjam'): ?>
                <a href="kembalikan.php?id=<?= $book['id'] ?>">Kembalikan</a>
            <?php else: ?>
                -
            <?php endif; ?>

            | <a href="edit.php?id=<?= $book['id'] ?>">Edit</a>
            | <a href="delete.php?id=<?= $book['id'] ?>">Hapus</a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>
<br>
<a href="create.php">+ Tambah Buku</a>