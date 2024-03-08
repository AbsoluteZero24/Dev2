

<?php

$period = 5;

for ($i = 1; $i <= ((60 / $period) - 1); $i++) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/cs-kso/index.php/auto_kanal_server/index/1');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    $tmp = curl_exec($ch);
    curl_close($ch);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://localhost/cs-kso/index.php/auto_kanal_server/index/2');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    $tmp = curl_exec($ch);
    curl_close($ch);
    
    sleep(5);
}
		
