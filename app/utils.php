<?php

use Carbon\Carbon;


if (!function_exists('phoneNumberMask')) {
    function phoneNumberMask(?string $value, $default = null): ?string
    {
        if (!trim($value)) {
            return $default;
        }

        if (!preg_match('/^(\d{3})(\d{3})(\d{4})$/', $value, $matches)) {
            return $value;
        }

        return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
    }
}

if (!function_exists('removePhoneNumberMask')) {
    function removePhoneNumberMask(?string $value): ?string
    {
        if (!trim($value)) {
            return null;
        }

        return preg_replace('/\D/', '', $value);
    }
}

if (!function_exists('removePostalCodeMask')) {
    function removePostalCodeMask(?string $value): ?string
    {
        return removePhoneNumberMask($value);
    }
}

if (!function_exists('removePercentageMask')) {
    function removePercentageMask(?string $value): ?string
    {
        return (int)removePhoneNumberMask($value);
    }
}

if (!function_exists('clearString')) {
    function clearString(?string $value, $default = null, bool $lower = false): ?string
    {
        $clean = trim($value);
        if ($lower) {
            $clean = strtolower($value);
        }
        if (!$clean) {
            return $default;
        }

        return $clean;
    }
}


if (!function_exists('__debug')) {
    function __debug($message, array $context = []): void
    {
        if (!app()->environment('local')) {
            return;
        }

        $data = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        if (count($data) !== 2) {
            logger()->debug($message, $context);
        }

        $fileParts = pathinfo($data[0]['file']);
        $file      = $fileParts['filename'];
        $method    = $data[1]['function'];
        $line      = $data[0]['line'];

        logger()->debug("{$file}::{$method}:{$line} - {$message}", $context);
    }
}


if (!function_exists('carbonParse')) {
    function carbonParse(string $date): Carbon
    {
        return Carbon::parse($date);
    }
}

