<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/images/logo.png') }}" type="image/x-icon">

    @vite('resources/js/app.js')

    <title>Login</title>
</head>
{{-- <body class="flex flex-col justify-center items-center h-screen w-screen"> --}}
<body class="h-screen w-screen">
    @if($errors->any())
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Data yang Anda masukkan salah"
        });
    </script>

    @endif
    <div class="flex flex-col justify-center items-center h-screen w-screen">
        <div class="flex flex-col p-3 w-[40%] shadow-xl bg-slate-100 rounded-md justify-center items-center">
            <h1 class="text-3xl font-bold">Login</h1>
            <form action="{{url('/postLogin')}}" method="POST" class="p-3 flex flex-col items-center">
                @csrf
                <div class="grid grid-cols-2 gap-2">
                    <label for="Email" class="p-2">Email</label>
                    <input type="email" class="p-2" placeholder="Masukkan email" name="email">
    
                    <label for="Password" class="p-2">Password</label>
                    <input type="password" class="p-2" placeholder="Masukkan password" name="password">
                </div>
    
                <button type="submit" class="bg-gradient-to-r from-emerald-400 to-sky-500 p-2 w-28 rounded-sm text-white mt-4 hover:bg-gradient-to-r hover:from-emerald-600 hover:to-sky-700">Login</button>
            </form>
        </div>
    </div>

<script>
    const btn = document.getElementById('error')
    closeButton() {
        btn.style.display = 'none'
    }
</script>
</body>
</html>