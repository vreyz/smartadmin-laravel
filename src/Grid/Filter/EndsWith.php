<?php

namespace Vreyz\Admin\Grid\Filter;

class EndsWith extends Like
{
    protected $exprFormat = '%{value}';
}
