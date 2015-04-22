--TEST--
Basic functionality of sg_memory_stats()
--FILE--
<?php

$memory_stats = sg_memory_stats();

var_dump($memory_stats);

?>
--EXPECTF--
array(4) {
  ["total"]=>
  string(%d) "%d"
  ["free"]=>
  string(%d) "%d"
  ["used"]=>
  string(%d) "%d"
  ["cache"]=>
  string(%d) "%d"
}