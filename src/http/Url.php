<?php

namespace http {
    class Url
    {
        const REPLACE        = 0;
        const JOIN_PATH      = 1;
        const JOIN_QUERY     = 2;
        const STRIP_USER     = 4;
        const STRIP_PASS     = 8;
        const STRIP_AUTH     = 12;
        const STRIP_PORT     = 32;
        const STRIP_PATH     = 64;
        const STRIP_QUERY    = 128;
        const STRIP_FRAGMENT = 256;
        const STRIP_ALL      = 492;
        const FROM_ENV       = 4096;
        const SANITIZE_PATH  = 8192;

        public $scheme;
        public $user;
        public $pass;
        public $host;
        public $port;
        public $path;
        public $query;
        public $fragment;

        public function __construct($old_url = null, $new_url = null, $flags = null)
        {
        }

        public function mod($more_url_parts, $flags = null)
        {
        }

        public function toString()
        {
        }

        public function __toString()
        {
        }

        public function toArray()
        {
        }

    }

}
