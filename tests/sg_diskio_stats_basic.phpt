--TEST--
Basic functionality of sg_diskio_stats()
--FILE--
<?php

$diskio_stats = sg_diskio_stats();

var_dump($diskio_stats);

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