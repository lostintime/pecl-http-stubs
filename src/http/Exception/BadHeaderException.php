<?php

namespace http\Exception {

    use http\Exception;

    /**
     * A bad HTTP header was encountered.
     * @package http\Exception
     */
    class BadHeaderException extends \DomainException implements Exception
    {

    }
}
