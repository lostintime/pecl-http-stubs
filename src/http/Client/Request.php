<?php

namespace http\Client {

    use http\Message;
    use http\Message\Body;

    /**
     * The http\Client\Request class provides an HTTP message implementation tailored to represent a request message to
     * be sent by the client.
     * @package http\Client
     */
    class Request extends Message implements \Iterator, \Serializable, \Countable
    {
        /** @var array|null */
        protected $options;

        /**
         * Create a new client request message to be enqueued and sent by http\Client.
         * @param string|null $method
         * @param string|null $url
         * @param array $headers
         * @param Body $body
         */
        public function __construct($method = null, $url = null, array $headers = null, Body $body = null)
        {

        }

        /**
         * Add querystring data.
         * @param mixed $query_data
         * @return Request
         */
        public function addQuery($query_data)
        {
        }

        /**
         * Add specific SSL options.
         * @param array $ssl_options
         * @return Request
         */
        public function addSslOptions(array $ssl_options = null)
        {

        }

        /**
         * Extract the currently set “Content-Type” header.
         * @return string
         */
        public function getContentType()
        {

        }

        /**
         * Get priorly set options.
         * @return array
         */
        public function getOptions()
        {

        }

        /**
         * Retrieve the currently set querystring.
         * @return string
         */
        public function getQuery()
        {

        }

        /**
         * Retrieve priorly set SSL options.
         * @return array
         */
        public function getSslOptions()
        {

        }

        /**
         * Set the MIME content type of the request message.
         * @param string $content_type
         * @return Request
         */
        public function setContentType($content_type)
        {

        }

        /**
         * Set client options.
         * @param array $options
         * @return Request
         */
        public function setOptions(array $options = null)
        {

        }

        /**
         * (Re)set the querystring.
         * @param mixed|null $query_data
         * @return Request
         */
        public function setQuery($query_data = null)
        {

        }

        /**
         * Specifically set SSL options.
         * @param array $ssl_options
         * @return Request
         */
        public function setSslOptions(array $ssl_options = null)
        {
        }
    }
}
