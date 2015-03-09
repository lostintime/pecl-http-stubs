<?php

namespace http\Encoding {

    /**
     * Base class for encoding stream implementations.
     * @package http\Encoding
     */
    abstract class Stream
    {
        const FLUSH_NONE = 0;
        const FLUSH_SYNC = 1048576;
        const FLUSH_FULL = 2097152;

        /**
         * Base constructor for encoding stream implementations.
         * @param int $flags
         */
        public function __construct($flags = 0)
        {

        }

        /**
         * Check whether the encoding stream is already done.
         * @return bool
         */
        public function done()
        {

        }

        /**
         * Finish and reset the encoding stream.
         * @return string
         */
        public function finish()
        {

        }

        /**
         * Flush the encoding stream.
         * @return string
         */
        public function flush()
        {

        }

        /**
         * Update the encoding stream with more input.
         * @param string $data
         * @return string
         */
        public function update($data)
        {
        }
    }
}
