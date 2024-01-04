<?php

class Cookie
{
    private static $config = array(
        'expiration' => 0,
        'path'       => '/',
        'domain'     => null,
        'secure'     => false,
        'http_only'  => true
    );

    public static function set($name, $value, $expiration = null, $path = null, $domain = null, $secure = null, $http_only = null)
    {
        is_null($expiration) and $expiration = static::$config['expiration'];
        is_null($path) and $path = static::$config['path'];
        is_null($domain) and $domain = static::$config['domain'];
        is_null($secure) and $secure = static::$config['secure'];
        is_null($http_only) and $http_only = static::$config['http_only'];
        $expiration = $expiration > 0 ? $expiration + time() : 0;

        return setcookie($name, $value, $expiration, $path, $domain, $secure, $http_only);
    }

    public static function get($name, $default = null)
    {
        $result = null;
        if (array_key_exists($name, $_COOKIE)) {
            ($_COOKIE[$name] != '') ? $result = $_COOKIE[$name] : $result = $default;
        }

        return $result;
    }

    public static function del($name, $path = null)
    {
        is_null($path) and $path = static::$config['path'];
        setcookie($name, '', time() - 1800, $path);
    }
}
