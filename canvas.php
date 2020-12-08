<?php
$imageData = $_POST['imageData'];
$imageData = str_replace(['data:image/png;base64,',' '], ['','+'], $imageData);
$data = base64_decode($imageData);
$file = 'data/' . uniqid() . '.png';
$success = file_put_contents($file, $data);
echo $file;