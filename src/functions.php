<?php

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

if (!function_exists('isUuid')) {
    function isUuid($value)
    {
        return Str::isUuid($value);
    }
}

if (!function_exists('isValidEmail')) {
    function isValidEmail($value)
    {
        $email = Str::lower($value);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}

if (!function_exists('isValidPassword')) {
    function isValidPassword($value)
    {
        return Str::length($value) >= 3;
    }
}

if (!function_exists('cryptPass')) {
    function cryptPass($password)
    {
        return Crypt::encrypt($password);
    }
}

if (!function_exists('decryptPass')) {
    function decryptPass($passwordCrypted)
    {
        return Crypt::decrypt($passwordCrypted);
    }
}

if (!function_exists('columns')) {
    function columns($class)
    {
        return (new $class())->getFillable();
    }
}

if (!function_exists('random10')) {
    function random10()
    {
        return Str::random(10);
    }
}
