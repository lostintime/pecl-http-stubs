<?php

namespace http {


    /**
     * The http\Env class provides static methods to manipulate and inspect the server’s current request’s HTTP
     * environment.
     * @package http
     */
    class Env
    {
        /**
         * Retrieve the current HTTP request’s body.
         * @param string|null $body_class_name
         * @return \http\Message\Body
         */
        public static function getRequestBody($body_class_name = null)
        {

        }

        /**
         * Retrieve one or all headers of the current HTTP request.
         * @param string|null $header_name
         * @return mixed
         */
        public static function getRequestHeader($header_name = null)
        {

        }

        /**
         * Get the HTTP response code to send.
         * @return int
         */
        public static function getResponseCode()
        {

        }

        /**
         * Get one or all HTTP response headers to be sent.
         * @param string|null $header_name
         * @return mixed
         */
        public static function getResponseHeader($header_name = null)
        {

        }

        /**
         * Retrieve a list of all known HTTP response status.
         * @return array
         */
        public static function getResponseStatusForAllCodes()
        {

        }

        /**
         * Retrieve the string representation of specified HTTP response code.
         * @param int $code
         * @return array
         */
        public static function getResponseStatusForCode($code)
        {

        }

        /**
         * Generic negotiator. For specific client negotiation see http\Env::negotiateContentType() and related methods.
         * @param string $params
         * @param array $supported
         * @param string|null $primary_type_separator
         * @param array|null $result_array
         * @return string
         */
        public static function negotiate($params, $supported, $primary_type_separator = null, &$result_array = null)
        {

        }

        /**
         * Negotiate the client’s preferred character set.
         * @param array $supported
         * @param array|null $result_array
         * @return string
         */
        public static function negotiateCharset($supported, &$result_array = null)
        {

        }

        /**
         * Negotiate the client’s preferred MIME content type.
         * @param array $supported
         * @param array|null $result_array
         * @return string
         */
        public static function negotiateContentType($supported, &$result_array = null)
        {

        }

        /**
         * Negotiate the client’s preferred encoding.
         * @param array $supported
         * @param array|null $result_array
         * @return string
         */
        public static function negotiateEncoding($supported, &$result_array = null)
        {

        }

        /**
         * Negotiate the client’s preferred language.
         * @param array $supported
         * @param array|null $result_array
         * @return string
         */
        public static function negotiateLanguage($supported, &$result_array = null)
        {

        }

        /**
         * Set the HTTP response code to send.
         * @param int $code
         * @return bool
         */
        public static function setResponseCode($code)
        {
        }

        /**
         * Set a response header, either replacing a prior set header, or appending the new header value, depending on
         * $replace.
         * @param string $header_name
         * @param string|null $header_value
         * @param int $response_code
         * @param bool $replace_header
         */
        public static function setResponseHeader(
            $header_name,
            $header_value = null,
            $response_code = 0,
            $replace_header = true
        ) {

        }
    }
}