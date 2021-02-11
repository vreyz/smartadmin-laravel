<?php

namespace Vreyz\Admin\Widgets;

use Illuminate\Contracts\Support\Renderable;

class PanelBox extends Widget implements Renderable
{
    /**
     * @var string
     */
    protected $view = 'admin::widgets.panel_box';

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $content = 'here is the panel content.';

    /**
     * @var string
     */
    protected $footer = '';

    /**
     * @var array
     */
    protected $tools = [];

    /**
     * @var string
     */
    protected $script;

    /**
     * panel constructor.
     *
     * @param string $title
     * @param string $content
     */
    public function __construct($title = '', $content = '', $footer = '')
    {
        if ($title) {
            $this->title($title);
        }

        if ($content) {
            $this->content($content);
        }

        if ($footer) {
            $this->footer($footer);
        }

        $this->class('panel');
    }

    /**
     * Set panel content.
     *
     * @param string $content
     *
     * @return $this
     */
    public function content($content)
    {
        if ($content instanceof Renderable) {
            $this->content = $content->render();
        } else {
            $this->content = (string) $content;
        }

        return $this;
    }

    /**
     * Set panel footer.
     *
     * @param string $footer
     *
     * @return $this
     */
    public function footer($footer)
    {
        if ($footer instanceof Renderable) {
            $this->footer = $footer->render();
        } else {
            $this->footer = (string) $footer;
        }

        return $this;
    }

    /**
     * Set panel title.
     *
     * @param string $title
     *
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set panel as collapsable.
     *
     * @return $this
     */
    public function collapsable()
    {
        $this->tools[] =
            '<button class="btn btn-panel-tool" data-widget="collapse"><i class="fal fa-minus"></i></button>';

        return $this;
    }

    /**
     *  Set panel body scrollable.
     *
     * @param array $options
     *
     * @return $this
     */
    public function scrollable($options = [], $nodeSelector = '')
    {
        $this->id = uniqid('panel-slim-scroll-');
        $scrollOptions = json_encode($options);
        $nodeSelector = $nodeSelector ?: '.panel-body';

        $this->script = <<<SCRIPT
$("#{$this->id} {$nodeSelector}").slimScroll({$scrollOptions});
SCRIPT;

        return $this;
    }

    /**
     * Set panel as removable.
     *
     * @return $this
     */
    public function removable()
    {
        $this->tools[] =
            '<button class="btn btn-panel-tool" data-widget="remove"><i class="fal fa-times"></i></button>';

        return $this;
    }

    /**
     * Set panel style.
     *
     * @param string $styles
     *
     * @return $this|panel
     */
    public function style($styles)
    {
        if (is_string($styles)) {
            return $this->style([$styles]);
        }

        $styles = array_map(function ($style) {
            return 'panel-'.$style;
        }, $styles);

        $this->class = $this->class.' '.implode(' ', $styles);

        return $this;
    }

    /**
     * Add `panel-solid` class to panel.
     *
     * @return $this
     */
    public function solid()
    {
        return $this->style('solid');
    }

    /**
     * Variables in view.
     *
     * @return array
     */
    protected function variables()
    {
        return [
            'title'      => $this->title,
            'content'    => $this->content,
            'footer'     => $this->footer,
            'tools'      => $this->tools,
            'attributes' => $this->formatAttributes(),
            'script'     => $this->script,
        ];
    }

    /**
     * Render panel.
     *
     * @return string
     */
    public function render()
    {
        return view($this->view, $this->variables())->render();
    }
}
