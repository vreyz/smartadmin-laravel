@if(Admin::user()->visible(\Illuminate\Support\Arr::get($item, 'roles', [])) && Admin::user()->can(\Illuminate\Support\Arr::get($item, 'permission')))
    @if(!isset($item['children']))
        <li>
            @if(url()->isValidUrl($item['uri']))
                <a href="{{ admin_url($item['uri']) }}" title="{{ admin_trans($item['title']) }}" data-filter-tags="{{trim(strtolower($item['title']))}}" target="_blank">
                <i class="fal {{ $item['icon'] }}"></i>
            @elseif($item['new_page'] == 1)
                <a href="{{ admin_url($item['uri']) }}" title="{{ admin_trans($item['title']) }}" data-filter-tags="{{trim(strtolower($item['title']))}}" target="_blank">
                <i class="fal {{ $item['icon'] }}"></i>
            @else
                <a href="{{ admin_url($item['uri']) }}" title="{{ admin_trans($item['title']) }}" data-filter-tags="{{trim(strtolower($item['title']))}}">
                <i class="fal {{ $item['icon'] }}"></i>
            @endif

            @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                        <span class="nav-link-text" data-i18n="nav.{{trim(str_replace(' ', '_', strtolower($item['title'])))}}">{{ __($titleTranslation) }}</span>
            @else
                        <span class="nav-link-text" data-i18n="nav.{{trim(str_replace(' ', '_', strtolower($item['title'])))}}">{{ admin_trans($item['title']) }}</span>
            @endif
            </a>
        </li>
    @else
        <li class="treeviews-parent">
            <a href="#" title="{{ admin_trans($item['title']) }}" data-filter-tags="{{trim(strtolower($item['title']))}}">
                <i class="fal {{ $item['icon'] }}"></i>
                @if (Lang::has($titleTranslation = 'admin.menu_titles.' . trim(str_replace(' ', '_', strtolower($item['title'])))))
                    <span class="nav-link-text" data-i18n="nav.{{trim(str_replace(' ', '_', strtolower($item['title'])))}}">{{ __($titleTranslation) }}</span>
                @else
                    <span class="nav-link-text" data-i18n="nav.{{trim(str_replace(' ', '_', strtolower($item['title'])))}}">{{ admin_trans($item['title']) }}</span>
                @endif
            </a>
                <ul class="treeviews-child">
                    @foreach($item['children'] as $item)
                        @include('admin::partials.menu', $item)
                    @endforeach
                </ul>
        </li>
    @endif
@endif
