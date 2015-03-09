<?php

namespace http {

    class Cookie
    {
        const PARSE_RAW = 1;
        const SECURE    = 16;
        const HTTPONLY  = 32;

        /**
         * @param mixed|null $cookie_string
         * @param int|null $parser_flags
         * @param array|null $allowed_extras
         */
        public function __construct($cookie_string = null, $parser_flags = null, $allowed_extras = null)
        {

        }

        /**
         * String cast handler. Alias of http\Cookie::toString().
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Add a cookie.
         * @param string $cookie_name
         * @param string $cookie_value
         * @return Cookie
         */
        public function addCookie($cookie_name, $cookie_value)
        {

        }

        /**
         * (Re)set the cookies.
         * @param array $cookies
         * @return Cookie
         */
        public function addCookies(array $cookies)
        {

        }

        /**
         * Add an extra attribute to the cookie list.
         * @param string $extra_name
         * @param string $extra_value
         * @return Cookie
         */
        public function addExtra($extra_name, $extra_value)
        {

        }

        /**
         * Add several extra attributes.
         * @param array $extras
         * @return Cookie
         */
        public function addExtras($extras)
        {

        }

        /**
         * Retrieve a specific cookie value.
         * @param string $name
         * @return string
         */
        public function getCookie($name)
        {

        }

        /**
         * Get the list of cookies.
         * @return array
         */
        public function getCookies()
        {

        }

        /**
         * Retrieve the effective domain of the cookie list.
         * @return string
         */
        public function getDomain()
        {

        }

        /**
         * Get the currently set expires attribute.
         * @return int
         */
        public function getExpires()
        {

        }

        /**
         * Retrieve an extra attribute.
         * @param string $name
         * @return string
         */
        public function getExtra($name)
        {

        }

        /**
         * Retrieve the list of extra attributes.
         * @return array
         */
        public function getExtras()
        {

        }

        /**
         * Get the currently set flags.
         * @return int
         */
        public function getFlags()
        {

        }

        /**
         * Get the currently set max-age attribute of the cookie list.
         * @return int
         */
        public function getMaxAge()
        {

        }

        /**
         * Retrieve the path the cookie(s) of this cookie list are effective at.
         * @return string
         */
        public function getPath()
        {

        }

        /**
         * (Re)set a cookie.
         * @param string $cookie_name
         * @param string|null $cookie_value
         * @return Cookie
         */
        public function setCookie($cookie_name, $cookie_value = null)
        {

        }

        /**
         * (Re)set the cookies.
         * @param array|null $cookies
         * @return Cookie
         */
        public function setCookies($cookies = null)
        {

        }

        /**
         * Set the effective domain of the cookie list.
         * @param string|null $value
         * @return Cookie
         */
        public function setDomain($value = null)
        {

        }

        /**
         * Set the traditional expires timestamp.
         * @param int $value
         * @return Cookie
         */
        public function setExpires($value = -1)
        {

        }

        /**
         * Re)set an extra attribute.
         * @param string $extra_name
         * @param string|null $extra_value
         * @return Cookie
         */
        public function setExtra($extra_name, $extra_value = null)
        {

        }

        /**
         * @param array|null $extras
         * @return Cookie
         */
        public function setExtras(array $extras = null)
        {

        }

        /**
         * Set the flags to specified $value.
         * @param int $value
         * @return Cookie
         */
        public function setFlags($value = 0)
        {

        }

        /**
         * @param int $value
         * @return Cookie
         */
        public function setMaxAge($value = -1)
        {

        }

        /**
         * Set the path the cookie(s) of this cookie list should be effective at.
         * @param string|null $value
         * @return Cookie
         */
        public function setPath($value = null)
        {

        }

        /**
         * Get the cookie list as array.
         * @return array
         */
        public function toArray()
        {

        }

        /**
         * Retrieve the string representation of the cookie list.
         * @return string
         */
        public function toString()
        {

        }
    }
}


