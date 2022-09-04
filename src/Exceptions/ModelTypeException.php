<?php

namespace Ubmvn\Settings\Exceptions;

class ModelTypeException extends \Exception
{
    /**
     * Create invalid model type exception instance.
     *
     * @return \Ubmvn\Settings\Exceptions\ModelTypeException
     */
    public static function invalid()
    {
        return new self('Invalid model type is passed, it should be of type Illuminate\Database\Eloquent\Model');
    }
}
