<?php

namespace Shahmal1yev\EasyPay\Yigim\Helpers;

class Arr
{
    /**
     * Get a value from an array using "dot" notation
     *
     * @param array $array The array to search
     * @param string $keys The key to retrieve, with dot notation for nested keys
     * @return mixed The value if found, otherwise null
     */
    public static function get(array $array, string $keys): mixed
    {
        if (isset($array[$keys]))
            return $array[$keys];

        $segments = explode('.', $keys);

        foreach($segments as $segment)
        {
            if (! isset($array[$segment]))
                return null;

            $array = $array[$segment];
        }

        return $array;
    }
}