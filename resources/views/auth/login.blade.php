@extends('layouts.app')

@section('content')
<section class="flex items-center justify-center min-h-screen bg-gray-100 px-4 sm:px-6">
    <div class="w-full max-w-lg space-y-4">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-semibold font-serif text-center">SIMAGANG</h1>
        <p class="text-base sm:text-lg md:text-2xl text-center text-gray-500 mb-6 sm:mb-10">Sistem Manajemen Magang</p>

        <!-- Form login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
                    <ul class="list-disc pl-5 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Pilih Role -->
            <select name="role" class="w-full border p-3 text-base sm:text-xl md:text-2xl rounded" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="pembimbing-perusahaan">Pembimbing Perusahaan</option>
                <option value="pembimbing-kampus">Pembimbing Kampus</option>
                <option value="mahasiswa">Mahasiswa</option>
            </select>

            <!-- Username -->
            <input type="text" name="username" placeholder="Username"
                class="w-full border p-3 text-base sm:text-xl md:text-2xl rounded mt-4" required>

            <!-- Password -->
            <div class="relative mt-4">
                <input id="password" type="password" name="password" placeholder="Kata Sandi"
                    class="w-full border p-3 pr-10 text-base sm:text-xl md:text-2xl rounded" required>

                <!-- Toggle icon -->
                <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer text-gray-600"
                    onclick="togglePassword()">
                    <svg id="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg id="hide" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 012.387-4.368M6.423 6.423A9.969 9.969 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.953 9.953 0 01-4.125 5.192M15 12a3 3 0 11-6 0 3 3 0 016 0zM3 3l18 18" />
                    </svg>
                </span>
            </div>

            <!-- Tombol Masuk -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 text-base sm:text-xl md:text-2xl rounded mt-4 hover:bg-blue-600">
                Masuk
            </button>
        </form>
    </div>
</section>

<script>
    function togglePassword() {
        const password = document.getElementById("password");
        const show = document.getElementById("show");
        const hide = document.getElementById("hide");

        if (password.type === "password") {
            password.type = "text";
            show.classList.add("hidden");
            hide.classList.remove("hidden");
        } else {
            password.type = "password";
            show.classList.remove("hidden");
            hide.classList.add("hidden");
        }
    }
</script>
@endsection
