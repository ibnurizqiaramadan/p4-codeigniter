<h1>News</h1>
<p>List News</p>
<p><?= anchor(base_url('news/data/create'), "Create News", 'class="btn btn-sm btn-info"') ?></p>

<?php foreach ($news as $key) : ?>
    <div class="card">
        <div class="card-body">
            <h3><?= $key->title ?></h3>
            <p><?= $key->content ?></p>
            <?= anchor(base_url("news/$key->slug"), "Read More", 'class="btn btn-sm btn-success"') ?>
            <?= anchor(base_url("news/data/" . md5($key->id) . "/edit"), "Edit", 'class="btn btn-sm btn-success"') ?>
            <?= anchor(base_url("news/data/" . md5($key->id) . "/delete"), "Delete", 'class="btn btn-sm btn-danger"') ?>
        </div>
    </div>
<?php endforeach; ?>