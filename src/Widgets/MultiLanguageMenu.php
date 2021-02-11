<?php


namespace Vreyz\Admin\Widgets;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Cookie;

class MultiLanguageMenu implements Renderable
{

    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */
    public function render()
    {
        $current = config('admin.multilanguage.default');
        $cookie_name = config('admin.multilanguage.cookie-name', 'locale');
        if(Cookie::has($cookie_name)) {
            $current = Cookie::get($cookie_name);
        }
        $languages = config("admin.multilanguage.languages");
        return view("admin::multilanguage-menu", compact('languages', 'current'))->render();
    }
}
