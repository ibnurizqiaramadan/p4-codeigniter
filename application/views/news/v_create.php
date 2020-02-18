<div class="card">
    <div class="card-body">
        <form action="<?= base_url('news/data/store') ?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Content</label>
                <textarea name="content" class="form-control" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>