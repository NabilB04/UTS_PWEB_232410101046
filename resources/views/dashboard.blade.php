@extends('layouts.app')

@section('title', 'Dashboard - TechStore')

@section('content')
<main class="space-y-6">
    <section class="bg-primary text-white rounded-xl p-6">
        <h2 class="text-2xl font-bold">Selamat datang, {{ $username }}!</h2>
        <p class="mt-1">Dashboard TechStore, sistem pengelolaan produk elektronik</p>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <article class="bg-white shadow rounded-xl p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-700">Produk</h3>
            <p class="text-4xl font-bold text-primary my-2">5</p>
            <p class="text-gray-500 mb-4">Total produk di inventaris</p>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="inline-block px-4 py-2 border border-primary text-primary rounded-full hover:bg-primary hover:text-white transition">Lihat Produk</a>
        </article>

        <article class="bg-white shadow rounded-xl p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-700">Kategori</h3>
            <p class="text-4xl font-bold text-primary my-2">4</p>
            <p class="text-gray-500 mb-4">Kategori Produk yang tersedia</p>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}#kategori-produk" class="inline-block px-4 py-2 border border-primary text-primary rounded-full hover:bg-primary hover:text-white transition">Lihat Kategori</a>
        </article>

        <article class="bg-white shadow rounded-xl p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-700">Penjualan</h3>
            <p class="text-4xl font-bold text-primary my-2">24</p>
            <p class="text-gray-500 mb-4">Penjualan bulan ini</p>
            <a href="#" class="inline-block px-4 py-2 border border-primary text-primary rounded-full hover:bg-primary hover:text-white transition">Lihat Penjualan</a>
        </article>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="md:col-span-2 bg-white shadow rounded-xl">
            <header class="border-b p-4">
                <h5 class="font-semibold text-gray-800">Aktivitas Terakhir</h5>
            </header>
            <ul class="divide-y">
                <li class="flex justify-between items-center p-4">
                    <div>
                        <h6 class="font-medium text-gray-900">Produk baru ditambahkan</h6>
                        <p class="text-sm text-gray-500">Smartphone Samsung Galaxy S23</p>
                    </div>
                    <span class="bg-primary text-white text-sm rounded-full px-3 py-1">2 jam yang lalu</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <div>
                        <h6 class="font-medium text-gray-900">Stok diubah</h6>
                        <p class="text-sm text-gray-500">Laptop ASUS VivoBook (+5 unit)</p>
                    </div>
                    <span class="bg-primary text-white text-sm rounded-full px-3 py-1">5 jam yang lalu</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <div>
                        <h6 class="font-medium text-gray-900">Harga diubah</h6>
                        <p class="text-sm text-gray-500">Smart Watch Apple Watch 8</p>
                    </div>
                    <span class="bg-primary text-white text-sm rounded-full px-3 py-1">1 hari yang lalu</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <div>
                        <h6 class="font-medium text-gray-900">Kategori baru ditambahkan</h6>
                        <p class="text-sm text-gray-500">Aksesoris Komputer</p>
                    </div>
                    <span class="bg-primary text-white text-sm rounded-full px-3 py-1">2 hari yang lalu</span>
                </li>
            </ul>
        </div>

        <aside class="bg-white shadow rounded-xl">
            <header class="border-b p-4">
                <h5 class="font-semibold text-gray-800">Preview Penjualan</h5>
            </header>
            <ul class="divide-y">
                <li class="flex justify-between items-center p-4">
                    <span class="text-gray-700">Produk hampir habis</span>
                    <span class="bg-yellow-400 text-white text-sm font-semibold rounded-full px-3 py-1">3</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <span class="text-gray-700">Produk habis stok</span>
                    <span class="bg-red-500 text-white text-sm font-semibold rounded-full px-3 py-1">1</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <span class="text-gray-700">Total Penjualan</span>
                    <span class="bg-green-500 text-white text-sm font-semibold rounded-full px-3 py-1">12</span>
                </li>
                <li class="flex justify-between items-center p-4">
                    <span class="text-gray-700">Total Pendapatan</span>
                    <span class="text-gray-800 font-medium">Rp 78.500.000</span>
                </li>
            </ul>
        </aside>
    </section>
</main>
@endsection
