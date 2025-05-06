@extends('layouts.app')

@section('title', 'Login - TechStore')

@section('content')
<main class="w-screen h-screen bg-cover bg-center flex items-center justify-center px-4 py-8"
      style="background-image: url('{{ asset('assets/background-login.png') }}');">
    <section class="flex flex-col md:flex-row w-full max-w-5xl bg-white shadow-lg rounded-2xl overflow-hidden">
        <section class="w-full md:w-1/2 bg-secondary flex flex-col justify-center items-center p-8">
            <header class="text-center mb-6">
                <img src="{{ asset('assets/logo-techstore.png') }}" alt="TechStore Logo" class="mx-auto mb-4 w-28 h-auto">
            </header>

            <form action="{{ route('postLogin') }}" method="POST" class="w-full max-w-sm" aria-label="Login Form">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username:</label>
                    <input type="text" id="username" name="username" required
                        class="w-full rounded-full border border-primary px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password:</label>
                    <input type="password" id="password" name="password" required
                        class="w-full rounded-full border border-primary px-4 py-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>
                <div>
                    <button type="submit"
                        class="w-full bg-primary text-white font-semibold py-3 rounded-full hover:bg-[#238a91] transition-colors">
                        Login
                    </button>
                </div>
            </form>
        </section>

        <aside class="hidden md:block md:w-1/2 bg-cover bg-center"
            style="background-image: url('{{ asset('assets/background-login.png') }}');" aria-hidden="true">
        </aside>
    </section>
</main>
@endsection
