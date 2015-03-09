<?php

namespace http\Encoding\Stream {

    use http\Encoding\Stream;

    /**
     * A deflate stream supporting deflate, zlib and gzip encodings.
     * @package http\Encoding\Stream
     */
    class Deflate extends Stream
    {
        const TYPE_GZIP      = 16;
        const TYPE_ZLIB      = 0;
        const TYPE_RAW       = 32;
        const LEVEL_DEF      = 0;
        const LEVEL_MIN      = 1;
        const LEVEL_MAX      = 9;
        const STRATEGY_DEF   = 0;
        const STRATEGY_FILT  = 256;
        const STRATEGY_HUFF  = 512;
        const STRATEGY_RLE   = 768;
        const STRATEGY_FIXED = 1024;

        /**
         * Encode data with deflate/zlib/gzip encoding.
         * @param string $data
         * @param int $flags
         * @return string
         */
        public static function encode($data, $flags = 0)
        {

        }
    }
}
