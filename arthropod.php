#!/usr/bin/php

<?php

require './scordatura.php';
require './chordophone.php';

$UID = time() . '-' . substr(md5(rand()), 0, 12);

$Tuning = new Chordophone;

  print $Tuning->gtrStd('j26') . "\n";
  print $Tuning->gtrStd('k25') . "\n";

?>
