<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/b-2.4.2/sb-1.6.0/sp-2.2.0/datatables.min.css" rel="stylesheet">
    @vite('resources/js/app.js')

    <title>@yield('title') | Sertifikat Pelatihan</title>
</head>
<body>
    {{-- NAV --}}
    <div class="h-16 bg-sky-500 flex p-2 w-full justify-between items-center pl-5 pr-5">
        <a href="/berandaUser"><img src="{{ Vite::asset('resources/images/logo.png') }}" alt="" class="rounded-full h-10"></a>
        
        <a href="/berandaUser" class="text-xl font-bold text-white">SERTIFIKAT PELATIHAN</a>
        <form action="{{route('logout')}}" method="get">
            <button type="submit" class="w-full flex bg-sky-800 p-3 rounded-md text-white my-2 hover:bg-sky-900 hover:text-slate-500 group">
                <span class="inline-block">
                    <svg class="fill-white group-hover:fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><path d="m2 12 5 4v-3h9v-2H7V8z"></path><path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path></svg>
                </span>
                Keluar
            </button>
        </form>
    </div>
    
    <main class="p-4">
        @yield('content')

    </main>


<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-1.13.6/b-2.4.2/sb-1.6.0/sp-2.2.0/datatables.min.js"></script>
@yield('script')
</body>
</html>