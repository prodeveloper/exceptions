<?php

namespace Chencha\Exceptions;

use Exception;

/**
 * Provides an exception for missing services
 *
 * @author jacob
 */
class ValidationException extends Exception {

    public function __construct($errors, $message = '', $code = 0, $previous = null) {
        $this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }

    function getErrors() {
        return $this->errors;
    }

}
