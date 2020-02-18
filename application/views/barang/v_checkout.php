<div class="card">
    <div class="card-body">
        <!-- <?php print_r($barang) . " " . print_r($_POST) ?> -->
        <form action="<?= base_url('barang/store') ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Kode Barang</label>
                <input type="text" class="form-control" name="kode" placessholder="" value="<?= $barang->kode ?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" placeholder="" value="<?= $barang->nama ?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Pesan</label>
                <input type="number" class="form-control" name="jumlah" value="<?= $jml ?>" placeholder="" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Harga</label>
                <input type="number" class="form-control" name="total" placeholder="" value="<?= $total ?>" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>