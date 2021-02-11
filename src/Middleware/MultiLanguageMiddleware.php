<?php

namespace Vreyz\Admin\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class MultiLanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        $languages = config('admin.multilanguage.languages');
        $cookie_name = config('admin.multilanguage.cookie-name', 'locale');

        if (Cookie::has($cookie_name) && array_key_exists(Cookie::get($cookie_name), $languages)) {
            App::setLocale(Cookie::get($cookie_name));
        } else {
            $default = config('admin.multilanguage.default');
            App::setLocale($default);
        }
        return $next($request);
    }
}
