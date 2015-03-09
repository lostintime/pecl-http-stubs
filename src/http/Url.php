<?php

namespace http {

    class Url
    {
        /**
         * Replace parts of the old URL with parts of the new.
         */
        const REPLACE = 0;

        /**
         * Whether a relative path should be joined into the old path.
         */
        const JOIN_PATH = 1;

        /**
         * Whether the querystrings should be joined.
         */
        const JOIN_QUERY = 2;

        /**
         * Strip the user information from the URL.
         */
        const STRIP_USER = 4;

        /**
         * Strip the password from the URL.
         */
        const STRIP_PASS = 8;

        /**
         * Strip user and password information from URL (same as STRIP_USER|STRIP_PASS).
         */
        const STRIP_AUTH = 12;

        /**
         * Do not include the port.
         */
        const STRIP_PORT = 32;

        /**
         * Do not include the URL path.
         */
        const STRIP_PATH = 64;

        /**
         * Do not include the URL querystring.
         */
        const STRIP_QUERY = 128;

        /**
         * Strip the fragment (hash) from the URL.
         */
        const STRIP_FRAGMENT = 256;

        /**
         * Strip everything except scheme and host information.
         */
        const STRIP_ALL = 492;

        /**
         * Import initial URL parts from the SAPI environment.
         */
        const FROM_ENV = 4096;

        /**
         * Whether to sanitize the URL path (consolidate double slashes, directory jumps etc.)
         */
        const SANITIZE_PATH = 8192;

        /** @var string The URL’s scheme. */
        public $scheme;

        /** @var string Authenticating user. */
        public $user;

        /** @var string Authentication password. */
        public $pass;

        /** @var string Hostname/domain. */
        public $host;

        /** @var string Port. */
        public $port;

        /** @var string URL path. */
        public $path;

        /** @var string URL querystring. */
        public $query;

        /** @var string URL fragment (hash). */
        public $fragment;

        /**
         * Create an instance of an http\Url.
         * @param mixed|null $old_url
         * @param mixed|null $new_url
         * @param int $flags
         */
        public function __construct($old_url = null, $new_url = null, $flags = Url::FROM_ENV)
        {

        }

        /**
         * Clone this URL and apply $parts to the cloned URL.
         * @param mixed $more_url_parts
         * @param int $flags
         * @return Url
         */
        public function mod($more_url_parts, $flags = Url::JOIN_QUERY)
        {

        }

        /**
         * Get the string representation of the URL.
         * @return string
         */
        public function toString()
        {
            
        }

        /**
         * String cast handler. Alias of http\Url::toString().
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Retrieve the URL parts as array.
         * @return array
         */
        public function toArray()
        {

        }
    }
}
