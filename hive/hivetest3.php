<?php
header('Content-Type: application/json; charset=utf-8');
$result = ['php' => phpversion()];

// Mirror api.php's exact token-loading logic
$__t = 'PASTE_YOUR_AIRTABLE_TOKEN_HERE';
$__candidates = [dirname(__DIR__, 2).'/hive-token.php', dirname(__DIR__).'/hive-token.php', __DIR__.'/hive-token.php'];
$result['candidates_checked'] = [];
foreach ($__candidates as $__f){
  $exists = file_exists($__f);
  $result['candidates_checked'][] = ['path_depth' => substr_count($__f, '/'), 'exists' => $exists];
  if ($exists){
    include $__f;
    if (defined('HIVE_TOKEN') && HIVE_TOKEN !== 'PASTE_YOUR_AIRTABLE_TOKEN_HERE'){ $__t = HIVE_TOKEN; break; }
  }
}
$result['token_loaded'] = ($__t !== 'PASTE_YOUR_AIRTABLE_TOKEN_HERE');
$result['token_len'] = ($__t !== 'PASTE_YOUR_AIRTABLE_TOKEN_HERE') ? strlen($__t) : 0;

// Now try a REAL authenticated Airtable call, exactly like at_request() in api.php
if ($result['token_loaded']){
  $url = 'https://api.airtable.com/v0/app2HNkUSJqx9IkYZ/' . rawurlencode('Portal Access') . '?maxRecords=1';
  $opts = ['http' => [
    'method' => 'GET',
    'header' => "Authorization: Bearer " . $__t . "\r\nContent-Type: application/json\r\n",
    'ignore_errors' => true, 'timeout' => 20
  ]];
  $r = @file_get_contents($url, false, stream_context_create($opts));
  $result['airtable_call_ok'] = ($r !== false);
  $result['airtable_response_len'] = ($r !== false) ? strlen($r) : null;
  // Grab just the HTTP status line from $http_response_header, no body content
  $result['http_status'] = isset($http_response_header[0]) ? $http_response_header[0] : null;
  if ($r !== false){
    $decoded = json_decode($r, true);
    $result['json_decode_ok'] = ($decoded !== null || $r === 'null');
    $result['has_records_key'] = isset($decoded['records']);
    $result['has_error_key'] = isset($decoded['error']);
  }
}

// Test temp dir + PIN_CACHE path exactly as api.php defines it
$pinCache = sys_get_temp_dir() . '/hive_pins_cache.json';
$result['pin_cache_path'] = $pinCache;
$result['pin_cache_exists'] = file_exists($pinCache);
if (file_exists($pinCache)){
  $result['pin_cache_age_sec'] = time() - filemtime($pinCache);
  $result['pin_cache_readable'] = is_readable($pinCache);
}

echo json_encode($result);
