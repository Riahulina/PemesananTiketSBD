<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket - Tailwind</title>

    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
    
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
    
            // Hamburger animation
            btn.classList.toggle('open');
        });
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        details summary {
            list-style: none;
        }
        details summary::-webkit-details-marker {
            display: none;
        }
        details summary::before {
            content: '▶';
            display: inline-block;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }
        details[open] summary::before {
            transform: rotate(90deg);
        }
        details[open] {
            background: rgba(239, 68, 68, 0.1);
            border-left: 4px solid #ef4444;
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(239, 68, 68, 0.2);
        }
        .search-box {
            transition: all 0.3s ease;
        }
        .search-box:focus-within {
            transform: scale(1.02);
            box-shadow: 0 10px 30px rgba(239, 68, 68, 0.3);
        }

         /* Hamburger Menu Animation */
         #menu-btn.open span:nth-child(1) {
            transform: rotate(45deg) translateY(7px);
        }
        #menu-btn.open span:nth-child(2) {
            opacity: 0;
        }
        #menu-btn.open span:nth-child(3) {
            transform: rotate(-45deg) translateY(-7px);
        }
        #menu-btn span {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100 antialiased">

    <!-- NAVBAR COMPONENT -->
    <x-navbar />


        <div class="min-h-screen bg-gray-100 ">

            {{-- GANTI NAVBAR BAWAAN DENGAN NAVBAR KAMU --}}
            <x-navbar />

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>

    </body>
</html>
