--TEST--
Test 10: accessing hash perl variables (perl_var)
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
perl_eval('%a = ("int" => 4, "double" => 2.5, "str" => "str");');
var_dump(perl_var('%a'));
echo "ok\n";
?>
--EXPECT--
array(3) {
  ["double"]=>
  float(2.5)
  ["str"]=>
  string(3) "str"
  ["int"]=>
  int(4)
}
ok
