<?php
header('Content-Type: application/json; charset=utf-8');
$result = ['php' => phpversion()];

// Test 1: outbound HTTPS via file_get_contents (same mechanism api.php uses)
$opts = ['http' => ['method'=>'GET','timeout'=>8,'ignore_errors'=>true]];
$r1 = @file_get_contents('https://api.airtable.com/v0/meta/whoami', false, stream_context_create($opts));
$result['outbound_fopen_ok'] = ($r1 !== false);
$result['outbound_fopen_len'] = $r1 !== false ? strlen($r1) : null;

// Test 2: temp dir writable (same as PIN_CACHE)
$tmp = sys_get_temp_dir() . '/hive_diag_test.json';
$w = @file_put_contents($tmp, json_encode(['t'=>1]));
$result['temp_dir'] = sys_get_temp_dir();
$result['temp_writable'] = ($w !== false);
if ($w !== false) @unlink($tmp);

// Test 3: can we define a constant and read it back (basic sanity)
define('DIAG_TEST', 'ok');
$result['const_ok'] = (DIAG_TEST === 'ok');

// Test 4: json functions
$result['json_ok'] = (json_decode(json_encode(['a'=>1]), true)['a'] === 1);

echo json_encode($result);
