<form method="post">
    Judul <br>
    <input type="text" name="judul" value="<?= $book['judul'] ?? '' ?>" required><br><br>

    Penulis <br>
    <input type="text" name="penulis" value="<?= $book['penulis'] ?? '' ?>" required><br><br>

    Tahun Terbit <br>
    <input type="number" name="tahunTerbit" value="<?= $book['tahunTerbit'] ?? '' ?>" required><br><br>

    <?php if (!isset($book)): ?>
        Tipe <br>
        <select name="tipe">
            <option value="biasa">Biasa</option>
            <option value="referensi">Referensi</option>
        </select><br><br>
    <?php endif; ?>

    <button type="submit">Simpan</button>
</form>
