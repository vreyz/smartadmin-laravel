<?php

namespace Vreyz\Admin\Traits;

use Vreyz\Admin\Admin;

trait HasAssets
{
    /**
     * @var array
     */
    public static $script = [];

    /**
     * @var array
     */
    public static $deferredScript = [];

    /**
     * @var array
     */
    public static $style = [];

    /**
     * @var array
     */
    public static $css = [];

    /**
     * @var array
     */
    public static $js = [];

    /**
     * @var array
     */
    public static $html = [];

    /**
     * @var array
     */
    public static $headerJs = [];

    /**
     * @var string
     */
    public static $manifest;

    /**
     * @var array
     */
    public static $manifestData = [];

    /**
     * @var array
     */
    public static $min = [];

    /**
     * @var array
     */
    public static $baseCss = [];

    /**
     * @var array
     */
    public static $baseJs = [];

    /**
     * @var string
     */
    public static $jQuery;

    /**
     * @var array
     */
    public static $minifyIgnores = [];

    /**
     * HasAssets constructor.
     */
    public function __construct()
    {
        if (Admin::Themes('adminlte')) {
            self::$jQuery = 'vendor/smartadmin-laravel/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js';
            self::$manifest = 'vendor/smartadmin-laravel/minify-manifest.json';
            self::$min = [
                'js' => 'vendor/smartadmin-laravel/laravel-admin/laravel-admin.min.js',
                'css' => 'vendor/smartadmin-laravel/laravel-admin/laravel-admin.min.css',
            ];
            self::$baseCss = [
                'vendor/smartadmin-laravel/AdminLTE/bootstrap/css/bootstrap.min.css',
                'vendor/smartadmin-laravel/font-awesome/css/font-awesome.min.css',
                'vendor/smartadmin-laravel/laravel-admin/laravel-admin.css',
                'vendor/smartadmin-laravel/nprogress/nprogress.css',
                'vendor/smartadmin-laravel/sweetalert2/dist/sweetalert2.css',
                'vendor/smartadmin-laravel/nestable/nestable.css',
                'vendor/smartadmin-laravel/toastr/build/toastr.min.css',
                'vendor/smartadmin-laravel/bootstrap3-editable/css/bootstrap-editable.css',
                'vendor/smartadmin-laravel/google-fonts/fonts.css',
                'vendor/smartadmin-laravel/AdminLTE/dist/css/AdminLTE.min.css',
            ];
            self::$baseJs = [
                'vendor/smartadmin-laravel/AdminLTE/bootstrap/js/bootstrap.min.js',
                'vendor/smartadmin-laravel/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
                'vendor/smartadmin-laravel/AdminLTE/dist/js/app.min.js',
                'vendor/smartadmin-laravel/jquery-pjax/jquery.pjax.js',
                'vendor/smartadmin-laravel/nprogress/nprogress.js',
                'vendor/smartadmin-laravel/nestable/jquery.nestable.js',
                'vendor/smartadmin-laravel/toastr/build/toastr.min.js',
                'vendor/smartadmin-laravel/bootstrap3-editable/js/bootstrap-editable.min.js',
                'vendor/smartadmin-laravel/sweetalert2/dist/sweetalert2.min.js',
                'vendor/smartadmin-laravel/laravel-admin/laravel-admin.js',
            ];
        }   else {

            self::$jQuery = 'vendor/smartadmin-laravel/SmartAdmin/js/jquery/jQuery-3.5.1.min.js';
            self::$manifest = 'vendor/smartadmin-laravel/minify-manifest.json';
            self::$baseCss = [
               'vendor/smartadmin-laravel/SmartAdmin/css/notifications/toastr/toastr.css',
                'vendor/smartadmin-laravel/SmartAdmin/css/notifications/sweetalert2/sweetalert2.bundle.css',
                'vendor/smartadmin-laravel/nprogress/nprogress.css',                //untuk mini progress pjax call di atas content (terpisah dari pace)
                'vendor/smartadmin-laravel/SmartAdmin/css/fa-all.css',
                'vendor/smartadmin-laravel/SmartAdmin/css/asem.css',   //all fontawesome css
                /*
                 'vendor/smartadmin-laravel/laravel-admin/laravel-admin.css',
                 'vendor/smartadmin-laravel/sweetalert2/dist/sweetalert2.css',    // sudah ada di atas
                'vendor/smartadmin-laravel/toastr/build/toastr.min.css',            // sudah ada di vendor.bulde.css
                'vendor/smartadmin-laravel/bootstrap3-editable/css/bootstrap-editable.css',
                'vendor/smartadmin-laravel/google-fonts/fonts.css',
                'vendor/smartadmin-laravel/nestable/nestable.css',                  // for menu listing, sudah tidak perlu untuk smartadmin
                'vendor/smartadmin-laravel/SmartAdmin/css/fa-brands.css',
                'vendor/smartadmin-laravel/SmartAdmin/css/fa-duotone.css',
                'vendor/smartadmin-laravel/SmartAdmin/css/fa-regular.css',
                'vendor/smartadmin-laravel/SmartAdmin/css/fa-solid.css',
                */


          ];
            self::$baseJs = [
                'vendor/smartadmin-laravel/SmartAdmin/js/jquery-migrate-3.0.0.min.js',
                'vendor/smartadmin-laravel/SmartAdmin/js/notifications/toastr/toastr.js',
                'vendor/smartadmin-laravel/jquery-pjax/jquery.pjax-2.0.1.js',
                'vendor/smartadmin-laravel/nprogress/nprogress.js', //untuk mini progress pjax call di atas content (terpisah dari pace)
                'vendor/smartadmin-laravel/nestable/jquery.nestable.js',                         //for menu listing
                'vendor/smartadmin-laravel/SmartAdmin/js/notifications/sweetalert2/sweetalert2.bundle.js',
                'vendor/smartadmin-laravel/bootstrap3-editable/js/bootstrap-editable.min.js',
                'vendor/smartadmin-laravel/laravel-admin/laravel-admin.js',
                'vendor/smartadmin-laravel/SmartAdmin/js/asem.js',
                /*
                 * 'vendor/smartadmin-laravel/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js', // sudah ada di vendor.bulde.js
                 * 'vendor/smartadmin-laravel/sweetalert2/dist/sweetalert2.min.js',                 // sudah ada di atas, terbaru
                 * 'vendor/smartadmin-laravel/nestable/jquery.nestable.js',                         //for menu listing, move it to class
                */

          ];
            self::$min = [
                'js' => 'vendor/smartadmin-laravel/laravel-admin/laravel-admin.min.js',
                'css' => 'vendor/smartadmin-laravel/laravel-admin/laravel-admin.min.css',
            ];
        }
    }

    /**
     * Add css or get all css.
     *
     * @param null $css
     * @param bool $minify
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function css($css = null, $minify = true)
    {
        static::ignoreMinify($css, $minify);

        if (!is_null($css)) {
            return self::$css = array_merge(self::$css, (array) $css);
        }

        if (!$css = static::getMinifiedCss()) {
            $css = array_merge(static::$css, static::baseCss());
        }

        $css = array_filter(array_unique($css));
        //dd($css);
        return view('admin::partials.css', compact('css'));
    }

    /**
     * @param null $css
     * @param bool $minify
     *
     * @return array|null
     */
    public static function baseCss($css = null, $minify = true)
    {
        if (strtolower(config('admin.themes.theme')) == 'adminlte')
        {
            static::ignoreMinify($css, $minify);

            if (!is_null($css)) {
                return static::$baseCss = $css;
            }

            $skin = config('admin.themes.skin', 'skin-black');

            array_unshift(static::$baseCss, "vendor/smartadmin-laravel/AdminLTE/dist/css/skins/{$skin}.min.css");

        }
        return static::$baseCss;
    }

    /**
     * Add js or get all js.
     *
     * @param null $js
     * @param bool $minify
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function js($js = null, $minify = true)
    {
        static::ignoreMinify($js, $minify);

        if (!is_null($js)) {
            return self::$js = array_merge(self::$js, (array) $js);
        }

        if (!$js = static::getMinifiedJs()) {
            $js = array_merge(static::baseJs(), static::$js);
        }

        $js = array_filter(array_unique($js));

        return view('admin::partials.js', compact('js'));
    }

    /**
     * Add js or get all js.
     *
     * @param null $js
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function headerJs($js = null)
    {
        if (!is_null($js)) {
            return self::$headerJs = array_merge(self::$headerJs, (array) $js);
        }

        return view('admin::partials.js', ['js' => array_unique(static::$headerJs)]);
    }

    /**
     * @param null $js
     * @param bool $minify
     *
     * @return array|null
     */
    public static function baseJs($js = null, $minify = true)
    {
        static::ignoreMinify($js, $minify);

        if (!is_null($js)) {
            return static::$baseJs = $js;
        }

        return static::$baseJs;
    }

    /**
     * @param string $assets
     * @param bool   $ignore
     */
    public static function ignoreMinify($assets, $ignore = true)
    {
        if (!$ignore) {
            static::$minifyIgnores[] = $assets;
        }
    }

    /**
     * @param string $script
     * @param bool   $deferred
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function script($script = '', $deferred = false)
    {
        if (!empty($script)) {
            if ($deferred) {
                return self::$deferredScript = array_merge(self::$deferredScript, (array) $script);
            }

            return self::$script = array_merge(self::$script, (array) $script);
        }

        $script = collect(static::$script)
            ->merge(static::$deferredScript)
            ->unique()
            ->map(function ($line) {
                return $line;
                //@see https://stackoverflow.com/questions/19509863/how-to-remove-js-comments-using-php
                $pattern = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\')\/\/.*))/';
                $line = preg_replace($pattern, '', $line);

                return preg_replace('/\s+/', ' ', $line);
            });

        return view('admin::partials.script', compact('script'));
    }

    /**
     * @param string $style
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function style($style = '')
    {
        if (!empty($style)) {
            return self::$style = array_merge(self::$style, (array) $style);
        }

        $style = collect(static::$style)
            ->unique()
            ->map(function ($line) {
                return preg_replace('/\s+/', ' ', $line);
            });

        return view('admin::partials.style', compact('style'));
    }

    /**
     * @param string $html
     *
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function html($html = '')
    {
        if (!empty($html)) {
            return self::$html = array_merge(self::$html, (array) $html);
        }

        return view('admin::partials.html', ['html' => array_unique(self::$html)]);
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected static function getManifestData($key)
    {

        if (!empty(static::$manifestData)) {
            return static::$manifestData[$key];
        }

        static::$manifestData = json_decode(
            file_get_contents(public_path(static::$manifest)),
            true
        );

        return static::$manifestData[$key];
    }

    /**
     * @return bool|mixed
     */
    protected static function getMinifiedCss()
    {
        if (!config('admin.minify_assets') || !file_exists(public_path(static::$manifest))) {
            return false;
        }

        return static::getManifestData('css');
    }

    /**
     * @return bool|mixed
     */
    protected static function getMinifiedJs()
    {
        if (!config('admin.minify_assets') || !file_exists(public_path(static::$manifest))) {
            return false;
        }

        return static::getManifestData('js');
    }

    /**
     * @return string
     */
    public function jQuery()
    {
        return admin_asset(static::$jQuery);
    }

    /**
     * @param $component
     */
    public static function component($component, $data = [])
    {
        $string = view($component, $data)->render();

        $dom = new \DOMDocument();

        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" ?>'.$string);
        libxml_use_internal_errors(false);

        if ($head = $dom->getElementsByTagName('head')->item(0)) {
            foreach ($head->childNodes as $child) {
                if ($child instanceof \DOMElement) {
                    if ($child->tagName == 'style' && !empty($child->nodeValue)) {
                        static::style($child->nodeValue);
                        continue;
                    }

                    if ($child->tagName == 'link' && $child->hasAttribute('href')) {
                        static::css($child->getAttribute('href'));
                    }

                    if ($child->tagName == 'script') {
                        if ($child->hasAttribute('src')) {
                            static::js($child->getAttribute('src'));
                        } else {
                            static::script(';(function () {'.$child->nodeValue.'})();');
                        }

                        continue;
                    }
                }
            }
        }

        $render = '';

        if ($body = $dom->getElementsByTagName('body')->item(0)) {
            foreach ($body->childNodes as $child) {
                if ($child instanceof \DOMElement) {
                    if ($child->tagName == 'style' && !empty($child->nodeValue)) {
                        static::style($child->nodeValue);
                        continue;
                    }

                    if ($child->tagName == 'script' && !empty($child->nodeValue)) {
                        static::script(';(function () {'.$child->nodeValue.'})();');
                        continue;
                    }

                    if ($child->tagName == 'template') {
                        $html = '';
                        foreach ($child->childNodes as $childNode) {
                            $html .= $child->ownerDocument->saveHTML($childNode);
                        }
                        $html && static::html($html);
                        continue;
                    }
                }

                $render .= $body->ownerDocument->saveHTML($child);
            }
        }

        return trim($render);
    }
}
