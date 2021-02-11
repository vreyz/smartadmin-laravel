<div class="panel-footer">

    {{ csrf_field() }}

    @if(Admin::Themes('adminlte'))
    <div class="col-md-{{$width['label']}}">
    </div>
    @endif

    <div class="col-md-{{$width['field']}}">

        @if(in_array('submit', $buttons))
        <div class="btn-group float-right">
            <button type="submit" class="btn btn-primary"><i class="fal fa fa-save"></i> {{ trans('admin.submit') }}</button>
        </div>

        @foreach($submit_redirects as $value => $redirect)
            @if(in_array($redirect, $checkboxes))
            <label class="float-right" style="margin: 5px 10px 0 0;">
                <input type="checkbox" class="after-submit" name="after-save" value="{{ $value }}" {{ ($default_check == $redirect) ? 'checked' : '' }}> {{ trans("admin.{$redirect}") }}
            </label>
            @endif
        @endforeach

        @endif

        @if(in_array('reset', $buttons))
        <div class="btn-group float-left">
            <button type="reset" class="btn btn-warning"><i class="fal fa fa-retweet"></i> {{ trans('admin.reset') }}</button>
        </div>
        @endif
    </div>
</div>
