<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ClearCacheController extends Controller
{
    public function clear()
    {
        Artisan::call('optimize');
        Artisan::call('cache:clear');
        echo "Cache cleared<br>";

        Artisan::call('view:clear');
        echo "View cleared<br>";

        Artisan::call('config:cache');
        echo "Config cleared<br>";

        return redirect()->route('login');
    }
}
