<?php

require __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader (__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

$globalVariable = 'erika.ike@outlook.fr';
$twig->addGlobal('laglobale', $globalVariable);
