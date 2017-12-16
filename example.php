<?php
require "vendor/autoload.php";

use Ultrapoint\Wallet;

$wallet = new Ultrapoint\Wallet();

$destination1 = (object) [
    'amount' => '0.1',
    'address' => '7Ey8jHDkWqYDSpoSssv5EmAcsXCct4hum4mhHxT6ruaof9C7JM1ekjsYFa8dQEUL4QMai15akL2az2Me48ShgNMWV3yBkSV'
];

$options = [
    'destinations' => $destination1
];

echo $wallet->transfer($options);

