<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TechStore')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2aa6ad',
                        secondary: '#e8eeff',
                        dark: '#1f2937',
                        light: '#f3f4f6'
                    }
                }
            }
        }
    </script>

    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
    </style>

    @yield('styles')
</head>
<body class="min-h-screen flex flex-col bg-white text-gray-800">

    @if(request()->route()->getName() !== 'login')
        <x-navbar />
    @endif

    @if(request()->route()->getName() === 'login')
        @yield('content')
    @else
        <main class="flex-1 py-6">
            <div class="max-w-6xl mx-auto px-4">
                @yield('content')
            </div>
        </main>
    @endif

    @if(request()->route()->getName() !== 'login')
    <x-footer />
    @endif

    @yield('scripts')
</body>
</html>
