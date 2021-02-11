{{-- this is for displaying disable field or display only--}}
<div class="{{$viewClass['form-group']}}">
    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        <div class="panel-disable">
            <!-- /.box-header -->
                <div class="panel-disable-field">
                {!! $value !!}&nbsp;
                </div>
            </div><!-- /.box-body -->

        @include('admin::form.help-block')

    </div>
</div>
