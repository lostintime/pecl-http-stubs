<?php

namespace http\Exception {

    use http\Exception;

    /**
     * A bad conversion (e.g. character conversion) was encountered.
     * @package http\Exception
     */
    class BadConversionException extends \DomainException implements Exception
    {

    }
}
