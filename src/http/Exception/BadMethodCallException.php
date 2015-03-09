<?php

namespace http\Exception {

    use http\Exception;

    /**
     * A method was called on an object, which was in an invalid or unexpected state.
     * @package http\Exception
     */
    class BadMethodCallException extends \BadMethodCallException implements Exception
    {

    }
}