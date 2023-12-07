<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @include('template.head')
    <title>@yield('nama') | Sertifikat Pelatihan</title>
</head>
<body>
    @include('template.nav')

    <div class="relative ml-[18%] mr-3 pt-5 w-75% min-h-[93vh]">
        @yield('content')
    </div>
    @include('template.footer')

    


    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pelatihan.js') }}"></script>

    {{-- <script src="https://cdn.datatables.net/v/zf/jq-3.7.0/dt-1.13.6/datatables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/b-2.4.2/sb-1.6.0/sp-2.2.0/datatables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    



    @yield('javascript')
</body>
</html>