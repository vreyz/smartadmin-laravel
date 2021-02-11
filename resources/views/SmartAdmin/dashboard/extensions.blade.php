<style>
    .ext-icon {
        color: rgba(0,0,0,0.5);
        margin-left: 10px;
    }
    .installed {
        color: #00a65a;
        margin-right: 10px;
    }
</style>
<div class="panel panel-sortable">
    <div class="panel-hdr">
        <h2>Available extensions</h2>
    </div>
    <!-- /.panel-header -->
    <div class="panel-container">
        <div class="panel-content">

            <table class="table table-striped m-0">
               <tbody>
               @foreach($extensions as $extension)
                <tr>
                    <th scope="row"><i class="fal fa-{{$extension['icon']}} fa-2x"></i></th>
                    <td><a href="{{ $extension['link'] }}" target="_blank" >
                            {{ $extension['name'] }}
                        </a>
                    </td>
                    @if($extension['installed'])
                    <td><span class="float-right"><i class="fal fa-check"></i></span></td>
                    @endif
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="panel-footer text-center">
        <a href="https://github.com/laravel-admin-extensions" target="_blank" class="uppercase">View All Extensions</a>
    </div>
    <!-- /.box-footer -->
</div>
