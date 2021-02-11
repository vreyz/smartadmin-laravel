<form {!! $attributes !!}>
    <div class="box-body fields-group">

        @foreach($fields as $field)
            {!! $field->render() !!}
        @endforeach

    </div>

    @if ($method != 'GET')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @endif

    <!-- /.box-body -->
    @if(count($buttons) > 0)
    <div class="panel-footer">
        @if(\Vreyz\Admin\Admin::Themes('adminlte'))
        <div class="col-md-{{$width['label']}}"></div>
        @endif
        <div class="col-md-{{$width['field']}}">
            @if(in_array('reset', $buttons))
            <div class="btn-group float-left">
                <button type="reset" class="btn btn-warning float-right"><i class="fal fa-retweet"></i> {{ trans('admin.reset') }}</button>
            </div>
            @endif

            @if(in_array('submit', $buttons))
            <div class="btn-group float-right">
                <button type="submit" class="btn btn-info float-right"><i class="fal fa-save"></i> {{ trans('admin.submit') }}</button>
            </div>
            @endif
        </div>
    </div>
    @endif
</form>
