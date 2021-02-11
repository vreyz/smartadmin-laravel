<div class="panel panel-sortable">
        <div class="panel-hdr" role="heading">
            @if ( $grid->showTools() )
                <div class="float-left">
                    {!! $grid->renderHeaderTools() !!}
                </div>
            @endif
            <h2> @if(isset($title)){{ $title }}@endif </h2>
            @if ($grid->showExportBtn() || $grid->showCreateBtn() )

                {!! $grid->renderCreateButton() !!}
                {!! $grid->renderExportButton() !!}
                {!! $grid->renderColumnSelector() !!}

            @endif
        </div>
    <div class="panel-container show">
        {!! $grid->renderFilter() !!}

        {!! $grid->renderHeader() !!}
        <div class="panel-content">
            <div class="panel-tag">
                This page is for managing user whom can access this aplications {{config('admin.name')}}.
            </div>
            <table id="{{ $grid->tableID }}" class="table table-bordered table-hover table-striped w-100 grid-table">
                <thead>
                <tr>
                    @foreach($grid->visibleColumns() as $column)
                        <th {!! $column->formatHtmlAttributes() !!}>{!! $column->getLabel() !!}{!! $column->renderHeader() !!}</th>
                    @endforeach
                </tr>
                </thead>

                @if ($grid->hasQuickCreate())
                    {!! $grid->renderQuickCreate() !!}
                @endif

                <tbody>

                @if($grid->rows()->isEmpty() && $grid->showDefineEmptyPage())
                    @include('admin::grid.empty-grid')
                @endif

                @foreach($grid->rows() as $row)
                    <tr {!! $row->getRowAttributes() !!}>
                        @foreach($grid->visibleColumnNames() as $name)
                            <td {!! $row->getColumnAttributes($name) !!}>
                                {!! $row->column($name) !!}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>

                {!! $grid->renderTotalRow() !!}

            </table>
    </div>

        {!! $grid->renderFooter() !!}

        <div class="clearfix ml-3 mr-3">
            {!! $grid->paginator() !!}
        </div>
        <!-- /.box-body -->
</div>
</div>

