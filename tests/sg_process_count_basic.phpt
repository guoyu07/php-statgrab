--TEST--
Basic functionality of sg_process_count()
--FILE--
<?php

$process_count = sg_process_count();

var_dump($process_count);

?>
--EXPECTF--
array(5) {
  ["total"]=>
  int(%d)
  ["running"]=>
  int(%d)
  ["sleeping"]=>
  int(%d)
  ["stopped"]=>
  int(%d)
  ["zombie"]=>
  int(%d)
}