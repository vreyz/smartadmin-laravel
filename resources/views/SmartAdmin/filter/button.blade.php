<h2>
<div class="btn-group-toggle" style="margin-right: 5px;" data-toggle="buttons">
    <label class="btn btn-sm btn-primary {{ $btn_class }} {{ $expand ? 'active' : '' }}" title="{{ trans('admin.filter') }}">
        <input class="{{ $btn_class }} " type="checkbox"><i class="fal fa-filter"></i><span class="hidden-xs-down">&nbsp;&nbsp;{{ trans('admin.filter') }}</span>
    </label>

    @if($scopes->isNotEmpty())
    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">

        <span>{{ $label }}</span>
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
        @foreach($scopes as $scope)
            {!! $scope->render() !!}
        @endforeach
        <li role="separator" class="divider"></li>
        <li><a href="{{ $cancel }}">{{ trans('admin.cancel') }}</a></li>
    </ul>
    @endif
</div>
</h2>
<script>
var $btn = $('.{{ $btn_class }}');
var $filter = $('#{{ $filter_id }}');

$btn.unbind('click').click(function (e) {
    //alert("ax");
    if ($filter.is(':visible')) {
        $filter.addClass('d-none');
    } else {
        $filter.removeClass('d-none');
    }
});
</script>
