<html>

<head>
    <title><?php echo $judulapp; ?></title>
</head>

<body>
    <?php
    $tahun = $this->uri->segment(3);
    $bulan = $this->uri->segment(4);
    $tanggal = $this->uri->segment(5);
    echo heading($judulapp, 2);
    echo "Tanggal :" . $tanggal;
    echo br();
    echo $infohari;
    echo "<br><br>". anchor(base_url() . "kalender/pdf/$tahun/$bulan/$tanggal", "Pdf", "target=_blank");
    ?>
</body>

</html>