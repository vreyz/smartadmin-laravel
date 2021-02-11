<footer class="page-footer" role="contentinfo">
    <div class="d-flex align-items-center flex-1 text-muted">
        <span class="hidden-md-down fw-700">2021-{{date('Y')}} © {{config('admin.name')}} Version {{config('admin.app_version')}} by&nbsp;<a href='#' class='text-primary fw-500' title='Afif Kurniawan' target='_blank'>Afif Kurniawan</a></span>
    </div>
    <div>
        <ul class="list-table m-0">
            <li><a href="intel_introduction.html" class="text-secondary fw-700">About</a></li>
            @if(config('admin.show_environment'))
                <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">Env&nbsp;&nbsp; {!! config('app.env') !!} </li>
            @endif
            @if(config('admin.show_version'))

            @endif
            <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
            <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700"><i class="fal fa-question-circle" aria-hidden="true"></i> Documentation</a></li>
        </ul>
    </div>
</footer>
