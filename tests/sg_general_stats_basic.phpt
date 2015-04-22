--TEST--
Basic functionality of sg_load_stats()
--FILE--
<?php

$load_stats = sg_load_stats();

var_dump($load_stats);

?>
--EXPECTF--
array(3) {
  ["min1"]=>
  float(%f)
  ["min5"]=>
  float(%f)
  ["min15"]=>
  float(%f)
}