<?php


namespace http {

    use Iterator;
    use stdClass;

    class QueryString implements \Serializable, \ArrayAccess, \IteratorAggregate
    {
        const TYPE_BOOL   = 3;
        const TYPE_INT    = 1;
        const TYPE_FLOAT  = 2;
        const TYPE_STRING = 6;
        const TYPE_ARRAY  = 4;
        const TYPE_OBJECT = 5;

        /**
         * Create an independent QueryString instance.
         * @param mixed|null $params
         */
        final public function __construct($params = null)
        {

        }

        /**
         * Simply returns http\QueryString::$queryArray.
         * @return array
         */
        public function toArray()
        {

        }

        /**
         * Get the string representation of the QueryString (x-www-form-urlencoded).
         * @return string
         */
        public function toString()
        {

        }

        /**
         * Get the string representation of the QueryString (x-www-form-urlencoded).
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Retrieve an QueryString value.
         * @param string|null $name
         * @param mixed|null $type
         * @param mixed|null $defval
         * @param bool $delete
         * @return mixed
         */
        public function get($name = null, $type = null, $defval = null, $delete = false)
        {

        }

        /**
         * Set additional querystring entries.
         * @param mixed $params
         * @return QueryString
         */
        public function set($params)
        {

        }

        /**
         * Set additional $params to a clone of this instance.
         * @param mixed|null $params
         * @return QueryString
         */
        public function mod($params = null)
        {
        }

        /**
         * Retrieve a boolean value at offset $name.
         * @param string $name
         * @param bool|null $defval
         * @param bool $delete
         * @return bool
         */
        public function getBool($name, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve a int value at offset $name.
         * @param string $name
         * @param int|null $defval
         * @param bool $delete
         * @return bool
         */
        public function getInt($name, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve a float value at offset $name.
         * @param string $name
         * @param float|null $defval
         * @param bool $delete
         * @return float
         */
        public function getFloat($name, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve a string value with at offset $name.
         * @param string $name
         * @param string|null $defval
         * @param bool $delete
         * @return string
         */
        public function getString($name, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve an array value with at offset $name.
         * @param string $name
         * @param mixed $defval
         * @param bool $delete
         * @return array
         */
        public function getArray($name, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve a object value with at offset $name.
         * @param string $name
         * @param \stdClass|null $defval
         * @param bool $delete
         * @return \stdClass
         */
        public function getObject($name, $defval = null, $delete = false)
        {

        }

        /**
         * Implements IteratorAggregate.
         * @return Iterator
         */
        public function getIterator()
        {

        }

        /**
         * Retrieve the global querystring instance referencing $_GET.
         * @return QueryString
         */
        public static function getGlobalInstance()
        {

        }

        /**
         * Translate character encodings of the querystring with ext/iconv.
         * @param $from_encoding
         * @param $to_encoding
         * @return QueryString
         */
        public function xlate($from_encoding, $to_encoding)
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
         * Implements Serializable.
         * @param string $serialized
         */
        public function unserialize($serialized)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $offset
         * @return mixed
         */
        public function offsetGet($offset)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $offset
         * @param mixed $value
         */
        public function offsetSet($offset, $value)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $offset
         * @return bool
         */
        public function offsetExists($offset)
        {

        }

        /**
         * Implements ArrayAccess.
         * @param mixed $offset
         */
        public function offsetUnset($offset)
        {

        }
    }
}
