<?php

class Crypt
{
    private $key;
    private $mc;
    private $iv_size;
    private $init;

    public static function encrypt($data, $salt)
    {
        if ((string)$data === '') {
            return false;
        }
        $obj = new self($salt);

        return $obj->_encrypt($data);
    }

    public static function decrypt($data, $salt)
    {
        $obj = new self($salt);

        return $obj->_decrypt($data);
    }

    private function __construct($salt)
    {
        $this->mc = mcrypt_module_open('rijndael-256', '', 'cbc', '');
        $this->key = substr(md5($salt), 0, mcrypt_enc_get_key_size($this->mc));
        $this->iv_size = mcrypt_enc_get_iv_size($this->mc);
    }

    private function __destruct()
    {
        if ($this->init) {
            mcrypt_generic_deinit($this->mc);
        }
        mcrypt_module_close($this->mc);
    }

    private function _encrypt($data)
    {
        if (PHP_OS === 'WIN32' || PHP_OS === 'WINNT') {
            srand();
            $iv = mcrypt_create_iv($this->iv_size, MCRYPT_RAND);
        } else {
            $iv = mcrypt_create_iv($this->iv_size, MCRYPT_DEV_URANDOM);
        }
        mcrypt_generic_init($this->mc, $this->key, $iv);
        $this->init = true;
        $data = mcrypt_generic($this->mc, base64_encode($data));

        return rtrim(base64_encode(base64_encode($iv) . '-' . base64_encode($data)), '=');
    }

    private function _decrypt($data)
    {
        list($iv, $data) = array_map('base64_decode',
            explode(
                '-',
                base64_decode($data, true),
                2
            )
            + array(1 => '')
        );
        if ($data === '' || !isset($iv[$this->iv_size - 1])) {
            return false;
        }
        mcrypt_generic_init($this->mc, $this->key, $iv);
        $this->init = true;

        return base64_decode(rtrim(mdecrypt_generic($this->mc, $data), "\0"), true);
    }
}
