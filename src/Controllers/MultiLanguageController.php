<?php

namespace Vreyz\Admin\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;


class MultiLanguageController extends Controller
{

    public function locale() {

        $locale = Request::input('locale');
        $languages = config('admin.multilanguage.languages');

        $cookie_name = config('admin.multilanguage.cookie-name', 'locale');
        if(array_key_exists($locale, $languages)) {

          return response('ok')->cookie($cookie_name, $locale);
        }
    }

}
