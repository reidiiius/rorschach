#!/usr/bin/php

<?php

require __DIR__ . '/chordophone.php';

if ($argc > 1) {
  $pruned = array_shift($argv);
  $Tuning = new Chordophone;
  $pegbox = 'eadgbe';

  foreach($argv as $elm) {
    echo $Tuning->$pegbox($elm);
  }
  echo "\n";
}
else {
  echo <<<TOC
	j136y7	j167y2	j17	j17y2	j2	j23	j236
	j23k6	j246y3	j26	j26y3	j26y34	j2k56	j2k56x4
	j2k6	j2k6x5	j2k6y3	j2y3	j3	j34k6	j36
	j3k56x4	j3k5x4	j3k6	j6	k157x6	k1j6	k256
	k26	k26x5	k2j17	k2j6	k56	k56x4	k6
	k6x5	n0	n167x4	n26y5	n345	n45y2	n5y2

	k135x4	k345x2	k34	k34x2	k2	k12	k125
	k12j5	k257x1	k25	k25x1	k25x17	k2j56	k2j56y7
	k2j5	k2j5y6	k2j5x1	k2x1	k1	k17j5	k15
	k1j56y7	k1j6y7	k1j5	k5	j346y5	j3k5	j256
	j25	j25y6	j2k34	j2k5	j56	j56y7	j5
	j5y6	n0	n345y7	n25x6	n167	n67x2	n6x2
\n
TOC;
}

exit(0);

