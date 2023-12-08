<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10 bg-white">
    <header>
        
    </header>
    <nav class="flex justify-evenly">
        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate style="text-decoration: none;">Home</a>
        <a href="{{ url('/leaderboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate style="text-decoration: none;">Leaderboard</a>
        <a href="{{ url('/merch') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate style="text-decoration: none;">Merch</a>
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate style="text-decoration: none;">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="test" wire:navigate style="text-decoration: none;">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="test" wire:navigate style="text-decoration: none;">Register</a>
            @endif
        @endauth
    </nav>
</div>

 
</div>