<div class="panel panel-{{ $style }} panel-sortable">
    <div class="panel-hdr">
        <h2>{{ $title }}</h2>

        <div class="box-tools">
            {!! $tools !!}
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="form-horizontal">

        <div class="panel-container">
            <div class="panel-content">
            <div class="fields-group">

                @foreach($fields as $field)
                    {!! $field->render() !!}
                @endforeach
            </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
</div>
