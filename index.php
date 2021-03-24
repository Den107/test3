<?php
$storage_file = 'chart.json';
$result_file = 'result.json';
$storage = file_get_contents($storage_file);

$res = json_decode($storage, true);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as &$value) {
    if ($value === 100) {
      $value = null;
    }
  }
}

$res = json_encode($res);
file_put_contents($result_file, $res);
