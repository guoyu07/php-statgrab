--TEST--
Basic functionality of sg_general_stats()
--FILE--
<?php

$general_stats = sg_general_stats();

var_dump($general_stats);

?>
--EXPECTF--
array(6) {
  ["os_name"]=>
  string(5) "%s"
  ["os_release"]=>
  string(17) "%s"
  ["os_version"]=>
  string(42) "%s"
  ["platform"]=>
  string(6) "%s"
  ["hostname"]=>
  string(7) "%s"
  ["uptime"]=>
  int(%d)
}