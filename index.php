<?php

require __DIR__ . '/vendor/autoload.php';

use Game\Bagutas;


echo "Permainan BAGUTAS\n";
echo "Selamat bertanding\n";
echo str_repeat("- ",10)."\n";

#Data pemain
$pemain1 = 'Pemain 1';
$pemain2 = 'Pemain 2';
$bagutas = new Bagutas;

#pemain 1
$bagutas->setPemain($pemain1);
sleep(1);

#pilih Alat 1
$bagutas->tampilAlat();
$bagutas->pilihAlat($pemain1);
echo "\n";
sleep(1);
echo "        VS\n";
echo "\n";
sleep(1);
#pemain 2
$bagutas->setPemain($pemain2);
sleep(1);

#pilih Alat 2
$bagutas->tampilAlat();
$bagutas->pilihAlat($pemain2);
system('clear');

#Pertarungan
echo "\n";
$bagutas->metodePermainan($pemain1, $pemain2);

