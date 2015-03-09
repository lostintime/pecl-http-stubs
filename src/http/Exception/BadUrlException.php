<?php

namespace http\Exception {
    
    use http\Exception;

    /**
     * A bad HTTP URL was encountered.
     * @package http\Exception
     */
    class BadUrlException extends \DomainException implements Exception
    {

    }
}
