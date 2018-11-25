<?php

class Chordophone {

  private static function tacet() {
    $s = '';
    $i = 12;
    while ($i) {
      $s .= '____ ';
      $i--;
    }
    return $s;
  }

  protected static function retrieve($k) {
    $dataBank = __DIR__ . '/scordatura.php';
    try {
      if (file_exists($dataBank)) {
        $o = include $dataBank;
        $m = isSet($o[$k]) ? $o[$k] : self::tacet();
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

  private static function krypt() {
    return substr(md5(rand()), 0, 12);
  }

  private static function epoch() {
    return time() . '-' . self::krypt();
  }

  protected static function diadem($k, $t) {
    $esc = "\033[0;33m";
    $cse = "\033[0m";
    return $esc . "$k-" . "$t-" . self::epoch() . $cse; 
  }

  protected static function str_Bj($s) {
    return substr($s, 50, 10) . substr($s, 0, 50);
  }

  protected static function str_Fn($s) {
    return substr($s, 25, 35) . substr($s, 0, 25);
  }

  protected static function str_Cn($s) {
    return substr($s,  0, 60);
  }

  protected static function str_Gn($s) {
    return substr($s, 35, 25) . substr($s, 0, 35);
  }

  protected static function str_Dn($s) {
    return substr($s, 10, 50) . substr($s, 0, 10);
  }

  protected static function str_An($s) {
    return substr($s, 45, 15) . substr($s, 0, 45);
  }

  protected static function str_En($s) {
    return substr($s, 20, 40) . substr($s, 0, 20);
  }

  protected static function str_Bn($s) {
    return substr($s, -5,  5) . substr($s, 0, 55);
  }

  protected static function str_Fk($s) {
    return substr($s, 30, 30) . substr($s, 0, 30);
  }

}

class Heptachord extends Chordophone {

  public static function beadgcf ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $Fn = self::str_Fn($nfo);
    $Cn = self::str_Cn($nfo);
    $Gn = self::str_Gn($nfo);
    $Dn = self::str_Dn($nfo);
    $An = self::str_An($nfo);
    $En = self::str_En($nfo);
    $Bn = self::str_Bn($nfo);

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

}

class Pentachord extends Chordophone {

  public static function cgdae ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $En = self::str_En($nfo);
    $An = self::str_An($nfo);
    $Dn = self::str_Dn($nfo);
    $Gn = self::str_Gn($nfo);
    $Cn = self::str_Cn($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $En . "\n\t"
    . $An . "\n\t"
    . $Dn . "\n\t"
    . $Gn . "\n\t"
    . $Cn . "\n\n";
  }

}

class Hexachord extends Chordophone {

  public static function eadgbe ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $Bn = self::str_Bn($nfo);
    $Gn = self::str_Gn($nfo);
    $Dn = self::str_Dn($nfo);
    $An = self::str_An($nfo);
    $En = self::str_En($nfo);

    return  "\n\t"
    . $Tl . "\n\t"
    . $En . "\n\t"
    . $Bn . "\n\t"
    . $Gn . "\n\t"
    . $Dn . "\n\t"
    . $An . "\n\t"
    . $En . "\n\n";
  }

  public static function fkbjdn ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $Dn = self::str_Dn($nfo);
    $Bj = self::str_Bj($nfo);
    $Fk = self::str_Fk($nfo);

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

