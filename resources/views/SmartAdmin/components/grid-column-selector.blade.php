<div class="btn-group column-selector">
    <button type="button" class="btn bg-trans-gradient btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
        <i class="fal fa-table"></i>
        &nbsp;
        <span class="caret"></span>
    </button>
    <div class="dropdown-menu" role="menu">
        <span>
                @foreach($columns as $key => $label)
                    @php
                        if (empty($visible)) {
                            $checked = 'checked';
                        } else {
                            $checked = in_array($key, $visible) ? 'checked' : '';
                        }
                    @endphp

                    <li class="checkbox icheck">
                        <label>
                            <input type="checkbox" class="column-select-item" value="{{ $key }}" {{ $checked }}/>&nbsp;&nbsp;{{ $label }}
                        </label>
                    </li>
                @endforeach
            </span>
        <span class="divider"></span>&nbsp;&nbsp;&nbsp;
        <button class="btn btn-sm btn-default column-select-all" type="button">{{ __('admin.all') }}</button>
            <button class="btn btn-sm btn-primary column-select-submit" type="button">{{ __('admin.submit') }}</button>
    </div>
</div>

<style>
    .column-selector {
        margin-right: 10px;
    }

    .column-selector .dropdown-menu {
        padding: 10px;
        height: auto;
        max-height: 500px;
        overflow-x: hidden;
    }

    .column-selector .dropdown-menu ul {
        padding: 0;
    }

    .column-selector .dropdown-menu ul li {
        margin: 0;
    }

    .column-selector .dropdown-menu label {
        width: 100%;
        padding: 3px;
    }
</style>

<script>
    $('.column-select-submit').on('click', function () {

        var defaults = @json($defaults);
        var selected = [];

        $('.column-select-item:checked').each(function () {
            selected.push($(this).val());
        });

        if (selected.length == 0) {
            return;
        }

        var url = new URL(location);

        if (selected.sort().toString() == defaults.sort().toString()) {
            url.searchParams.delete('_columns_');
        } else {
            url.searchParams.set('_columns_', selected.join());
        }

        $.pjax({container:'#pjax-container', url: url.toString()});
    });

    $('.column-select-all').on('click', function () {
        $('.column-select-item').iCheck('check');
        return false;
    });

    $('.column-select-item').iCheck({
        checkboxClass:'icheckbox_minimal-blue'
    });
</script>
