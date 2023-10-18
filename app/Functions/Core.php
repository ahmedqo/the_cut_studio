<?php

namespace App\Functions;

class Core
{
    public static function lang($lang = 'en')
    {
        return app()->getLocale() == $lang;
    }

    public static function gender()
    {
        return ['male', 'female'];
    }
}
