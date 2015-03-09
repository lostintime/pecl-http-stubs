<?php

namespace http {

    use http\Message\Body;

    class Message implements \Countable, \Serializable, \Iterator
    {
        /**
         * No specific type of message.
         */
        const TYPE_NONE = 0;

        /**
         * A request message.
         */
        const TYPE_REQUEST = 1;

        /**
         * A response message.
         */
        const TYPE_RESPONSE = 2;

        /** @var int The message type. See http\Message::TYPE_* constants. */
        protected $type;

        /** @var Message\Body The message’s body. */
        protected $body;

        /** @var string The request method if the message is of type request. */
        protected $requestMethod;

        /** @var string The request url if the message is of type request. */
        protected $requestUrl;

        /** @var string The response status phrase if the message is of type response. */
        protected $responseStatus;

        /** @var int The response code if the message is of type response. */
        protected $responseCode;

        /** @var string A custom HTTP protocol version. */
        protected $httpVersion;

        /** @var array Any message headers. */
        protected $headers;

        /** @var Message Any parent message. */
        protected $parentMessage;

        /**
         * Create a new HTTP message.
         * @param mixed|null $message
         * @param bool|null $greedy
         */
        public function __construct($message = null, $greedy = true)
        {

        }

        /**
         * Retrieve the message serialized to a string.
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Append the data of $body to the message’s body.
         * @param Body $body
         * @return Message
         */
        public function addBody(Body $body)
        {

        }

        /**
         * Add an header, appending to already existing headers.
         * @param string $header
         * @param mixed $value
         * @return Message
         */
        public function addHeader($header, $value)
        {

        }

        /**
         * Add headers, optionally appending values, if header keys already exist.
         * @param array $headers
         * @param bool $append
         * @return Message
         */
        public function addHeaders(array $headers, $append = false)
        {

        }

        /**
         * Implements Countable.
         * @return int
         */
        public function count()
        {

        }

        /**
         * Implements iterator.
         * @return Message
         */
        public function current()
        {

        }

        /**
         * Detach a clone of this message from any message chain.
         * @return Message
         */
        public function detach()
        {

        }

        /**
         * Retrieve the message’s body.
         * @return Body
         */
        public function getBody()
        {

        }

        /**
         * Set the message’s body.
         * @param Body $body
         * @return Message
         */
        public function setBody(Body $body)
        {
        }

        /**
         * Retrieve a single header, optionally hydrated into a http\Header extending class.
         * @param string $header
         * @param string|null $into_class
         * @return mixed
         */
        public function getHeader($header, $into_class = null)
        {

        }

        /**
         * Set a single header.
         * @param string $header
         * @param mixed|null $value
         * @return Message
         */
        public function setHeader($header, $value = null)
        {
        }

        /**
         * Retrieve all message headers.
         * @return array
         */
        public function getHeaders()
        {

        }

        /**
         * Set the message headers.
         * @param array $headers
         * @return Message
         */
        public function setHeaders(array $headers)
        {

        }

        /**
         * Retrieve the type of the message.
         * @return int
         */
        public function getType()
        {
        }

        /**
         * Set the message type and reset the message info.
         * @param int $type
         * @return Message
         */
        public function setType($type)
        {

        }

        /**
         * Retrieve the first line of a request or response message.
         * @return string
         */
        public function getInfo()
        {

        }

        /**
         * Set the complete message info, i.e. type and response resp. request information, at once
         * @param string $http_info
         * @return Message
         */
        public function setInfo($http_info)
        {
        }

        /**
         * Retrieve the response code of the message.
         * @return int
         */
        public function getResponseCode()
        {

        }

        /**
         * Set the response status code.
         * @param string $response_code
         * @param bool|null $strict
         * @return Message
         */
        public function setResponseCode($response_code, $strict = true)
        {

        }

        /**
         * Retrieve the response status of the message.
         * @return string
         */
        public function getResponseStatus()
        {

        }

        /**
         * Set the response status phrase.
         * @param $response_status
         * @return Message
         */
        public function setResponseStatus($response_status)
        {

        }

        /**
         * Retrieve the request method of the message.
         * @return string
         */
        public function getRequestMethod()
        {

        }

        /**
         * Set the request method of the message.
         * @param string $request_method
         * @return Message
         */
        public function setRequestMethod($request_method)
        {
        }

        /**
         * Retrieve the request URL of the message.
         * @return string
         */
        public function getRequestUrl()
        {

        }

        /**
         * Set the request URL of the message.
         * @param string $url
         * @return Message
         */
        public function setRequestUrl($url)
        {

        }

        /**
         * Retrieve the HTTP protocol version of the message.
         * @return string
         */
        public function getHttpVersion()
        {
        }

        /**
         * Set the HTTP protocol version of the message.
         * @param string $http_version
         * @return Message
         */
        public function setHttpVersion($http_version)
        {

        }

        /**
         * Retrieve any parent message.
         * @return Message
         */
        public function getParentMessage()
        {

        }

        /**
         * Retrieve the message serialized to a string.
         * @param bool $include_parent
         * @return string
         */
        public function toString($include_parent = false)
        {

        }

        /**
         * Stream the message through a callback.
         * @param callback $callback
         * @return Message
         */
        public function toCallback($callback, $offset = 0, $maxlen = 0)
        {

        }

        /**
         * Stream the message into stream $stream, starting from $offset, streaming $maxlen at most.
         * @param resource $stream
         * @return Message
         */
        public function toStream($stream)
        {

        }

        /**
         * Implements Serializable.
         */
        public function serialize()
        {

        }

        /**
         * @param string $serialized
         *
         */
        public function unserialize($serialized)
        {

        }

        /**
         * Implements Iterator.
         */
        public function rewind()
        {

        }

        /**
         * Implements Iterator.
         * @return bool
         */
        public function valid()
        {

        }

        /**
         * Implements Iterator.
         * @return int
         */
        public function key()
        {

        }

        /**
         * Implements Iterator.
         */
        public function next()
        {

        }

        /**
         * Prepend message(s) $message to this message, or the top most message of this message chain.
         * @param Message $message
         * @param bool $top
         */
        public function prepend(Message $message, $top = true)
        {

        }

        /**
         * Reverse the message chain and return the former top-most message.
         * @return Message
         */
        public function reverse()
        {

        }

        /**
         * Check whether this message is a multipart message based on it’s content type.
         * @param string|null $boundary
         * @return bool
         */
        public function isMultipart(&$boundary = null)
        {

        }

        /**
         * Splits the body of a multipart message.
         * @return Message
         */
        public function splitMultipartBody()
        {

        }
    }
}
