<?php echo json_encode(['ok'=>true, 'php'=>phpversion(), 'time'=>date('c'), 'allow_url_fopen'=>ini_get('allow_url_fopen')?'1':'0']);
