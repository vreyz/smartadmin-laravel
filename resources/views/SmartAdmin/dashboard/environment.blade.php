<div class="panel">
    <div class="panel-hdr">
        <h2>Environment</h2>


    </div>

    <!-- /.panel-header -->
    <div class="panel-container">
        <div class="panel-content">
            <table class="table table-striped">

                @foreach($envs as $env)
                <tr>
                    <td width="120px">{{ $env['name'] }}</td>
                    <td>{{ $env['value'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>
