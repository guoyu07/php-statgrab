--TEST--
Basic functionality of sg_diskio_stats_diff()
--FILE--
<?php

$diskio_stats_diff = sg_diskio_stats_diff();

var_dump($diskio_stats_diff);

?>
--EXPECTF--
array(1) {
  ["%s"]=>
  array(%d) {
    ["read"]=>
    string(%d) "%d"
    ["written"]=>
    string(%d) "%d"
    ["time_frame"]=>
    int(%d)
  }
}