<?php
class Log
{
    public static $lastestLog;


    public function __construct()
    {
        self::$lastestLog += 1;
    }


    public static function save_log()
    {
        $file_handle = fopen('LogFile.txt', 'a');
        fwrite($file_handle, date('l jS \of F Y h:i:s A') . "- Accessing file\r");
    }
}
