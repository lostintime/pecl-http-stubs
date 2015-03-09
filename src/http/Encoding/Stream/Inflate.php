<?php

namespace http\Encoding\Stream {

    use http\Encoding\Stream;

    /**
     * A inflate stream supporting deflate, zlib and gzip encodings.
     * @package http\Encoding\Stream
     */
    class Inflate extends Stream
    {
        /**
         * Decode deflate/zlib/gzip encoded data.
         * @param string $data
         * @return string
         */
        public static function decode($data)
        {

        }
    }
}
