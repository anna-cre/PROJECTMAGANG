<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Polres Tulungagung</title>
    @vite('resources/css/app.css')
    <style>
        .hero-bg {
            background-image: url("{{ asset('assets/images/Background.png') }}"); 
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <div>

        <main class="relative h-screen">
            <header class="bg-black bg-opacity-70 text-white absolute top-0 left-0 right-0 z-20">
                <div class="container mx-auto px-4 py-2">
                    <div class="flex justify-between items-center border-b border-gray-600 pb-2">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polri" class="h-12">
                            <div>
                                <h1 class="text-sm font-bold uppercase">Kepolisian Negara Republik Indonesia</h1>
                                <h2 class="text-xs uppercase">Daerah Jawa Timur - Resor Tulungagung</h2>
                            </div>
                        </div>
                        <div class="text-right text-xs hidden md:block">
                            <p>Jl. Ahmad Yani Timur No.9, Bago, Kec. Tulungagung,</p>
                            <p>Kabupaten Tulungagung, Jawa Timur 66212</p>
                        </div>
                    </div>

                    <nav class="flex justify-center items-center pt-2">
                        <ul class="flex space-x-6 text-sm font-semibold">
                            <li><a href="#" class="hover:text-yellow-400">BERANDA</a></li>
                            <li><a href="#layanan-umum" class="hover:text-yellow-400">LAYANAN</a></li>
                            <li><a href="#" class="hover:text-yellow-400 border-b-2 border-yellow-400 pb-1">PROFIL</a></li>
                            <li><a href="#" class="hover:text-yellow-400">INOVASI</a></li>
                            <li><a href="#" class="hover:text-yellow-400">BERITA</a></li>
                            <li><a href="#" class="hover:text-yellow-400">FAQ</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="h-full flex items-center justify-center hero-bg bg-cover bg-center">
                <div class="absolute inset-0 bg-black opacity-40"></div>
    
                <div class="relative z-10 container mx-auto px-4 text-center text-white">
                    <h1 class="text-4xl lg:text-5xl font-bold uppercase">Profil Polres Tulungagung</h1>
                    <p class="mt-4 text-lg lg:text-xl max-w-3xl mx-auto">Mengenal lebih dekat Visi, Misi, Sejarah, dan Struktur Organisasi Kepolisian Resor Tulungagung.</p>
                </div>
    
            </div>
        </main>

        <section id="visi-misi" class="bg-white py-20">
            <div class="container mx-auto px-6">

                <div class="flex flex-wrap items-center mb-16">
                    <div class="w-full md:w-1/2 p-4">
                        <img src="{{ asset('assets/images/gedung_polres.jpg') }}" alt="Gedung Polres Tulungagung" class="rounded-lg shadow-xl w-full">
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Visi</h2>
                        <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4"></div>
                        <p class="text-gray-600 leading-relaxed">
                            Terwujudnya pelayanan keamanan dan ketertiban masyarakat yang prima, tegaknya hukum dan keamanan dalam negeri yang mantap serta terjalinnya sinergi polisional yang proaktif.
                        </p>
                    </div>
                </div>

                <div class="flex flex-wrap items-start md:flex-row-reverse">
                    <div class="w-full md:w-1/2 p-4">
                        <div class="grid grid-cols-2 gap-4">
                            <img src="{{ asset('assets/images/misi_gambar_1.jpg') }}" alt="Poster Kapolres Tulungagung" class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/misi_gambar_2.jpg') }}" alt="Kegiatan patroli malam" class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/misi_gambar_3.jpg') }}" alt="Pemberian penghargaan" class="w-full h-full object-cover rounded-lg shadow-xl">
                            <img src="{{ asset('assets/images/misi_gambar_4.jpg') }}" alt="Pengamanan kegiatan masyarakat" class="w-full h-full object-cover rounded-lg shadow-xl">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Misi</h2>
                        <div class="w-20 h-1 bg-yellow-400 mt-2 mb-4"></div>
                        <ol class="list-decimal list-outside pl-5 text-gray-600 space-y-3 leading-relaxed">
                            <li>Melaksanakan deteksi dini dan peringatan dini melalui kegiatan/operasi penyelidikan, pengamanan dan penggalangan;</li>
                            <li>Memberikan perlindungan, pengayoman dan pelayanan secara mudah, responsif dan tidak diskriminatif;</li>
                            <li>Menjaga keamanan, ketertiban dan kelancaran lalu lintas untuk menjamin keselamatan dan kelancaran arus orang dan barang;</li>
                            <li>Menjamin keberhasilan penanggulangan gangguan keamanan dalam negeri;</li>
                            <li>Mengembangkan perpolisian masyarakat yang berbasis pada masyarakat patuh hukum;</li>
                            <li>Menegakkan hukum secara profesional, objektif, proporsional, transparan dan akuntabel untuk menjamin kepastian hukum dan rasa keadilan;</li>
                            <li>Mengelola secara profesional, transparan, akuntabel dan modern seluruh sumber daya Polri guna mendukung operasional tugas Polri;</li>
                            <li>Membangun sistem sinergi polisional interdepartemen dan lembaga internasional maupun komponen masyarakat dalam rangka membangun kemitraan dan jejaring kerja (partnership building/networking).</li>
                        </ol>
                    </div>
                </div>

            </div>
        </section>
        </div>

</body>
</html>