<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div class="input-group">

            @if ($prepend)
                <div class="input-group-prepend">
                    <span class="input-group-text">{!! $prepend !!}</span>
                </div>
            @endif

            <input {!! $attributes !!} />

            @if ($append)
                <div class="input-group-append">
                    <span class="input-group-text">{!! $append !!}</span>
                </div>
            @endif

            @isset($btn)
                <span class="input-group-btn">
                  {!! $btn !!}
                </span>
            @endisset

        </div>

        @include('admin::form.help-block')

    </div>
</div>
