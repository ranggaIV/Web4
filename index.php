<?php

include "Classes/Sorcerer.php";
include "Classes/Teacher.php";

use Anime\Sorcerer;
use Anime\Teacher;

$sorcerer = new Sorcerer("Aoi Sora", 17, "Superhuman");
echo $sorcerer->summonCursedSpirit() . PHP_EOL;

$teacher = new Teacher("Kaho Shibuya", 28, "Sorcery");
echo $teacher->summonCursedSpirit() . PHP_EOL;
