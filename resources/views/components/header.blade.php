<div class="flex items-center justify-between border-b border-zinc-200 px-8 py-4 dark:border-zinc-700">
    <div>
        <a href="{{ route('cachet.status-page') }}" class="transition hover:opacity-80">
            @if($appBanner)
            <img src="{{ Storage::url($appBanner) }}" alt="{{ $siteName }}" class="h-8 w-auto" />
            @else
            <x-cachet::logo class="hidden h-8 w-auto sm:block" />
            <x-cachet::logomark class="h-8 w-auto sm:hidden" />
            @endif
        </a>
    </div>

    @if ($dashboardLoginLink)
    <div class="flex items-center gap-2.5 sm:gap-5">
        <a href="{{ Cachet\Cachet::dashboardPath() }}" class="rounded bg-accent px-3 py-2 text-sm font-semibold text-accent-foreground">Dashboard</a>
        @auth
        {{-- TODO: This form sucks... --}}
        <form action="{{ \Cachet\Cachet::dashboardPath() }}/logout" method="POST">
            @csrf
            <button class="text-sm font-medium text-zinc-800 transition hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-300 sm:text-base">Logout</button>
        </form>
        @endauth
    </div>
    @endif
</div>
