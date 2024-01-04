<?php

class Auth
{
    public static function check()
    {
        if (self::_decrypt() == LOGIN_ID . LOGIN_PASS . LOGIN_COOKIE) {
            return true;
        }

        return false;
    }

    public static function login($login_id = null, $login_pass = null, $remember = 0)
    {
        if ($login_id == LOGIN_ID && $login_pass == LOGIN_PASS) {
            if ($remember == 1) {
                $remember = 3600 * 24 * LOGIN_EXPIRE;
            }

            return Cookie::set(LOGIN_COOKIE, self::_encrypt(), $remember);
        }
        Logger::error('ログインに失敗しました(ID=' . $login_id . ' / PASS=' . $login_pass . ')');

        return false;
    }

    public static function logined()
    {
        redirect(AD_URL);
    }

    public static function logout()
    {
        Cookie::del(LOGIN_COOKIE);
        redirect(AD_URL . '/login.php');
    }

    private static function _encrypt()
    {
        $data = LOGIN_ID . LOGIN_PASS . LOGIN_COOKIE;

        return Crypt::encrypt($data, LOGIN_SALT);
    }

    private static function _decrypt()
    {
        $data = Cookie::get(LOGIN_COOKIE);

        return Crypt::decrypt($data, LOGIN_SALT);
    }
}
