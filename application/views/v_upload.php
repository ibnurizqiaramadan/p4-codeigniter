<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
    <title><?= $title ?></title>
</head>

<body>
    <div class="container">
        <div class="card ">
            <div class="card-header">
                <h3><?= $title ?></h3>
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('msg')) : ?>
                    <div class="alert <?= ($this->session->flashdata('msg')) == "success" ? "alert-success" : "alert-danger" ?> alert-dismissible fade show" role="alert">
                        <strong><?= ($this->session->flashdata('msg')) == "success" ? "Berhasil Upload !" : "Gagal Upload !" ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Pilih File</label>
                        <input class="form-control-file" accept="image/*" type="file" name="userfile">
                    </div>
                    <input type="submit" class="btn btn-primary" name="uploadGan">
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>List File Uploads (<?= count($files) ?> Files)</h3>
            </div>
            <div class="card-body">
                <?php if (!$files) : ?>
                    <h5>Belum Ada File !</h5>
                <?php else : ?>
                    <?php foreach ($files as $key) : ?>
                        <li><a href="<?= base_url('uploads/' . $key) ?>" target="_blank"><?= $key ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
</body>

</html>