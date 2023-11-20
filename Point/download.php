<?php
$num = $_GET['num'];

header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="QRCode.png"');
$image = file_get_contents('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$num.'&choe=UTF-8');
header('Content-Length: ' . strlen($image));
echo $image;

?>