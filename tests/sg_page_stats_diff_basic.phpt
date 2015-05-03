--TEST--
Basic functionality of sg_page_stats_diff()
--FILE--
<?php

sg_page_stats();
$page_stats_diff = sg_page_stats_diff();

var_dump($page_stats_diff);

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