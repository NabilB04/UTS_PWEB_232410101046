@extends('layouts.app')

@section('title', 'Profile - TechStore')

@section('content')
<div class="flex flex-col md:flex-row gap-8">
    <section class="w-full md:w-1/3">
        <article class="bg-white shadow rounded-md p-6">
            <header class="text-center mb-4">
                <img src="{{ asset('assets/foto-profil.png') }}" class="rounded-full mx-auto" alt="Profile Picture" width="150" height="150">
                <h1 class="text-xl font-semibold">{{ $username }}</h1>
                <p class="text-sm text-gray-500">Admin</p>
                <p class="mt-2 text-gray-600">Selamat datang di halaman profile, {{ $username }}!</p>
            </header>
            <footer class="mt-4">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md w-full">Edit Profil</button>
            </footer>
        </article>
    </section>

    <section class="w-full md:w-2/3">
        <article class="bg-white shadow rounded-md">
            <header class="px-6 py-4 bg-gray-50">
                <h2 class="text-lg font-semibold">Informasi Akun</h2>
            </header>
            <section class="px-6 py-4">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="username" class="block text-gray-700">Username</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="username" value="{{ $username }}" readonly>
                        </div>
                        <div>
                            <label for="role" class="block text-gray-700">Role</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="role" value="Administrator" readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="fullName" class="block text-gray-700">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="fullName" value="{{ $username }}">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="email" value="{{ strtolower($username) }}@gmail.com">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="phone" class="block text-gray-700">Telepon</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="phone" value="+62 812 3456 7890">
                        </div>
                        <div>
                            <label for="address" class="block text-gray-700">Alamat</label>
                            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md" id="address" value="Jl. Teknologi No. 10, Jakarta">
                        </div>
                    </div>
                    <div class="flex justify-end space-x-4 mt-6">
                        <button type="button" class="px-6 py-2 bg-gray-300 text-gray-800 rounded-md">Batal</button>
                        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
                    </div>
                </form>
            </section>
        </article>
    </section>
</div>
@endsection