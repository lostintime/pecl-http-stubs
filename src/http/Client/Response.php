<?php

namespace http\Client {

    use http\Message;

    /**
     * The http\Client\Response class represents an HTTP message the client returns as answer from a server to an
     * http\Client\Request.
     * @package http\Client
     */
    class Response extends Message implements \Iterator, \Serializable, \Countable
    {
        protected $transferInfo;

        /**
         * Extract response cookies.
         * @param int|null $flags
         * @param array|null $allowed_extras
         * @return mixed
         */
        public function getCookies($flags = null, $allowed_extras = null)
        {

        }

        /**
         * Retrieve transfer related information after the request has completed.
         * @param string|null $element
         * @return mixed
         */
        public function getTransferInfo($element = null)
        {
        }
    }
}
