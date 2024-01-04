<?php

class LogLevel
{
    const DEBUG = 1;
    const INFO = 2;
    const WARN = 3;
    const ERROR = 4;
    const EXCEPT = 5;
    const NO_OUTPUT = 99;
}

class Logger
{
    private static $_fileNames = array();
    private static $_logFormat = '[%time%] [%level%] %message%';
    private static $_timeFormat = 'Y-m-d H:i:s';
    private static $_generation = 2;
    private static $_maxLine = 10000;
    private static $_outputLevel = 1;
    private static $_levelTexts = array(
        1 => 'DEBUG',
        2 => 'INFO ',
        3 => 'WARN ',
        4 => 'ERROR',
        5 => 'ERROR'
    );

    /**
	 * @param        $message
	 * @param int    $logLevel
	 * @param string $logKey
	 *
	 * @throws Exception
	 */
    public static function write($message, $logLevel = LogLevel::INFO, $logKey = 'default')
    {
        $dirPath = LOG_DIR;

        if (self::$_outputLevel > $logLevel) {
            return;
        }
        // ログ保存ディレクトリ作成
        if (!Dir::exists($dirPath)) {
            Dir::create($dirPath);
        }
        $fileName = date('Y-m-d') . ' ' . $logKey . '.log';
        $filePath = $dirPath . '/' . $fileName;
        if (file_exists($filePath) && is_file($filePath) && !is_writable($filePath)) {
            return;
        }

        $level = 'UNKNOWN';
        if (array_key_exists($logLevel, self::$_levelTexts)) {
            $level = self::$_levelTexts[$logLevel];
        }
        $logText = self::$_logFormat;
        $logText = str_replace('%time%', date(self::$_timeFormat), $logText);
        $logText = str_replace('%level%', $level, $logText);
        $logText = str_replace('%message%', $message, $logText);
        $logText .= "\n";

        $lineCount = 0;
        if (file_exists($filePath)) {
            $lineCount = count(file($filePath));
        }
        // exec rotate if line count of log file is over generation setting.
        if ($lineCount >= self::$_maxLine) {
            self::_rotate($fileName);
        }

        $r = @fopen($filePath, 'a');
        @fputs($r, $logText);
        @fclose($r);
    }

    public static function info($message, $logKey = 'info')
    {
        self::write($message, LogLevel::INFO, $logKey);
    }

    public static function warn($message, $logKey = 'warn')
    {
        self::write($message, LogLevel::WARN, $logKey);
    }

    public static function error($message, $logKey = 'error')
    {
        self::write($message, LogLevel::ERROR, $logKey);
    }

    public static function debug($message, $logKey = 'debug')
    {
        self::write($message, LogLevel::DEBUG, $logKey);
    }

    public static function except(Exception $e, $logKey = 'except')
    {
        if (self::$_outputLevel > LogLevel::EXCEPT) {
            return;
        }

        $message = sprintf(
            "FILE:%s LINE:%s %s\n%s",
            $e->getFile(),
            $e->getLine(),
            $e->getMessage(),
            $e->getTraceAsString()
        );

        self::write($message, LogLevel::EXCEPT, $logKey);
    }

    private static function _rotate($fileName)
    {
        $dirPath = LOG_DIR;

        // get file list in log directory
        $dir = dir($dirPath);
        $generations = array();
        while ($content = $dir->read()) {
            $path = sprintf("%s/%s", $dirPath, $content);
            if (!is_file($path)) {
                // ignore directory
                continue;
            }
            $info = pathinfo($path);
            $name = $info['basename'];
            if (!preg_match(sprintf('|^%s(\.[0-9]+)?$|', $fileName), $name)) {
                // ignore not match log name
                continue;
            }
            $generation = trim(str_replace($fileName, '', $name), '.');
            if ($generation == '') {
                $generation = 0;
            }
            if ($generation >= self::$_generation - 1) {
                // delete if rotate num is over generation setting
                @unlink($path);
            } else {
                $generations[] = $generation;
            }
        }
        // increment log extension as rotate num
        rsort($generations);
        foreach ($generations as $gene) {
            $oldName = sprintf('%s/%s.%s', $dirPath, $fileName, $gene);
            $newName = sprintf('%s/%s.%s', $dirPath, $fileName, $gene + 1);
            @rename($oldName, $newName);
        }
        $filePath = sprintf("%s/%s", $dirPath, $fileName);
        @rename($filePath, $filePath . '.1');
        $dir->close();
    }
}
