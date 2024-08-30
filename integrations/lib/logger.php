<?php
function writeToLog(array $data, $httpcode, $response, $path, $pp)
{
    date_default_timezone_set('Europe/Moscow');
    $log  = "------------------------------------" . PHP_EOL .
            "-------------- BEGIN ---------------" . PHP_EOL .
            "------------------------------------" . PHP_EOL .
            $pp . " " . date("d.m.Y H:i:s T") . PHP_EOL .
            "--------------- DATA ---------------" . PHP_EOL .
            var_export($data, true) . PHP_EOL .
            "------------- HTTPCODE -------------" . PHP_EOL .
            $httpcode . PHP_EOL .
            "------------- RESPONSE -------------" . PHP_EOL .
            $response . PHP_EOL .
            "--------------- END ----------------" . PHP_EOL . PHP_EOL;
    $file_path = "./logs/$path/log_" . date("d.m.Y") . '.php';
    if (!file_exists($file_path)) {
        file_put_contents($file_path, '<?php' . PHP_EOL . 'exit;' . PHP_EOL . PHP_EOL, FILE_APPEND);
    }
    file_put_contents($file_path, $log, FILE_APPEND);
}
?>