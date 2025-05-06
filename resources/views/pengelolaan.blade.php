@extends('layouts.app')

@section('title', 'Pengelolaan - TechStore')

@section('content')
<section class="mb-8">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold">Pengelolaan Produk</h2>
        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md flex items-center gap-2">
            <i class="bi bi-plus-circle"></i> Tambah Produk Baru
        </button>
    </div>
</section>

<section class="mb-8">
    <div class="bg-white shadow rounded-md">
        <div class="flex justify-between items-center border-b px-6 py-4 bg-gray-50">
            <h3 class="text-lg font-medium">List Produk</h3>
            <div class="flex w-72">
                <input type="text" class="flex-grow border border-gray-300 rounded-l-md px-3 py-2 focus:outline-none focus:ring focus:border-blue-500" placeholder="Search produks...">
                <button class="bg-gray-200 border border-l-0 border-gray-300 px-4 rounded-r-md hover:bg-gray-300">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100 text-gray-700 text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">nama Produk</th>
                        <th class="px-6 py-3 text-left">Kategori</th>
                        <th class="px-6 py-3 text-left">Harga</th>
                        <th class="px-6 py-3 text-left">Stok</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    @foreach($produks as $produk)
                    @php
                        $stok = $produk['stok'];
                        $badge = $stok > 20 ? 'bg-green-500' : ($stok > 10 ? 'bg-blue-400' : 'bg-yellow-400');
                    @endphp
                    <tr>
                        <td class="px-6 py-4">{{ $produk['id'] }}</td>
                        <td class="px-6 py-4">{{ $produk['nama'] }}</td>
                        <td class="px-6 py-4">{{ $produk['kategori'] }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($produk['harga'], 0, ',', '.') }}</td>
                        <td class="px-6 py-4">
                            <span class="text-white text-xs px-2 py-1 rounded {{ $badge }}">{{ $stok }}</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md text-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="border-t px-6 py-4 bg-gray-50">
            <div class="flex justify-center space-x-2">
                <button class="px-3 py-1 text-gray-400 bg-gray-200 rounded cursor-not-allowed">Sebelumnya</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-1 bg-white border rounded hover:bg-gray-100">2</button>
                <button class="px-3 py-1 bg-white border rounded hover:bg-gray-100">3</button>
                <button class="px-3 py-1 bg-white border rounded hover:bg-gray-100">Selanjutnya</button>
            </div>
        </div>
    </div>
</section>

<section id="kategori-produk">
    <div class="bg-white shadow rounded-md">
        <div class="border-b px-6 py-4 bg-gray-50">
            <h3 class="text-lg font-medium">Kategori Produk</h3>
        </div>
        <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            @php
                $kategoriCounts = [];
                foreach ($produks as $produk) {
                    $kategoriCounts[$produk['kategori']] = ($kategoriCounts[$produk['kategori']] ?? 0) + 1;
                }
            @endphp

            @foreach($kategoriCounts as $kategori => $count)
            <div class="bg-gray-50 border rounded-lg p-4 shadow-sm">
                <h4 class="text-md font-semibold">{{ $kategori }}</h4>
                <p class="text-sm text-gray-600">Total produk: {{ $count }}</p>
                <a href="#" class="inline-block mt-2 text-blue-600 hover:underline text-sm">Lihat {{ $kategori }} Produk</a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
