@if ($breadcrumb)
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ admin_url('/') }}"><i class="fal fa-dashboard"></i> {{__('Home')}}</a></li>
        @foreach($breadcrumb as $item)
            @if($loop->last)
                <li class="breadcrumb-item active">
                    @if (\Illuminate\Support\Arr::has($item, 'icon'))
                        <i class="fal fa-{{ $item['icon'] }}"></i>
                    @endif
                    {{ $item['text'] }}
                </li>
            @else
                <li class="breadcrumb-item">
                    @if (\Illuminate\Support\Arr::has($item, 'url'))
                        <a href="{{ admin_url(\Illuminate\Support\Arr::get($item, 'url')) }}">
                            @if (\Illuminate\Support\Arr::has($item, 'icon'))
                                <i class="fal fa-{{ $item['icon'] }}"></i>
                            @endif
                            {{ $item['text'] }}
                        </a>
                    @else
                        @if (\Illuminate\Support\Arr::has($item, 'icon'))
                            <i class="fal fa-{{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['text'] }}
                    @endif
                </li>
            @endif
        @endforeach
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
@elseif(config('admin.enable_default_breadcrumb'))
    <ol class="breadcrumb page-breadcrumb" >
        <li class="breadcrumb-item"><a href="{{ admin_url('/') }}"><i class="fal fa-dashboard"></i> {{__('Home')}}</a></li>
        @for($i = 2; $i <= count(Request::segments()); $i++)
            <li class="breadcrumb-item">
                {{ucfirst(Request::segment($i))}}
            </li>
        @endfor
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
@endif
