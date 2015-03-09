<?php

namespace http\Env {

    use http\Message;

    /**
     * The http\Env\Response class' instances represent the server’s current HTTP response.
     * See http\Message for inherited members.
     * @package http\Env
     */
    class Response extends Message implements \Iterator, \Serializable, \Countable
    {
        const CONTENT_ENCODING_NONE = 0;
        const CONTENT_ENCODING_GZIP = 1;
        const CACHE_NO              = 0;
        const CACHE_HIT             = 1;
        const CACHE_MISS            = 2;

        /** @var \http\Env\Request A request instance which overrides the environments default request. */
        protected $request;
        /** @var string The response’s MIME content type. */
        protected $contentType;
        /** @var string The response’s MIME content disposition. */
        protected $contentDisposition;
        /** @var int See http\Env\Response::CONTENT_ENCODING_* constants. */
        protected $contentEncoding;
        /** @var string How the client should treat this response in regards to caching. */
        protected $cacheControl;
        /** @var string A custom ETag. */
        protected $etag;
        /** @var int A “Last-Modified” time stamp. */
        protected $lastModified;
        /** @var int Any throttling delay. */
        protected $throttleDelay;
        /** @var int The chunk to send every $throttleDelay seconds. */
        protected $throttleChunk;
        /** @var array The response’s cookies. */
        protected $cookies;

        /**
         * Create a new env response message instance.
         */
        public function __construct()
        {

        }

        /**
         * Output buffer handler.
         * @param string $ob_string
         * @param int $ob_flags
         * @return bool
         */
        public function __invoke($ob_string, $ob_flags = 0)
        {

        }

        /**
         * Manually test the header $header_name of the environment’s request for a cache hit.
         * @param string $header_name
         * @return int
         */
        public function isCachedByEtag($header_name = null)
        {

        }

        /**
         * Manually test the header $header_name of the environment’s request for a cache hit.
         * @param string|null $header_name
         * @return int
         */
        public function isCachedByLastModified($header_name = null)
        {

        }

        /**
         * Send the response through the SAPI or $stream.
         * @param resource|null $stream
         * @return bool
         */
        public function send($stream = null)
        {

        }

        /**
         * Make suggestions to the client how it should cache the response.
         * @param string $cache_control
         * @return Response
         */
        public function setCacheControl($cache_control)
        {

        }

        /**
         * Set the response’s content disposition parameters.
         * @param array $disposition_params
         * @return Response
         */
        public function setContentDisposition(array $disposition_params)
        {

        }

        /**
         * Enable int for “Accept-Encoding” requests with deflate or gzip.
         * @param string $content_encoding
         * @return Response
         */
        public function setContentEncoding($content_encoding)
        {

        }

        /**
         * Set the MIME content type of the response.
         * @param string $content_type
         * @return Response
         */
        public function setContentType($content_type)
        {

        }

        /**
         * Add cookies to the response to send.
         * @param mixed $cookie
         * @version >= 2.2.0
         * @return Response
         */
        public function setCookie($cookie)
        {

        }

        /**
         * Override the environment’s request.
         * @param Message $env_request
         * return Response
         */
        public function setEnvRequest(Message $env_request)
        {

        }

        /**
         * Set a custom ETag.
         * @param string $etag
         * @return Response
         */
        public function setEtag($etag)
        {

        }

        /**
         * Set a custom last modified time stamp.
         * @param int $last_modified
         * @return Response
         */
        public function setLastModified($last_modified)
        {

        }

        /**
         * Enable throttling.
         * @param int $chunk_size
         * @param float $delay
         * @return Response
         */
        public function setThrottleRate($chunk_size, $delay = 1.0)
        {

        }
    }
}
