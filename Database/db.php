<?php

require_once __DIR__ . '/../Models/Specie.php';
require_once __DIR__ . '/../Models/Product.php';

    $kitekatSpecie = new Specie();
    try {
        $kitekatSpecie->setSpecie('Cat');
    } catch (Exception $e) {
        echo 'Si è verificato un errore: ' . $e->getMessage();
    }
    $kitekat = new Product ('Kitekat', 'Cibo', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/fai/scorta/kitekat/in/salsa/x/g/0/400/96x_1000x1000px_0.jpg', $kitekatSpecie);
    
    $lettoMemorySpecie = new Specie();
    try {
        $lettoMemorySpecie->setSpecie('Dog');
    } catch (Exception $e) {
        echo 'Si è verificato un errore: ' . $e->getMessage();
    }
    $lettoMemory = new Product ('Letto Memory ovale', 'Cucce', 77.99, 'https://shop-cdn-m.mediazs.com/bilder/letto/memory/ovale/marrone/7/400/67053_hundebett_memory_oval_braun_fg_3288_7.jpg', $lettoMemorySpecie);


    $mantellaNiteSpecie = new Specie();
    try {
        $mantellaNiteSpecie->setSpecie('Dog');
    } catch (Exception $e) {
        echo 'Si è verificato un errore: ' . $e->getMessage();
    }
    $mantellaNite = new Product ('Mantella per cani Illume Nite Neon', 'Abbigliamento per cani', 15.99, 'https://shop-cdn-m.mediazs.com/bilder/mantella/per/cani/illume/nite/neon/1/400/_dsc1480_1.jpg', $mantellaNiteSpecie);



$products = [
    $kitekat,
    $lettoMemory,
    $mantellaNite
];

/* $lettoMemory = new Product ('Letto Memory ovale', 'Cucce', 77.99, 'https://shop-cdn-m.mediazs.com/bilder/letto/memory/ovale/marrone/7/400/67053_hundebett_memory_oval_braun_fg_3288_7.jpg'),
$mantellaNite = new Product ('Mantella per cani Illume Nite Neon', 'Abbigliamento per cani', 15.99, 'https://shop-cdn-m.mediazs.com/bilder/mantella/per/cani/illume/nite/neon/1/400/_dsc1480_1.jpg'),
$maisonette = new Product ('Casetta gioco Maisonette', 'Giochi', 82.99, 'https://shop-cdn-m.mediazs.com/bilder/casetta/gioco/maisonette/1/400/100822_katzenhaus_maisonette_fg_5053_1.jpg'),
$lettoPrince = new Product ('Letto Prince', 'Cucce', 16.49, 'https://shop-cdn-m.mediazs.com/bilder/letto/prince/xs/5/400/58201_PLA_Kuschelbett_Prince_FG_DSC3429_5.jpg'),
$toiletteSavic = new Product ('Toilette Savic Nestor Jumbo', 'Toilette', 33.99, 'https://shop-cdn-m.mediazs.com/bilder/toilette/savic/nestor/jumbo/7/400/icon_topseller_1000x1000_int_40__7.jpg'),
$ciotoleAcciaio = new Product ('Supporto con 2 ciotole in acciaio', 'Accessori', 19.99, 'https://shop-cdn-m.mediazs.com/bilder/supporto/con/ciotole/in/acciaio/7/400/313523_kumar_hundebar_inklusive_2_edelstahln_pfe_01_dsc5827_7.jpg'),
$ciotoleAcciaio = new Product ('Supporto con 2 ciotole in acciaio', 'Accessori', 19.99, 'https://shop-cdn-m.mediazs.com/bilder/supporto/con/ciotole/in/acciaio/7/400/313523_kumar_hundebar_inklusive_2_edelstahln_pfe_01_dsc5827_7.jpg')
 */


