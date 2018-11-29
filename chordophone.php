<?php

class Chordophone {

  protected static function gemstone($s='ruby') {
    $ruby = [
      'j136y7', 'j167y2', 'j17', 'j17y2', 'j2', 'j23', 'j236',
      'j23k6', 'j246y3', 'j26', 'j26y3', 'j26y34', 'j2k56', 'j2k56x4',
      'j2k6', 'j2k6x5', 'j2k6y3', 'j2y3', 'j3', 'j34k6', 'j36',
      'j3k56x4', 'j3k5x4', 'j3k6', 'j6', 'k157x6', 'k1j6', 'k256',
      'k26', 'k26x5', 'k2j17', 'k2j6', 'k56', 'k56x4', 'k6',
      'k6x5', 'n0', 'n167x4', 'n26y5', 'n345', 'n45y2', 'n5y2'
    ];

    $opal = [
      'k135x4', 'k345x2', 'k34', 'k34x2', 'k2', 'k12', 'k125',
      'k12j5', 'k257x1', 'k25', 'k25x1', 'k25x17', 'k2j56', 'k2j56y7',
      'k2j5', 'k2j5y6', 'k2j5x1', 'k2x1', 'k1', 'k17j5', 'k15',
      'k1j56y7', 'k1j6y7', 'k1j5', 'k5', 'j346y5', 'j3k5', 'j256',
      'j25', 'j25y6', 'j2k34', 'j2k5', 'j56', 'j56y7', 'j5',
      'j5y6', 'n0', 'n345y7', 'n25x6', 'n167', 'n67x2', 'n6x2'
    ];

    return ${$s}; 
  }

  protected static function unansi($s) {
    $h = str_ireplace("\033[0;33m", '', $s);
    $t = str_ireplace("\033[0m", '', $h);
    return $t;
  }

  protected static function tacet($c='____ ', $n=12) {
    $s = str_repeat($c, $n);
    return $s;
  }

  protected static function metric($s, $n=60) {
    $m = strlen($s);
    $y = ($m === $n) ? $s : self::tacet("=$m? ");
    return $y;
  }

  private static function morph($s) {
    $m = ['Hg','Pu','Sn','Ur','Mn','Cu','Pb','Au','Np','Ag','Ti','Fe'];
    $v = ['v9','zR','t7','xP','p3','r5','wN','u8','yQ','s6','o2','q4'];
    $r = str_replace($m, $v, $s);
    $u = str_replace(' ', '|', $r);
    $z = self::metric($u);
    return $z;
  }

  protected static function retrieve($k) {
    $dataBank = __DIR__ . '/scordatura.php';
    try {
      if (file_exists($dataBank)) {
        $a = include $dataBank;
        $b = array_key_exists($k, $a);
        $s = $b ? $a[$k] : self::tacet();
        $z = self::morph($s);
        return $z;
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

  private static function layout($a) {
    $n = count($a);
    setType($s, 'string');
    for ($i = 0; $i < $n; $i++) {
      if (!($i == 0) and ($i % 7 == 0) or ($i == $n)) { $s .= "\n"; }
      $s .= "\t{$a[$i]}";
    }
    $s .= "\n\n";
    return $s;
  } 

  public static function get_menu() {
    $r = self::gemstone('ruby');
    $o = self::gemstone('opal');
    $s = self::layout($r) . self::layout($o);
    return $s;
  }

}

class Nonachord extends Chordophone {

  public static function ennead() {
    $r = self::gemstone('ruby');
    $o = self::gemstone('opal');
    $a = [$r, $o];
    $s = '';

    for ($i = 0; $i < count($a); $i++) {
      foreach($a[$i] as $qp) {
        $prc = __FUNCTION__;
        $nfo = self::retrieve($qp);
        $ttl = self::diadem($qp, $prc);

        $Tl = self::unansi($ttl);
        $Bj = self::str_Bj($nfo);
        $Fn = self::str_Fn($nfo);
        $Cn = self::str_Cn($nfo);
        $Gn = self::str_Gn($nfo);
        $Dn = self::str_Dn($nfo);
        $An = self::str_An($nfo);
        $En = self::str_En($nfo);
        $Bn = self::str_Bn($nfo);
        $Fk = self::str_Fk($nfo);

        $t = "\n\t";
        $fmt = "$t%s$t%s$t%s$t%s$t%s$t%s$t%s$t%s$t%s$t%s\n\n";
        $s .= sprintf($fmt, $Tl, $Bj, $Fn, $Cn, $Gn, $Dn, $An, $En, $Bn, $Fk);
      }

      if ($i === 0) { 
        $c = str_repeat('~', 60);
        $s .= "\n\t$c\n";
      }
      $s .= "\n";
    }
    return $s;
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

    $t = "\n\t";
    $fmt = "$t%s$t%s$t%s$t%s$t%s$t%s$t%s$t%s\n\n";
    $s = sprintf($fmt, $Tl, $Fn, $Cn, $Gn, $Dn, $An, $En, $Bn);
    return $s;
  }

}

class Hexachord extends Chordophone {

  public static function eadgbe ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $En = self::str_En($nfo);
    $Bn = self::str_Bn($nfo);
    $Gn = self::str_Gn($nfo);
    $Dn = self::str_Dn($nfo);
    $An = self::str_An($nfo);
    $En = self::str_En($nfo);

    $t = "\n\t";
    $fmt = "$t%s$t%s$t%s$t%s$t%s$t%s$t%s\n\n";
    $s = sprintf($fmt, $Tl, $En, $Bn, $Gn, $Dn, $An, $En);
    return $s;
  }

  public static function fkbjdn ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $Dn = self::str_Dn($nfo);
    $Bj = self::str_Bj($nfo);
    $Fk = self::str_Fk($nfo);

    $t = "\n\t";
    $fmt = "$t%s$t%s$t%s$t%s$t%s$t%s$t%s\n\n";
    $s = sprintf($fmt, $Tl, $Dn, $Bj, $Fk, $Dn, $Bj, $Fk);
    return $s;
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

    $t = "\n\t";
    $fmt = "$t%s$t%s$t%s$t%s$t%s$t%s\n\n"; 
    $s = sprintf($fmt, $Tl, $En, $An, $Dn, $Gn, $Cn);
    return $s;
  }

}

class Tetrachord extends Chordophone {

  public static function fbfb ($qp='n0') {
    $prc = __FUNCTION__;
    $nfo = self::retrieve($qp);

    $Tl = self::diadem($qp, $prc);
    $Bn = self::str_Bn($nfo);
    $Fn = self::str_Fn($nfo);

    $t = "\n\t";
    $fmt = "$t%s$t%s$t%s$t%s$t%s\n\n"; 
    $s = sprintf($fmt, $Tl, $Bn, $Fn, $Bn, $Fn);
    return $s;
  }

}

