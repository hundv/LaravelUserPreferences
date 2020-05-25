<?php

namespace HundV\LaravelUserPreferences;

use Illuminate\Support\Facades\Facade;

class UserPreferencesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'user-preferences';
    }
}