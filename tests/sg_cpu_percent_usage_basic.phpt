--TEST--
Basic functionality of sg_cpu_percent_usage()
--FILE--
<?php

$cpu_percent_usage = sg_cpu_percent_usage();

var_dump($cpu_percent_usage);

?>
--EXPECTF--
array(7) {
  ["user"]=>
  float(%f)
  ["kernel"]=>
  float(%f)
  ["idle"]=>
  float(%f)
  ["iowait"]=>
  float(%f)
  ["swap"]=>
  float(%f)
  ["nice"]=>
  float(%f)
  ["previous_run"]=>
  int(%d)
}