<?php

namespace Vreyz\Admin\Grid\Exporters;

interface ExporterInterface
{
    /**
     * Export data from grid.
     *
     * @return mixed
     */
    public function export();
}
