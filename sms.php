<pre>
<?php
$log = date('Y-m-d H:i:s').PHP_EOL;
$file = 'sms.log';

foreach (explode(';',$_GET['rec']) as $rec) {
        $log.= (sprintf('gammu sendsms TEXT %s -text "%s"', $rec,str_replace('"',"'",$_GET['text'])));
        $log.= PHP_EOL;
        $log.= shell_exec(sprintf('gammu sendsms TEXT %s -text "%s"', $rec,str_replace('"',"'",$_GET['text'])));
        $log.= PHP_EOL;
        $log.= PHP_EOL;
}
file_put_contents($file, $log, FILE_APPEND | LOCK_EX);
