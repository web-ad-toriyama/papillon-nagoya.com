<?php

class Token extends Singleton
{
    protected static $csrf_old_token = false;
    protected static $csrf_token_key = false;
    protected static $csrf_token = false;

    public static function init()
    {
        static::$csrf_old_token = Cookie::get(TOKEN_KEY);
    }

    public static function fetch()
    {
        if (static::$csrf_token !== false) {
            return static::$csrf_token;
        }
        static::set();

        return static::$csrf_token;
    }

    protected static function set($reset = false)
    {
        if (!$reset and static::$csrf_old_token > 0) {
            static::$csrf_token = static::$csrf_old_token;
        } else {
            static::$csrf_token = static::generate();
            Cookie::set(TOKEN_KEY, static::$csrf_token, 0);
        }
    }

    public static function generate()
    {
        $token_base = time() . uniqid() . TOKEN_SALT . mt_rand(0, mt_getrandmax());
        if (function_exists('hash_algos') and in_array('sha512', hash_algos())) {
            $token = hash('sha512', $token_base);
        } else {
            $token = md5($token_base);
        }

        return $token;
    }

    public static function check($value = null)
    {
        global $request;
        $value = $value ?: $request->getPost(TOKEN_KEY);
        if (static::fetch() == static::$csrf_old_token and !empty($value)) {
            static::set(true);
        }

        return $value === static::$csrf_old_token;
    }
}
