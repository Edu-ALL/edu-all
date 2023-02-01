<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>ALL-In Eduspace</title>
        <link href="{{ asset('favicon.png') }}" rel="icon">
        
        {{-- Google Font --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/c278872066.js" crossorigin="anonymous"></script>
        
        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        {{-- Datatables --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

        {{-- TinyMCE --}}
        <script src="https://cdn.tiny.cloud/1/h7t62ozvqkx2ifkeh051fsy3k9irz7axx1g2zitzpbaqfo8m/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        {{-- <script src="https://cdn.tiny.cloud/1/h7t62ozvqkx2ifkeh051fsy3k9irz7axx1g2zitzpbaqfo8m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}

        {{-- Select2 --}}
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

        {{-- SweetAlert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
        {{-- @vite('public/css/bootstrap.min.css') --}}
        @vite('public/css/admin/app.css')
        @yield('css')
        <style>
            .swal-footer {
                text-align: center;
            }
            .swal-button {
                background-color: var(--blue);
            }
        </style>
    </head>
    <body>
        {{-- Input Content --}}
        @yield('content')
        @if (Session::has('success'))
            <script>
                swal({
                    title: "Congratulations!",
                    text: "{{ Session::get('success') }}",
                    icon: "success",
                });
            </script>
        @endif
        @if (Session::has('errors'))
            <script>
                swal({
                    title: "Something Went Wrong!",
                    text: "{{ Session::get('errors')->first() }}",
                    icon: "error",
                });
            </script>
        @endif
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/admin/main.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <!-- Lazy Load cdnjs -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

        @yield('js')
    </body>
</html>