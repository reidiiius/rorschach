#!/usr/bin/php

<?php
error_reporting(E_ALL);

$herringBone =  __DIR__ . '/chordophone.php';

try {
  if (file_exists($herringBone)) {
    require $herringBone;
  }
  else {
    throw new Exception('Check: ' . $herringBone);
  }
}
catch (Exception $anomaly) {
  echo "\033[1;31m\t", $anomaly->getMessage(), "\033[0m\n\n";
  exit(1);
}

if ($argc > 1) {
  $pruned = array_shift($argv);
  $Guitar = new Hexachord;

  foreach($argv as $signat) {
    echo $Guitar->eadgbe($signat);
  }
  echo "\n";
}
else {
  echo Chordophone::get_menu();
}

exit(0);

