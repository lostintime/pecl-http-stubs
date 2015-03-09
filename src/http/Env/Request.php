<?php

namespace http\Env {

    use http\Message;

    /**
     * The http\Env\Request class' instances represent the server’s current HTTP request.
     * See http\Message for inherited members.
     * @package http\Env
     */
    class Request extends Message implements \Iterator, \Serializable, \Countable
    {
        /** @var \http\QueryString */
        protected $query;
        /** @var \http\QueryString */
        protected $form;
        /** @var array */
        protected $files;
        /** @var array */
        protected $cookie;

        /**
         * Create an instance of the server’s current HTTP request.
         */
        public function __construct()
        {

        }

        /**
         * Retrieve an URL query value ($_GET).
         * @version >= 2.2.0
         * @param string|null $name
         * @param mixed|null $type
         * @param mixed|null $defval
         * @param bool $delete
         * @return mixed
         */
        public function getCookie($name = null, $type = null, $defval = null, $delete = false)
        {

        }

        /**
         * Retrieve the uploaded files list ($_FILES).
         * @return array
         */
        public function getFiles()
        {

        }

        /**
         * Retrieve a form value ($_POST).
         * @param string|null $name
         * @param mixed|null $type
         * @param mixed|null $defval
         * @param bool $delete
         * @return mixed
         */
        public function getForm($name = null, $type = null, $defval = null, $delete = false)
        {

        }

        /**
         * @param string|null $name
         * @param mixed|null $type
         * @param mixed|null $defval
         * @param bool $delete
         * @return mixed
         */
        public function getQuery($name = null, $type = null, $defval = null, $delete = false)
        {

        }
    }
}
