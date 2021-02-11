<div class="panel-content {{ $expand?'':'d-none' }} filter-box" id="{{ $filterID }}">
    {{$expand}}
    <form action="{!! $action !!}" class="form-horizontal" pjax-container method="get">
        <div class="row">
            @foreach($layout->columns() as $column)
            <div class="col-md-{{ $column->width() }}">
                    <div class="fields-group">
                        @foreach($column->filters() as $filter)
                            {!! $filter->render() !!}
                        @endforeach
                    </div>
            </div>
            @endforeach
        </div>
        <!-- /.box-body -->

        <div class="mt-3">
            <div class="row">
                <div class="col-md-{{ $layout->columns()->first()->width() }}">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-group float-left">
                            <button class="btn btn-info submit btn-sm"><i
                                        class="falfa-search"></i>&nbsp;&nbsp;{{ trans('admin.search') }}</button>
                        </div>
                        <div class="btn-group float-left " style="margin-left: 10px;">
                            <a href="{!! $action !!}" class="btn btn-default btn-sm"><i
                                        class="falfa-undo"></i>&nbsp;&nbsp;{{ trans('admin.reset') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
