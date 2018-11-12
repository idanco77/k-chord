 @if(Session::has('sm'))
    <script>
        toastr.options.positionClass = 'toast-top-center';
        toastr.options.progressBar = true;
        toastr.warning("<i>{{ Session::get('sm') }}</i>");
    </script>
    
    @endif