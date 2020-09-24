<?php

namespace Encore\ChinaDistpicker;

use Encore\Admin\Table\Filter\Presenter\Presenter;

class FilterPresenter extends Presenter
{
    public function view() : string
    {
        return 'laravel-admin-china-distpicker::filter';
    }
}