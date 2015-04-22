--TEST--
Basic functionality of sg_cpu_totals()
--FILE--
<?php

$cpu_totals = sg_cpu_totals();

var_dump($cpu_totals);

?>
--EXPECTF--
array(8) {
  ["user"]=>
  string(%d) "%d"
  ["kernel"]=>
  string(%d) "%d"
  ["idle"]=>
  string(%d) "%d"
  ["iowait"]=>
  string(%d) "%d"
  ["swap"]=>
  string(%d) "%d"
  ["nice"]=>
  string(%d) "%d"
  ["total"]=>
  string(%d) "%d"
  ["previous_run"]=>
  int(%d)
}