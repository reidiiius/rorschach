<?php

class Chordophone {

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

  function gtrStd ($qp) {

    GLOBAL $UID, $CLV;

      $Tl = $qp . '-' . $UID;
      $En = substr($CLV[$qp], 20, 40) . substr($CLV[$qp], 0, 20);
      $Bn = substr($CLV[$qp], -5,  5) . substr($CLV[$qp], 0, 55);
      $Gn = substr($CLV[$qp], 35, 25) . substr($CLV[$qp], 0, 35);
      $Dn = substr($CLV[$qp], 10, 50) . substr($CLV[$qp], 0, 10);
      $An = substr($CLV[$qp], 45, 15) . substr($CLV[$qp], 0, 45);
      $En = substr($CLV[$qp], 20, 40) . substr($CLV[$qp], 0, 20);

    return $Tl . "\n"
         . $En . "\n"
         . $Bn . "\n"
         . $Gn . "\n"
         . $Dn . "\n"
         . $An . "\n"
         . $En . "\n";
  }

  function cllStd ($qp) {

    GLOBAL $UID, $CLV;

      $Tl = $qp . '-' . $UID;
      $En = substr($CLV[$qp], 20, 40) . substr($CLV[$qp], 0, 20);
      $An = substr($CLV[$qp], 45, 15) . substr($CLV[$qp], 0, 45);
      $Dn = substr($CLV[$qp], 10, 50) . substr($CLV[$qp], 0, 10);
      $Gn = substr($CLV[$qp], 35, 25) . substr($CLV[$qp], 0, 35);
      $Cn = substr($CLV[$qp],  0, 60);

    return $Tl . "\n"
         . $En . "\n"
         . $An . "\n"
         . $Dn . "\n"
         . $Gn . "\n"
         . $Cn . "\n";
  }

}

?>
