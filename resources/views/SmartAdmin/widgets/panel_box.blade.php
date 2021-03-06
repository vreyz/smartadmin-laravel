<div {!! $attributes !!}>
    @if($title || $tools)
        <div class="panel-hdr" role="heading">
            <h2>{{ $title }}</h2>
            <div class="float-right">
                @foreach($tools as $tool)
                    {!! $tool !!}
                @endforeach
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
    @endif
    <div class="panel-container show">
    <div class="panel-content" style="display: block;">
        {!! $content !!}
    </div><!-- /.box-body -->
    </div>
    @if($footer)
        <div class="panel-footer">
            {!! $footer !!}
        </div><!-- /.box-footer-->
    @endif
</div>
{{-- 由于widget box 有可能会用于expand，加载完页面后还没有对应的html，导致script失败，故只能和html写在一起。 --}}
<script>
    {!! $script !!}
</script>
