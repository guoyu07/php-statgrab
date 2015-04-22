--TEST--
Basic functionality of sg_network_stats_diff()
--FILE--
<?php

sg_network_stats();
$network_stats_diff = sg_network_stats_diff();

$network_stats_subdiff = current($network_stats_diff);

var_dump($network_stats_subdiff);

?>
--EXPECTF--
array(8) {
  ["sent"]=>
  string(%d) "%d"
  ["received"]=>
  string(%d) "%d"
  ["packets_received"]=>
  string(%d) "%d"
  ["packets_transmitted"]=>
  string(%d) "%d"
  ["receive_errors"]=>
  string(%d) "%d"
  ["transmit_errors"]=>
  string(%d) "%d"
  ["collisions"]=>
  string(%d) "%d"
  ["time_frame"]=>
  int(0)
}