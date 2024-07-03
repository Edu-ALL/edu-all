<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>EduALL</title>
    <link href="{{ asset('favicon.png') }}" rel="icon">

    {{-- Google Font --}}
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/d11faf3e43.js" crossorigin="anonymous"></script>

    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- Datatables --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/h7t62ozvqkx2ifkeh051fsy3k9irz7axx1g2zitzpbaqfo8m/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- SweetAlert --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.css">

    {{-- Axios  --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
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
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/admin/main.js') }}"></script>
    {{-- <script type="module" src="{{ asset('/js/admin/ckeditor.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>

    {{-- Lazy Image Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>

    <script>
        $("img").lazyload({
            effect: "fadeIn"
        });

        function notif(status, message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            // if (status == true) {
            //     var icon = "success"
            // } else {
            //     var icon = "error"
            // }

            Toast.fire({
                icon: status,
                title: message
            })
        }
    </script>
    @if (Session::has('success'))
        <script>
            notif('success', '{{ Session::get('success') }}')
        </script>
    @endif
    @if (Session::has('errors'))
        <script>
            notif('error', '{{ Session::get('errors')->first() }}')
        </script>
    @endif

    @yield('js')
</body>

</html>
