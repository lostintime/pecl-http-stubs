<?php


namespace http\Message {

    use http\Message;

    class Body implements \Serializable
    {
        /**
         * Create a new message body, optionally referencing $stream.
         * @param resource|null $stream
         */
        public function __construct($stream = null)
        {

        }

        /**
         * String cast handler.
         * @return string
         */
        public function __toString()
        {

        }

        /**
         * Retrieve the message body serialized to a string.
         * @return string
         */
        public function toString()
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
         * Stream the message body into antother stream $stream, starting from $offset, streaming $maxlen at most.
         * @param resource $stream
         * @param int $offset
         * @param int $maxlen
         * @return Body
         */
        public function toStream($stream, $offset = 0, $maxlen = 0)
        {

        }

        /**
         * Stream the message body through a callback.
         * @param callable $callback
         * @param int $offset
         * @param int $maxlen
         * @return Body
         */
        public function toCallback($callback, $offset = 0, $maxlen = 0)
        {

        }

        /**
         * Retrieve the underlying stream resource
         * @return resource
         */
        public function getResource()
        {

        }

        /**
         * Retrieve any boundary of the message body.
         * @return string
         */
        public function getBoundary()
        {

        }

        /**
         * Append plain bytes to the message body.
         * @param string $string
         * @return Body
         */
        public function append($string)
        {

        }

        /**
         * Add form fields and files to the message body.
         * @param array $fields
         * @param array $files
         * @return Body
         */
        public function addForm(array $fields = null, array $files = null)
        {

        }

        /**
         * Add a part to a multipart body.
         * @param Message $message
         * @return Body
         */
        public function addPart(Message $message)
        {

        }

        /**
         * Retrieve the ETag of the body.
         * @return string
         */
        public function etag()
        {

        }

        /**
         * Stat size, atime, mtime and/or ctime.
         * @param string|null $field
         * @return mixed
         */
        public function stat($field = null)
        {

        }
    }
}
