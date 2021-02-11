@foreach($css as $c)
    <link rel="stylesheet" media="screen, print" href="{{ admin_asset("$c") }}">
@endforeach
