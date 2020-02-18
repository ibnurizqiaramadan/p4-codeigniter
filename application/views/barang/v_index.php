<h1>Pemesanan</h1>
<p>List Pemesanan</p>
<p><?= anchor(base_url('barang/pesan'), "Pesan Baru", 'class="btn btn-sm btn-info"') ?></p>

<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah Pesan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php foreach ($pesanan as $key) : ?>
                    <tr>
                        <td><?= $key->kode_barang ?></td>
                        <td><?= $key->nama ?></td>
                        <td><?= $key->jumlah_pem ?></td>
                        <td><?= $key->total_pem ?></td>
                        <td>
                            <?= anchor(base_url("pesan/" . md5($key->id) . "/edit"), "Edit", 'class="btn btn-sm btn-success"') ?>
                            <?= anchor(base_url("barang/" . md5($key->id) . "/delete"), "Delete", 'class="btn btn-sm btn-danger"') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah Pesan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tfoot>

        </table>
    </div>
</div>