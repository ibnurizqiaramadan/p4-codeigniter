<div class="card">
    <div class="card-body">
        <!-- <?php print_r($barang) . " " . print_r($_POST) ?> -->
        <form action="<?= base_url('barang/editStore') ?>" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="exampleInputEmail1">Kode Barang</label>
                <input type="text" class="form-control" name="kode" placeholder="" value="<?= $barang->kode ?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" placeholder="" value="<?= $barang->nama ?>" readonly>
            </div>
            <input type="hidden" id="hargaBarang" value="<?= $harga ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Pesan</label>
                <input type="number" class="form-control" id="jml" name="jumlah" value="<?= $jml ?>" placeholder="" onchange="hitungTotal()" require>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Harga</label>
                <input type="number" class="form-control" name="total" placeholder="" id="total" value="<?= $total ?>" require readonly>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<script>
    function hitungTotal() {
        var harga = document.getElementById('hargaBarang').value
        var jml = document.getElementById('jml').value
        var total = document.getElementById('total')
        total.value = harga * jml
    }
</script>