#!/usr/bin/php

<?php

require __DIR__ . '/scordatura.php';
require __DIR__ . '/chordophone.php';

$UID = time() . '-' . substr(md5(rand()), 0, 12);

$Tuning = new Chordophone;

  print $Tuning->gtrStd('j26') . "\n";
  print $Tuning->gtrStd('k25') . "\n";

?>
