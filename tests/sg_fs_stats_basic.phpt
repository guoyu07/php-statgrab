--TEST--
Basic functionality of sg_fs_stats()
--FILE--
<?php

$fs_stats = sg_fs_stats();

echo 'Total Count: ' . count($fs_stats) . "\n\n";

$fs_stats_first = array_slice($fs_stats, 0, 1);

var_dump($fs_stats_first);

?>
--EXPECTF--
Total Count: %d

array(1) {
  [0]=>
  array(16) {
    ["device_name"]=>
    string(%d) "%s"
    ["fs_type"]=>
    string(%d) "%s"
    ["mnt_point"]=>
    string(%d) "%s"
    ["size"]=>
    string(%d) "%d"
    ["used"]=>
    string(%d) "%d"
    ["avail"]=>
    string(%d) "%d"
    ["total_inodes"]=>
    string(%d) "%d"
    ["used_inodes"]=>
    string(%d) "%d"
    ["free_inodes"]=>
    string(%d) "%d"
    ["avail_inodes"]=>
    string(%d) "%d"
    ["io_size"]=>
    string(%d) "%d"
    ["block_size"]=>
    string(%d) "%d"
    ["total_blocks"]=>
    string(%d) "%d"
    ["free_blocks"]=>
    string(%d) "%d"
    ["used_blocks"]=>
    string(%d) "%d"
    ["avail_blocks"]=>
    string(%d) "%d"
  }
}