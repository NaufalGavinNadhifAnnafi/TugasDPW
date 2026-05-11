<?php
include 'koneksi.php';

$keyword = isset($_GET['keyword']) ? mysqli_real_escape_string($link, $_GET['keyword']) : '';

if ($keyword !== '') {
    $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$keyword%' ORDER BY idDosen ASC";
} else {
    $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
}

$result = mysqli_query($link, $query);
if (!$result) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
}

$total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="wrapper">
    <div class="page-header">
        <h1>Data <span>Dosen</span></h1>
        <div style="display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
            <form method="GET" class="search-bar">
                <input type="text" name="keyword" placeholder="Cari nama dosen..."
                       value="<?= htmlspecialchars($keyword) ?>">
                <button type="submit" class="btn btn-secondary">Cari</button>
                <?php if ($keyword): ?>
                    <a href="viewdosen.php" class="btn btn-secondary">Reset</a>
                <?php endif; ?>
            </form>
            <a href="input.php" class="btn btn-primary">+ Tambah Data</a>
        </div>
    </div>

    <?php if ($keyword): ?>
        <div class="alert alert-success">
            Menampilkan <?= $total ?> hasil pencarian untuk "<strong><?= htmlspecialchars($keyword) ?></strong>"
        </div>
    <?php endif; ?>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($total === 0): ?>
                <tr><td colspan="4" class="no-data">Tidak ada data yang ditemukan.</td></tr>
            <?php else: ?>
                <?php while ($data = mysqli_fetch_assoc($result)): ?>
                <?php
                    $nama = htmlspecialchars($data['namaDosen']);
                    if ($keyword) {
                        $nama = preg_replace('/(' . preg_quote(htmlspecialchars($keyword), '/') . ')/i',
                                            '<span class="hl">$1</span>', $nama);
                    }
                ?>
                <tr>
                    <td><span class="badge"><?= $data['idDosen'] ?></span></td>
                    <td><?= $nama ?></td>
                    <td><?= htmlspecialchars($data['noHP']) ?></td>
                    <td style="display:flex; gap:6px;">
                        <a href="editdosen.php?idDosen=<?= $data['idDosen'] ?>"
                           class="btn btn-secondary btn-sm">Edit</a>
                        <a href="hapusdosen.php?idDosen=<?= $data['idDosen'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data dosen ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>