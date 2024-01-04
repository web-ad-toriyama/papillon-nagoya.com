<?php

class ViewSmarty extends Smarty
{
    public function __construct()
    {
        $this->error_reporting = E_ALL & ~E_NOTICE;
        $this->debugging = DBG;
        $this->compile_dir = VIEW_AD_DIR . '/compile';
        $this->cache_dir = VIEW_DIR . '/cache';
        $this->left_delimiter = '<!--{';
        $this->right_delimiter = '}-->';
        $this->caching = false;
        parent::__construct();
    }
}
