<?php

namespace App\Helpers;

use App\Models\About;

class SiteHelper
{
    public static function aboutUs()
    {
        return About::first();
    }
}
