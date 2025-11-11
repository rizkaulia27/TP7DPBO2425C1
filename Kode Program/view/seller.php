<h3>List Seller</h3>

<div class="table-header">
    <button class="btn-add" onclick="window.location.href='?page=addSeller&action=tambah'">+ Tambah Seller</button>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kontak</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($seller->getAllSeller() as $m): ?>
    <tr>
        <td><?= htmlspecialchars($m['id_seller']) ?></td>
        <td><?= htmlspecialchars($m['nama_seller']) ?></td>
        <td><?= htmlspecialchars($m['kontak_seller']) ?></td>
        <td>
            <a href="?page=editSeller&action=edit&id=<?= $m['id_seller'] ?>" class="btn-edit">Edit</a>
            <a href="?page=seller&action=hapus&id=<?= $m['id_seller'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus lokasi ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
