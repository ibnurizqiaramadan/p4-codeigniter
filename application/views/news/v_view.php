<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/') ?>bootstrap.css">
    <title><?= $news->title ?></title>
</head>

<body class="container">
    <h1>News</h1>
    <h2><?= $news->title ?></h2>
    <p><?= $news->content ?></p>
    <?= anchor(base_url('news'), 'Kembali') ?>
</body>

</html>