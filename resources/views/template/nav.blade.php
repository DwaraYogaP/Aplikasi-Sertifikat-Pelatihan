<div class="w-[15%] h-screen fixed bg-sky-400">
    <div class=""> 
        <a href="{{url('/beranda')}}" class="w-32 aspect-square bg-white rounded-full mx-auto mt-10 flex justify-center items-center relative overflow-hidden group">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo Aplikasi" class="bg-cover scale-125 absolute h-full w-full object-center group-hover:scale-150 duration-50 transition-transform rounded-full">
        </a>
    </div>

    <div class="flex flex-col justify-center p-9 mt-14">
        <a href="{{ url('beranda')}}" class="bg-sky-800 p-3 rounded-md text-white my-2 hover:bg-sky-900 group">
            <span class="inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white group-hover:fill-slate-500 transition-colors" width="24" viewBox="0 0 24 24"><path d="M12.74 2.32a1 1 0 0 0-1.48 0l-9 10A1 1 0 0 0 3 14h2v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-7h2a1 1 0 0 0 1-1 1 1 0 0 0-.26-.68z"></path></svg>
            </span>
            Beranda
        </a>
        <a href="{{ url('pelatihan')}}" class="bg-sky-800 p-3 rounded-md text-white my-2 hover:bg-sky-900 group">
            <span class="inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white group-hover:fill-slate-500" width="24" viewBox="0 0 24 24"><path d="M21 3h-7a2.98 2.98 0 0 0-2 .78A2.98 2.98 0 0 0 10 3H3a1 1 0 0 0-1 1v15a1 1 0 0 0 1 1h5.758a2.01 2.01 0 0 1 1.414.586l1.121 1.121c.009.009.021.012.03.021.086.08.182.15.294.196h.002a.996.996 0 0 0 .762 0h.002c.112-.046.208-.117.294-.196.009-.009.021-.012.03-.021l1.121-1.121A2.01 2.01 0 0 1 15.242 20H21a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 15h-4.758a4.03 4.03 0 0 0-2.242.689V6c0-.551.448-1 1-1h6v13z"></path></svg>
            </span>
            Pelatihan
        </a>
        <a href="{{ url('sertifikat')}}" class="bg-sky-800 p-3 rounded-md text-white my-2 hover:bg-sky-900 group">
            <span class="inline-block">
                <svg class="fill-white group-hover:fill-slate-500" width="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="gray" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                  </svg>                      
            </span>
            Sertifikat
        </a>
        <form action="{{route('logout')}}" method="get">
            <button type="submit" class="w-full flex bg-sky-800 p-3 rounded-md text-white my-2 hover:bg-sky-900 group">
                <span class="inline-block">
                    <svg class="fill-white group-hover:fill-slate-500" xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><path d="m2 12 5 4v-3h9v-2H7V8z"></path><path d="M13.001 2.999a8.938 8.938 0 0 0-6.364 2.637L8.051 7.05c1.322-1.322 3.08-2.051 4.95-2.051s3.628.729 4.95 2.051 2.051 3.08 2.051 4.95-.729 3.628-2.051 4.95-3.08 2.051-4.95 2.051-3.628-.729-4.95-2.051l-1.414 1.414c1.699 1.7 3.959 2.637 6.364 2.637s4.665-.937 6.364-2.637c1.7-1.699 2.637-3.959 2.637-6.364s-.937-4.665-2.637-6.364a8.938 8.938 0 0 0-6.364-2.637z"></path></svg>
                </span>
                Keluar
            </button>
        </form>
    </div>

    <div class="text-white p-2 fixed bottom-2">
        <div class="grid grid-cols-2 gap-0">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="fill-white"><path d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z"></path><path d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z"></path></svg>
            </div>
            <div class="">
                <p class="">{{$login->name}}</p>
                <p>Role : {{$login->role}}</p>
            </div>
        </div>
    </div>
</div>
