--TEST--
Test 20: die() in perl_eval()
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$perl = new Perl();
$perl->eval(<<<PERL_END
  die("Bye bye!");
PERL_END
);
echo "ok\n";
?>
--EXPECTF--
Fatal error: [perl] eval error: 	(in cleanup) Bye bye! at (eval %d) line %d.
 in %s on line %d
