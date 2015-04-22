--TEST--
Basic functionality of sg_swap_stats()
--FILE--
<?php

$swap_stats = sg_swap_stats();

var_dump($swap_stats);

?>
--EXPECTF--
array(3) {
  ["total"]=>
  string(%d) "%d"
  ["free"]=>
  string(%d) "%d"
  ["used"]=>
  string(%d) "%d"
}