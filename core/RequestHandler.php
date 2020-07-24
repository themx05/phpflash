<?php

namespace PhpFlash{
    /**
     * Defines common methods and properties of the request handlers.
     */
    interface RequestHandler{
        public function setNext(callable $handler);
        public function handle();
    }
}



?>