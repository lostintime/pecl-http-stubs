<?php

namespace http {

    class Params implements \ArrayAccess
    {
        const DEF_PARAM_SEP    = ',';
        const DEF_ARG_SEP      = ';';
        const DEF_VAL_SEP      = '=';
        const COOKIE_PARAM_SEP = '';
        const PARSE_RAW        = 0;
        const PARSE_ESCAPED    = 1;
        const PARSE_URLENCODED = 4;
        const PARSE_DIMENSION  = 8;
        const PARSE_RFC5987    = 16;
        const PARSE_DEFAULT    = 17;
        const PARSE_QUERY      = 12;

        /** @var array The (parsed) parameters. */
        public $params;

        /** @var array The parameter separator(s). */
        public $param_sep;

        /** @var array The argument separator(s). */
        public $arg_sep;

        /** @var array The value separator(s). */
        public $val_sep;

        /** @var int The modus operandi of the parser. See http\Params::PARSE_* constants. */
        public $flags;

        /**
         * Instantiate a new HTTP (header) parameter set.
         * @param mixed|null $params
         * @param mixed|null $param_sep
         * @param mixed|null $arg_sep
         * @param mixed|null $val_sep
         * @param int $flags
         */
        final public function __construct(
            $params = null,
            $param_sep = null,
            $arg_sep = null,
            $val_sep = null,
            $flags = Params::PARSE_DEFAULT
        ) {

        }

        /**
         * Convenience method that simply returns http\Params::$params.
         * @return array
         */
        public function toArray()
        {

        }

        /**
         * Returns a stringified version of the parameters.
         * @return string
         */
        public function toString()
        {

        }

        /**
         * String cast handler. Alias of http\Params::toString().
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $name
         * @return bool
         */
        public function offsetExists($name)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $name
         */
        public function offsetUnset($name)
        {
        }

        /**
         * Implements ArrayAccess.
         * @param mixed $name
         * @param mixed $value
         */
        public function offsetSet($name, $value)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $name
         * @return mixed
         */
        public function offsetGet($name)
        {

        }
    }
}
