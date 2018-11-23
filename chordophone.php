<?php

class Chordophone {

  private function refer() {
    $o = include 'scordatura.php';
    $m = &$o;
    return $m; 
  }

  private function krypt() {
    return substr(md5(rand()), 0, 12);
  }

  private function epoch() {
    return time() . '-' . $this->krypt();
  }

  private function crown($k, $t) {
    $esc = "\033[0;33m";
    $cse = "\033[0m";
    return $esc . $k . $t . $this->epoch() . $cse; 
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
    $nfo = $this->refer();
    isSet($nfo[$qp]) ?: $qp = 'n0';

    $Tl = $this->crown($qp, '-beadgcf-');
    $Fn = $this->str_Fn($nfo[$qp]);
    $Cn = $this->str_Cn($nfo[$qp]);
    $Gn = $this->str_Gn($nfo[$qp]);
    $Dn = $this->str_Dn($nfo[$qp]);
    $An = $this->str_An($nfo[$qp]);
    $En = $this->str_En($nfo[$qp]);
    $Bn = $this->str_Bn($nfo[$qp]);

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
    $nfo = $this->refer();
    isSet($nfo[$qp]) ?: $qp = 'n0';

    $Tl = $this->crown($qp, '-cgdae-');
    $En = $this->str_En($nfo[$qp]);
    $An = $this->str_An($nfo[$qp]);
    $Dn = $this->str_Dn($nfo[$qp]);
    $Gn = $this->str_Gn($nfo[$qp]);
    $Cn = $this->str_Cn($nfo[$qp]);

    return  "\n\t"
    . $Tl . "\n\t"
    . $En . "\n\t"
    . $An . "\n\t"
    . $Dn . "\n\t"
    . $Gn . "\n\t"
    . $Cn . "\n\n";
  }

  public function eadgbe ($qp) {
    $nfo = $this->refer();
    isSet($nfo[$qp]) ?: $qp = 'n0';

    $Tl = $this->crown($qp, '-eadgbe-');
    $Bn = $this->str_Bn($nfo[$qp]);
    $Gn = $this->str_Gn($nfo[$qp]);
    $Dn = $this->str_Dn($nfo[$qp]);
    $An = $this->str_An($nfo[$qp]);
    $En = $this->str_En($nfo[$qp]);

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
    $nfo = $this->refer();
    isSet($nfo[$qp]) ?: $qp = 'n0';

    $Tl = $this->crown($qp, '-fkbjdn-');
    $Dn = $this->str_Dn($nfo[$qp]);
    $Bj = $this->str_Bj($nfo[$qp]);
    $Fk = $this->str_Fk($nfo[$qp]);

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

