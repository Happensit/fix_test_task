<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

spl_autoload_register(function ($className) {
    include sprintf("../%s.php", str_replace('\\', "/", $className));
});

use Fix\Club;
use Fix\Entity\Collection\DancerCollection;
use Fix\Entity\Collection\DancerCollectionBuilder;
use Fix\MusicHelper\MusicStyles;
use Fix\Entity\UniversalDancer;

$collection = new DancerCollectionBuilder(new DancerCollection(), rand(13, 35));

$club = new Club($collection->buildCollection());
$club->setMusic(array_rand(MusicStyles::getStylesArray()));

$universalDancer = new UniversalDancer();
$universalDancer->setDanceSkills([
    MusicStyles::HIPHOP_MUSIC,
    MusicStyles::POP_MUSIC,
    MusicStyles::HOUSE_MUSIC
]);

$club->setDancer($universalDancer);

echo $club->letsComeOff();
