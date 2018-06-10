<?php
require "vendor/autoload.php";

use Ultrapoint\Wallet;

$wallet = new Ultrapoint\Wallet();
# or with rpc authentification needed
// $wallet = new Ultrapoint\Wallet('127.0.0.1', 17092, 'upxrpcuser', 'rpcpasswd');

# used when rpc wallet is started with `--wallet-dir` option
// echo $wallet->createWallet('upx_testy', 'testy');
// echo $wallet->openWallet('upx_testy', 'testy');

$destination1 = (object) [
    'amount' => '1',
    'address' => '7Ey8jHDkWqYDSpoSssv5EmAcsXCct4hum4mhHxT6ruaof9C7JM1ekjsYFa8dQEUL4QMai15akL2az2Me48ShgNMWV3yBkSV'
];

$options = [
    'destinations' => $destination1
];

echo $wallet->transfer($options);

// echo $wallet->getAddress($options);
