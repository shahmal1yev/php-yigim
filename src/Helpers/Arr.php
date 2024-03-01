<?php

namespace Shahmal1yev\EasyPay\Yigim\Helpers;

class Arr
{
    /**
     * Get a value from an array using "dot" notation
     *
     * @param array $array The array to search
     * @param string $keys The key to retrieve, with dot notation for nested keys
     * @param mixed $default (optional) The default value to return if the key is not found
     * @return mixed The value if found, otherwise the default value or null
     */
    public static function get(array $array, string $keys, mixed $default = null): mixed
    {
        if (isset($array[$keys]))
            return $array[$keys];

        $segments = explode('.', $keys);

        foreach($segments as $segment)
        {
            if (! self::exists($array, $segment))
                return $default;

            $array = $array[$segment];
        }

        return $array;
    }

    /**
     * Check if a key exists in an array
     *
     * @param mixed $array The array to check
     * @param string $key The key to check for existence
     * @return bool True if the key exists, otherwise false
     */
    public static function exists(mixed $array, string $keys): bool
    {
        if (! is_array($array))
            return false;

        if (! array_key_exists($keys, $array))
            return false;

        return true;
    }
}