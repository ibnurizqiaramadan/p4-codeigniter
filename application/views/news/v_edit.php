<div class="card">
    <div class="card-body">
        <form action="<?= base_url('news/data/storeEdit') ?>" method="post">
        <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" value="<?= $data->title ?>" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea name="content" class="form-control" cols="30" rows="10" required><?= $data->content ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>