<?php

namespace Core;

class validationException extends \Exception
{
    public readonly array $errors; 
    public readonly array $old; 

    public static function throw($erors, $old)
    {
        $instance = new static;

        $instance->errors = $errors;
        $instance->old = $old;

        throw $instance;

    }

}