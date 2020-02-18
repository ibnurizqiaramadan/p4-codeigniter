<div class="card">
    <div class="card-body">
        <form action="<?= base_url('barang/checkout') ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Kode Barang</label>
                <input type="text" class="form-control" name="kode" placeholder="" required>
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" name="title" placeholder="" required>
            </div> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Pesan</label>
                <input type="number" class="form-control" name="jumlah" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>

