<div class="input-group input-group-sm">
    @if($group)
    <div class="input-group-btn">
        <input type="hidden" name="{{ $id }}_group" class="{{ $group_name }}-operation" value="0"/>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="min-width: 32px;">
            <span class="{{ $group_name }}-label">{{ $default['label'] }}</span>
            &nbsp;&nbsp;
            <span class="fal fa-caret-down"></span>
        </button>
        <ul class="dropdown-menu {{ $group_name }}">
            @foreach($group as $index => $item)
            <li><a href="#" data-index="{{ $index }}"> {{ $item['label'] }} </a></li>
            @endforeach
        </ul>
    </div>
    @endif
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fal fa-{{ $icon }}"></i></span>
        </div>
    <input type="{{ $type }}" class="form-control {{ $id }}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{ request($name, $value) }}">
        <div class="input-group-append">
            <span class="input-group-text">&nbsp;&nbsp;{{$label}}</span>
        </div>
</div>
