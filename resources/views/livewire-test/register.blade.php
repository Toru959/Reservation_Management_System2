<html>
    <head>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        livewire register <span class="text-blue-500">テスト</span>
        <livewire:register />
        {{-- @livewire('counter'); --}}
        @livewireScripts
    </body>
</html>