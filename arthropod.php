#!/usr/bin/php

<?php

define('NFO', __DIR__ . '/scordatura.php');

if (file_exists(constant('NFO'))) {
  require(constant('NFO'));
}
else {
  printf("\t%s\n\n", 'Error: File Not Found');
  die(" check: " . constant('NFO') . "\n\n");
}

$UID = time() . '-' . substr(md5(rand()), 0, 12);

function qrtl ($qp) {

  GLOBAL $UID, $CLV;

    $Tl = $qp . '-' . $UID;
    $Fn = substr($CLV[$qp], 25, 35) . substr($CLV[$qp], 0, 25);
    $Cn = substr($CLV[$qp],  0, 60);
    $Gn = substr($CLV[$qp], 35, 25) . substr($CLV[$qp], 0, 35);
    $Dn = substr($CLV[$qp], 10, 50) . substr($CLV[$qp], 0, 10);
    $An = substr($CLV[$qp], 45, 15) . substr($CLV[$qp], 0, 45);
    $En = substr($CLV[$qp], 20, 40) . substr($CLV[$qp], 0, 20);
    $Bn = substr($CLV[$qp], -5,  5) . substr($CLV[$qp], 0, 55);

  return $Tl . "\n"
       . $Fn . "\n"
       . $Cn . "\n"
       . $Gn . "\n"
       . $Dn . "\n"
       . $An . "\n"
       . $En . "\n"
       . $Bn . "\n";
}

  echo qrtl('j2k6') . "\n";
  echo qrtl('k2j5');

?>

