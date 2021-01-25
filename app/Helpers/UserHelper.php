<?php


namespace App\Helpers;


class UserHelper
{
    /**
     * @param string|null $userValue
     * @return bool
     */
    public static function isAvailableProperty(string $userValue = null): bool
    {
        if (isset($userValue)) {
            $userValue = true;
        } else {
            $userValue = false;
        }
        return $userValue;
    }
}
