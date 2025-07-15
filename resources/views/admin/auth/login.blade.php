<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Polres Tulungagung</title>
    {{-- Memuat CSS dan JS dari Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased">

    <div class="relative flex flex-col justify-center items-center min-h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/images/bglogin.png') }}');">

        {{-- Overlay gelap --}}
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        {{-- Header dengan logo --}}
        <header class="absolute top-0 left-0 p-6 z-10 flex items-center space-x-4">
            <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polres Tulungagung" class="w-20 md:w-24">
            <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Logo Polda Jatim" class="w-20 md:w-24">
        </header>

        <div class="relative z-10 w-full max-w-sm m-4" x-data="{ showForgotPassword: false }">
            <div
                class="bg-black bg-opacity-25 backdrop-blur-xl rounded-3xl shadow-2xl border border-white border-opacity-20">
                <div class="relative p-12">

                    {{-- FORM LOGIN --}}
                    <div x-show="!showForgotPassword" x-transition>
                        <h2 class="text-3xl font-bold text-center text-yellow-400 mb-8">Login</h2>
                        <form action="{{ route('login') }}" method="POST" class="space-y-8">
                            @csrf
                            {{-- Input Email --}}
                            <div class="relative">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    class="peer block w-full appearance-none bg-transparent px-1 pb-2 text-white placeholder-transparent focus:outline-none border-b-2 border-gray-500 focus:border-yellow-400 transition"
                                    placeholder="Email">
                                <label for="email"
                                    class="absolute top-1 left-1 text-gray-300 transition-all duration-300 pointer-events-none 
                                           peer-placeholder-shown:top-1 peer-placeholder-shown:text-base 
                                           peer-focus:top-[-1.25rem] peer-focus:text-sm peer-focus:text-yellow-400
                                           peer-[:not(:placeholder-shown)]:top-[-1.25rem] peer-[:not(:placeholder-shown)]:text-sm">
                                    Email
                                </label>
                            </div>
                            {{-- Input Password --}}
                            <div class="relative">
                                <input type="password" id="password" name="password" required
                                    class="peer block w-full appearance-none bg-transparent px-1 pb-2 text-white placeholder-transparent focus:outline-none border-b-2 border-gray-500 focus:border-yellow-400 transition"
                                    placeholder="Password">
                                <label for="password"
                                    class="absolute top-1 left-1 text-gray-300 transition-all duration-300 pointer-events-none 
                                           peer-placeholder-shown:top-1 peer-placeholder-shown:text-base 
                                           peer-focus:top-[-1.25rem] peer-focus:text-sm peer-focus:text-yellow-400
                                           peer-[:not(:placeholder-shown)]:top-[-1.25rem] peer-[:not(:placeholder-shown)]:text-sm">
                                    Password
                                </label>
                            </div>
                            <div class="text-right">
                                <a href="#" @click.prevent="showForgotPassword = true"
                                    class="text-sm text-yellow-400 hover:text-yellow-300 transition">Lupa Password?</a>
                            </div>
                            <button type="submit"
                                class="w-full py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 font-bold uppercase tracking-wider shadow-lg hover:shadow-yellow-500/30 transform hover:-translate-y-0.5 transition-all duration-300">
                                Login
                            </button>
                            <p class="text-center text-sm text-gray-300">Khusus Staff Polres Tulungagung</p>
                        </form>
                    </div>

                    {{-- FORM LUPA PASSWORD --}}
                    <div x-show="showForgotPassword" x-transition style="display: none;">
                        <h2 class="text-3xl font-bold text-center text-yellow-400 mb-8">Lupa Password</h2>
                        <p class="text-center text-gray-300 text-sm mb-6">Masukkan email Anda. Kami akan mengirimkan
                            link untuk mereset password Anda.</p>
                        <form action="{{ route('password.email') }}" method="POST" class="space-y-8">
                            @csrf
                            <div class="relative">
                                <input type="email" id="email_forgot" name="email" value="{{ old('email') }}"
                                    required
                                    class="peer block w-full appearance-none bg-transparent px-1 pb-2 text-white placeholder-transparent focus:outline-none border-b-2 border-gray-500 focus:border-yellow-400 transition"
                                    placeholder="Email Terdaftar">
                                <label for="email_forgot"
                                    class="absolute top-1 left-1 text-gray-300 transition-all duration-300 pointer-events-none 
                                           peer-placeholder-shown:top-1 peer-placeholder-shown:text-base 
                                           peer-focus:top-[-1.25rem] peer-focus:text-sm peer-focus:text-yellow-400
                                           peer-[:not(:placeholder-shown)]:top-[-1.25rem] peer-[:not(:placeholder-shown)]:text-sm">
                                    Email Terdaftar
                                </label>
                            </div>
                            <div class="text-right">
                                <a href="#" @click.prevent="showForgotPassword = false"
                                    class="text-sm text-yellow-400 hover:text-yellow-300 transition">Kembali ke
                                    Login</a>
                            </div>
                            <button type="submit"
                                class="w-full py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 font-bold uppercase tracking-wider shadow-lg hover:shadow-yellow-500/30 transform hover:-translate-y-0.5 transition-all duration-300">
                                Kirim Link Reset
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
