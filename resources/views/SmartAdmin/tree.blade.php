<div class="panel panel-sortable">

    <div class="panel-hdr"  role="heading">
        <h2>
        <div class="btn-group text-white">
            <a class="btn btn-primary btn-sm {{ $id }}-tree-tools" data-action="expand" title="{{ trans('admin.expand') }}">
                <i class="fal fa-plus-circle"></i>&nbsp;{{ trans('admin.expand') }}
            </a>
            <a class="btn btn-secondary btn-sm {{ $id }}-tree-tools" data-action="collapse" title="{{ trans('admin.collapse') }}">
                <i class="fal fa-minus-circle"></i>&nbsp;{{ trans('admin.collapse') }}
            </a>
        </div>

        @if($useSave)
        <div class="btn-group ml-2 text-white">
            <a class="btn btn-info btn-sm {{ $id }}-save" title="{{ trans('admin.save') }}"><i class="fal fa-save"></i><span class="hidden-xs">&nbsp;{{ trans('admin.save') }}</span></a>
        </div>
        @endif

        @if($useRefresh)
        <div class="btn-group ml-2 text-white">
            <a class="btn btn-warning btn-sm {{ $id }}-refresh" title="{{ trans('admin.refresh') }}"><i class="fal fa-sync"></i><span class="hidden-xs">&nbsp;{{ trans('admin.refresh') }}</span></a>
        </div>
        @endif

        <div class="btn-group ml-2 text-white">
            {!! $tools !!}
        </div>

        @if($useCreate)
        <div class="btn-group float-right text-white">
            <a class="btn btn-success btn-sm" href="{{ url($path) }}/create"><i class="fal fa-save"></i><span class="hidden-xs">&nbsp;{{ trans('admin.new') }}</span></a>
        </div>
        @endif
        </h2>
    </div>
    <!-- /.panel-hdr -->
    <div class="panel-container show">
    <div class="panel-content table-responsive no-padding">
        <div class="panel-tag">
            TIPS!!: You can drag and drop menu.
        </div>
        <div class="dd" id="{{ $id }}">
            <ol class="dd-list">
                @each($branchView, $items, 'branch')
            </ol>
        </div>
    </div>
    <!-- /.box-body -->
    </div>
</div>
