<?php


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
