--TEST--
Basic functionality of sg_network_stats()
--FILE--
<?php

$network_stats = sg_network_stats();

$network_substats = current($network_stats);

var_dump($network_substats);

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
  int(%d)
}