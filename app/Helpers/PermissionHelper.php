<?php

namespace App\Helpers;

class PermissionHelper
{
    public static function can($permission): bool
    {
        return auth()->check() && auth()->user()->can($permission);
    }
}