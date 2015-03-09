<?php


namespace http {

    use SplObjectStorage;
    use SplObserver;

    /**
     * The HTTP client. See http\Client\Curl’s options which is the only driver currently supported.
     * @package http
     */
    class Client
    {
        /**
         * @var bool
         */
        public $recordHistory = false;

        /**
         * Create a new HTTP client.
         * @param string|null $driver
         * @param string|null $persistent_handle_id
         */
        public function __construct($driver = null, $persistent_handle_id = null)
        {

        }

        /**
         * Add custom cookies.
         * @param array|null $cookies
         * @return Client
         */
        public function addCookies(array $cookies = null)
        {

        }

        /**
         * Add specific SSL options.
         * @param array|null $ssl_options
         * @return Client
         */
        public function addSslOptions(array $ssl_options = null)
        {
        }

        /**
         * Implements SplSubject. Attach another observer.
         * @param SplObserver $observer
         * @return Client
         */
        public function attach(SplObserver $observer)
        {

        }

        /**
         * Configure the client’s low level options.
         * @version >= 2.3.0
         * @param array $configuration
         * @return Client
         */
        public function configure(array $configuration)
        {

        }

        /**
         * Implements Countable. Retrieve the number of enqueued requests.
         * @return int
         */
        public function count()
        {

        }

        /**
         * Dequeue the http\Client\Request $request.
         * @param Client\Request $request
         * @return Client
         */
        public function dequeue(Client\Request $request)
        {

        }

        /**
         * Implements SplSubject. Detach $observer, which has been previously attached.
         * @param SplObserver $observer
         * @return Client
         */
        public function detach(SplObserver $observer)
        {

        }

        /**
         * Enable usage of an event library like libevent, which might improve performance with big socket sets.
         * @param bool $enable
         * @deprecated
         * @return Client
         */
        public function enableEvents($enable = true)
        {

        }

        /**
         * Enable sending pipelined requests to the same host if the driver supports it.
         * @param bool $enable
         * @deprecated
         * @return Client
         */
        public function enablePipelining($enable = true)
        {

        }

        /**
         * Add another http\Client\Request to the request queue.
         * @param Client\Request $request
         * @param callable $cb
         * @return Client
         */
        public function enqueue(Client\Request $request, callable $cb = null)
        {

        }

        /**
         * Get a list of available configuration options and their default values.
         * @version >= 2.3.0
         * @return array
         */
        public function getAvailableConfiguration()
        {

        }

        /**
         * List available drivers.
         * @return array
         */
        public static function getAvailableDrivers()
        {

        }

        /**
         * Retrieve a list of available request options and their default values.
         * @version >= 2.3.0
         * @return array
         */
        public function getAvailableOptions()
        {

        }

        /**
         * Get priorly set custom cookies.
         * @return array
         */
        public function getCookies()
        {

        }

        /**
         * Simply returns the http\Message chain representing the request/response history.
         * @return Message
         */
        public function getHistory()
        {

        }

        /**
         * Returns the SplObjectStorage holding attached observers.
         * @return SplObjectStorage
         */
        public function getObservers()
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
         * Retrieve the progress information for $request.
         * @param Client\Request $request
         * @return \stdClass
         */
        public function getProgressInfo(Client\Request $request)
        {

        }

        /**
         * Retrieve the corresponding response of an already finished request, or the last received response if $request
         * is not set.
         * @param Client\Request $request
         * @return Client\Response
         */
        public function getResponse(Client\Request $request = null)
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
         * Get transfer related information for a running or finished request.
         * @param Client\Request $request
         * @return \stdClass
         */
        public function getTransferInfo(Client\Request $request)
        {

        }

        /**
         * Implements SplSubject. Notify attached observers about progress with $request.
         * @param Client\Request $request
         * @param \stdClass $progress
         * @return Client
         */
        public function notify(Client\Request $request = null, \stdClass $progress = null)
        {

        }

        /**
         * Perform outstanding transfer actions.
         * @return bool
         */
        public function once()
        {

        }

        /**
         * Requeue an http\Client\Request.
         * @param Client\Request $request
         * @return Client
         */
        public function requeue(Client\Request $request)
        {

        }

        /**
         * Reset the client to the initial state.
         * @return Client
         */
        public function reset()
        {

        }

        /**
         * Send all enqueued requests.
         * @return Client
         */
        public function send()
        {

        }

        /**
         * Set custom cookies.
         * @param array $cookies
         * @return Client
         */
        public function setCookies(array $cookies = null)
        {

        }

        /**
         * Set client options.
         * @param array $options
         * @return Client
         */
        public function setOptions(array $options = null)
        {

        }

        /**
         * Specifically set SSL options.
         * @param array $ssl_options
         * @return Client
         */
        public function setSslOptions(array $ssl_options = null)
        {

        }

        /**
         * Wait for $timeout seconds for transfers to provide data.
         * @param float $timeout
         * @return bool
         */
        public function wait($timeout = 0.0)
        {

        }
    }
}
