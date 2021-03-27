<?php

$sifra = 'airsoftforum2021';
if ($_POST['opis'] == null || $_POST['datum'] == null) {
    header('Location: ../../../../index.php?susret=false');
    die();
} elseif (!isset($_POST['sifra']) || $_POST['sifra'] != $sifra) {
    header('Location: ../../../../index.php?sifra=false');
    die();
}
require_once __DIR__ . '/../tabele/susret.php';

$podaciSusreta = $_POST;

Susret::unesiSusret($podaciSusreta['opis'], $podaciSusreta['datum']);
$susreti = Susret::izlistajSusrete();

header('Location: ../../../../index.php');

