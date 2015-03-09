<?php

namespace http\Encoding\Stream {

    use http\Encoding\Stream;

    /**
     * A stream decoding data encoded with chunked transfer encoding.
     * @package http\Encoding\Stream
     */
    class Dechunk extends Stream
    {
        /**
         * Decode chunked encoded data.
         * @param string $data
         * @param int|null $decoded_len
         * @return string
         */
        public static function decode($data, &$decoded_len = 0)
        {

        }
    }
}