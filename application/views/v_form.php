<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/') ?>bootstrap.css">
    <title>USER FORM</title>
</head>
<?php

$tipe = $this->uri->segment(3);
$action = $tipe == "base_url" ? base_url("helper/post") : site_url("/helper/post");

// echo $action;

?>

<body class="container">
    <h1><?= $tipe; ?></h1>
    <div class="card">
        <div class="card-body">
            <form action="<?= $action ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>