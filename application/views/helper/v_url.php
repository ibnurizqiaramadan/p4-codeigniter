<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL HELPER</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/') ?>bootstrap.css">
</head>

<body>
    <div class="container">
        <h1>Helper URL</h1>
        <p>List</p>
        <ul>
            <?php
            $attrib1 = array('target' => '_blank');
            $attrib2 = array('class' => 'btn btn-sm btn-primary', 'target' => '_blank');
            ?>
            <li>anchor() : <?= anchor('https://google.com', "Google", $attrib1) ?></li>
            <!-- <li> <a href="http://google.com" target="_blank">Hallo</a> </li> -->
            <!-- <li> <a href="https://google.com">Google</a> </li> -->
            <li>anchor_popup() : <?= anchor_popup('https://google.com', "Google", true) ?></li>
            <li>base_url() : <?= base_url() ?> <?= anchor(base_url('helper/url/base_url'), 'Demo', $attrib2) ?></li>
            <li>site_url() : <?= site_url() ?> <?= anchor(site_url('helper/url/base_url'), 'Demo', $attrib2) ?></li>
            </li>
            <li>index_page() : <?= index_page() ?></li>
            <li>mailto() : <?= mailto('dadanibnu61@gmail.com', 'Click Here to Contact Me') ?></li>
            <li>url_title() : <?php
                                $title = "Hallo gan";
                                $url_title = url_title($title);
                                echo $url_title ?></li>
            <li>prep_url() : <?= prep_url('google.com'); ?></li>
            <li>redirect() : <?php  //redirect('https://google.com') ?> </li>
        </ul>
    </div>
</body>

</html>