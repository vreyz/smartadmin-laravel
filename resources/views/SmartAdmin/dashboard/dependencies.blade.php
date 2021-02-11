<div class="panel panel-sortable">
    <div class="panel-hdr" role="heading">
        <h2>Dependencies</h2>
    </div>

    <!-- /.panel-header -->
    <div class="panel-container dependencies">
        <div class="panel-content">
            <table class="table table-striped">
                @foreach($dependencies as $dependency => $version)
                <tr>
                    <td width="240px">{{ $dependency }}</td>
                    <td><span class="label label-primary">{{ $version }}</span></td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>

<script>
    $('.dependencies').slimscroll({height:'510px',size:'3px'});
</script>
