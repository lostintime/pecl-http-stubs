<?php

namespace http {
    
    class Header implements \Serializable
    {
        /**
         * None of the following match constraints applies.
         */
        const MATCH_LOOSE = 0;

        /**
         * Perform case sensitive matching.
         */
        const MATCH_CASE = 1;

        /**
         * Match only on word boundaries (according by CType alpha-numeric).
         */
        const MATCH_WORD = 16;

        /**
         * Match the complete string.
         */
        const MATCH_FULL = 32;

        /**
         * Case sensitively match the full string (same as MATCH_CASE|MATCH_FULL).
         */
        const MATCH_STRICT = 33;

        /** @var string The name of the HTTP header. */
        public $name = null;

        /** @var mixed The value of the HTTP header. */
        public $value = null;

        /**
         * Create an http\Header instance for use of simple matching or negotiation. If the value of the header is an
         * array it may be compounded to a single comma separated string.
         * @param string|null $name
         * @param mixed|null $value
         */
        public function __construct($name = null, $value = null)
        {

        }

        /**
         * String cast handler. Alias of http\Header::serialize().
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Create a parameter list out of the HTTP header value.
         * @param  mixed|null $param_sep
         * @param  mixed|null $arg_sep
         * @param mixed|null $val_sep
         * @param int|null $flags
         * @return Params
         */
        public function getParams($param_sep = ",", $arg_sep = ";", $val_sep = "=", $flags = Params::PARSE_DEFAULT)
        {

        }

        /**
         * Match the HTTP header’s value against provided $value according to $flags.
         * @param string|$value
         * @param int|null $flags
         * @return bool
         */
        public function match($value, $flags = Header::MATCH_LOOSE)
        {

        }

        /**
         * Negotiate the header’s value against a list of supported values in $supported.
         * @param array $supported
         * @param array|null $result
         * @return string
         */
        public function negotiate($supported, &$result = null)
        {

        }

        /**
         * Parse HTTP headers.
         * @param string $string
         * @param string|null $header_class
         * @return array
         */
        public static function parse($string, $header_class = null)
        {

        }

        /**
         * Implements Serializable.
         * @return string
         */
        public function serialize()
        {

        }

        /**
         * Convenience method. Alias of http\Header::serialize().
         * @return string
         */
        public function toString()
        {

        }

        /**
         * @param string $serialized
         *
         */
        public function unserialize($serialized)
        {

        }
    }
}
