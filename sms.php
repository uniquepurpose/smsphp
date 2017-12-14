<pre>
<?php
$log = date('Y-m-d H:i:s').PHP_EOL;
$file = 'sms.log';

foreach(explode(';', $_GET['rec']) as $rec) {
        $rec = filter_var($rec, FILTER_SANITIZE_NUMBER_INT);
        
        if(!empty($rec)) {
                $cmd = sprintf('gammu sendsms TEXT %s -textutf8 %s', $rec, escapeshellarg($_GET['text']));
                $log.= $cmd.PHP_EOL;
                $log.= shell_exec($cmd).PHP_EOL.PHP_EOL;
        }
}
file_put_contents($file, $log, FILE_APPEND | LOCK_EX);
echo $log;