<!DOCTYPE html>
<html lang="id" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Informasi - Admin Polres</title>
    {{-- Include Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Google Fonts & Icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: #facc15;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #eab308;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">

    <div class="flex h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 flex-shrink-0 bg-black text-white flex flex-col">
            <div class="h-20 flex items-center justify-center bg-gray-900/50">
                <span class="material-symbols-outlined text-yellow-400 text-3xl mr-2">security</span>
                <h1 class="text-xl font-bold tracking-wider">ADMIN</h1>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2">
                {{-- Dashboard Link --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-300 hover:bg-gray-800 rounded-lg transition duration-200">
                    <span class="material-symbols-outlined mr-3">dashboard</span>
                    Dashboard
                </a>
                {{-- Active Link: Berita & Informasi --}}
                <a href="{{ route('admin.berita') }}"
                    class="flex items-center px-4 py-2.5 text-sm font-bold bg-yellow-400 text-gray-900 rounded-lg">
                    <span class="material-symbols-outlined mr-3">article</span>
                    Berita & Informasi
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2.5 text-sm font-medium text-gray-300 hover:bg-gray-800 rounded-lg transition duration-200">
                    <span class="material-symbols-outlined mr-3">settings</span>
                    Pengaturan
                </a>
            </nav>
            <div class="p-4 border-t border-gray-800">
                {{-- User Info & Logout --}}
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=facc15&color=111827"
                        alt="User Avatar">
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-semibold text-white">{{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-400">Administrator</p>
                    </div>
                    {{-- Logout Form --}}
                    {{-- KODE YANG SUDAH DIPERBAIKI --}}
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" title="Logout"
                            class="ml-2 text-gray-500 hover:text-yellow-400 transition duration-200">
                            <span class="material-symbols-outlined">logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Manajemen Berita & Informasi</h2>
                    <p class="text-gray-400 mt-1">Kelola semua artikel berita dan pengumuman di sini.</p>
                </div>
                <button class="bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg flex items-center">
                    <span class="material-symbols-outlined mr-2">add</span>
                    Tambah Berita
                </button>
            </div>

            {{-- News Table --}}
            <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Judul Berita</th>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Tanggal Publikasi</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Example Row --}}
                            <tr class="border-b border-gray-700 hover:bg-gray-700/50">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">Operasi
                                    Zebra
                                    2025 Dimulai Hari Ini</th>
                                <td class="px-6 py-4">Lalu Lintas</td>
                                <td class="px-6 py-4">13 Juli 2025</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-green-300">Published</span>
                                </td>
                                <td class="px-6 py-4 space-x-4">
                                    <a href="#" class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
