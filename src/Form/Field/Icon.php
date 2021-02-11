<?php

namespace Vreyz\Admin\Form\Field;

use Vreyz\Admin\Admin;

class Icon extends Text
{
    protected $default = 'fa-pencil';

    protected static $css = [
        /*'/vendor/smartadmin-laravel/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css',*/
        '/vendor/smartadmin-laravel/smartadmin/css/fontawesome-iconpicker/fontawesome-iconpicker.min.css',
    ];

    protected static $js = [
        /*'/vendor/smartadmin-laravel/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js',*/
        '/vendor/smartadmin-laravel/smartadmin/js/fontawesome-iconpicker/fontawesome-iconpicker.min.js',
    ];

    public function render()
    {
        $this->script = <<<EOT

$('{$this->getElementClassSelector()}').iconpicker({placement:'bottomLeft',animation:false});

EOT;
        if (Admin::Themes('adminlte')) {
            $this->prepend('<i class="fa fa-pencil fa-fw"></i>')
                ->defaultAttribute('style', 'width: 140px');
        } else {
            $this->prepend('<i class="fal fa-pencil fa-fw"></i>')
                ->defaultAttribute('style', 'width: 140px');
        }

        return parent::render();
    }
}
