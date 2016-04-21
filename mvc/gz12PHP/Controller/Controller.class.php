<?php

    class Controller extends Smarty
    {
        public function __construct()
        {
            // echo '<pre>';
            // print_r($this);
            parent::__construct();
            $this->template_dir = './View';
            $this->compile_dir = './runtime/view_c';
            $this->cache_dir = './runtime/cache';
        }
    }
