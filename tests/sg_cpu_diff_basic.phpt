--TEST--
Basic functionality of sg_cpu_diff()
--FILE--
<?php

$cpu_diff = sg_cpu_diff();

var_dump($cpu_diff);

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