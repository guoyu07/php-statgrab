--TEST--
Basic functionality of sg_page_stats()
--FILE--
<?php

$page_stats = sg_page_stats();

var_dump($page_stats);

?>
--EXPECTF--
array(3) {
  ["pages_in"]=>
  string(%d) "%d"
  ["pages_out"]=>
  string(%d) "%d"
  ["time_frame"]=>
  int(%d)
}