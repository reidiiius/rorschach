<?php

class Chordophone {

  private function tacet() {
    $s = '';
    $i = 12;
    while ($i) {
      $s .= '____ ';
      $i--;
    }
    return $s;
  }

  private function retrieve($k) {
    $dataBank = __DIR__ . '/scordatura.php';
    try {
      if (file_exists($dataBank)) {
        $o = include $dataBank;
        $m = isSet($o[$k]) ? $o[$k] : $this->tacet();
        return $m; 
      }
      else {
        throw new Exception('Check: ' . "$dataBank");
      }
    }
    catch (Exception $anomaly) {
      echo "\033[1;31m\t", $anomaly->getMessage(), "\033[0m\n\n";
      exit(1);
    }
  }

  private function krypt() {
    return substr(md5(rand()), 0, 12);
  }

  private function epoch() {
    return time() . '-' . $this->krypt();
  }

  private function diadem($k, $t) {
    $esc = "\033[0;33m";
    $cse = "\033[0m";
    return $esc . "$k-" . "$t-" . $this->epoch() . $cse; 
  }

  private function str_Bj($s) {
    return substr($s, 50, 10) . substr($s, 0, 50);
  }

  private function str_Fn($s) {
    return substr($s, 25, 35) . substr($s, 0, 25);
  }

  private function str_Cn($s) {
    return substr($s,  0, 60);
  }

  private function str_Gn($s) {
    return substr($s, 35, 25) . substr($s, 0, 35);
  }

  private function str_Dn($s) {
    return substr($s, 10, 50) . substr($s, 0, 10);
  }

  private function str_An($s) {
    return substr($s, 45, 15) . substr($s, 0, 45);
  }

  private function str_En($s) {
    return substr($s, 20, 40) . substr($s, 0, 20);
  }

  private function str_Bn($s) {
    return substr($s, -5,  5) . substr($s, 0, 55);
  }

  private function str_Fk($s) {
    return substr($s, 30, 30) . substr($s, 0, 30);
  }

  public function beadgcf ($qp) {
    $prc = __FUNCTION__;
    $nfo = $this->retrieve($qp);

    $Tl = $this->diadem($qp, $prc);
    $Fn = $this->str_Fn($nfo);
    $Cn = $this->str_Cn($nfo);
    $Gn = $this->str_Gn($nfo);
    $Dn = $this->str_Dn($nfo);
    $An = $this->str_An($nfo);
    $En = $this->str_En($nfo);
    $Bn = $this->str_Bn($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $Fn . "\n\t"
    . $Cn . "\n\t"
    . $Gn . "\n\t"
    . $Dn . "\n\t"
    . $An . "\n\t"
    . $En . "\n\t"
    . $Bn . "\n\n";
  }

  public function cgdae ($qp) {
    $prc = __FUNCTION__;
    $nfo = $this->retrieve($qp);

    $Tl = $this->diadem($qp, $prc);
    $En = $this->str_En($nfo);
    $An = $this->str_An($nfo);
    $Dn = $this->str_Dn($nfo);
    $Gn = $this->str_Gn($nfo);
    $Cn = $this->str_Cn($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $En . "\n\t"
    . $An . "\n\t"
    . $Dn . "\n\t"
    . $Gn . "\n\t"
    . $Cn . "\n\n";
  }

  public function eadgbe ($qp) {
    $prc = __FUNCTION__;
    $nfo = $this->retrieve($qp);

    $Tl = $this->diadem($qp, $prc);
    $Bn = $this->str_Bn($nfo);
    $Gn = $this->str_Gn($nfo);
    $Dn = $this->str_Dn($nfo);
    $An = $this->str_An($nfo);
    $En = $this->str_En($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $En . "\n\t"
    . $Bn . "\n\t"
    . $Gn . "\n\t"
    . $Dn . "\n\t"
    . $An . "\n\t"
    . $En . "\n\n";
  }

  public function fkbjdn ($qp) {
    $prc = __FUNCTION__;
    $nfo = $this->retrieve($qp);

    $Tl = $this->diadem($qp, $prc);
    $Dn = $this->str_Dn($nfo);
    $Bj = $this->str_Bj($nfo);
    $Fk = $this->str_Fk($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $Dn . "\n\t"
    . $Bj . "\n\t"
    . $Fk . "\n\t"
    . $Dn . "\n\t"
    . $Bj . "\n\t"
    . $Fk . "\n\n";
  }

}

