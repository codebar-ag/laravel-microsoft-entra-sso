@props([
    'guard' => 'web',
    'label' => 'Sign in with Microsoft',
    'class' => '',
])

@php
    $hasCredentials = config('microsoft-entra-sso.client_id') && config('microsoft-entra-sso.client_secret') && config('microsoft-entra-sso.tenant_id');
@endphp

@if($hasCredentials)
    <a
        href="{{ route('microsoft-entra-sso.redirect', ['guard' => $guard]) }}"
        {{ $attributes->merge([
            'class' => 'group relative flex w-full items-center justify-center gap-3 rounded-lg border border-zinc-200 bg-white px-4 py-2.5 text-sm font-medium text-zinc-800 shadow-sm transition-all duration-200 hover:bg-zinc-50 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500/40 focus:ring-offset-2 dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-100 dark:hover:bg-zinc-700 dark:hover:border-zinc-600 dark:focus:ring-offset-zinc-900 ' . $class,
        ]) }}
    >
        {{-- Microsoft logo (four colored squares) --}}
        <svg class="h-5 w-5 shrink-0" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
            <rect x="1" y="1" width="9" height="9" fill="#f25022"/>
            <rect x="11" y="1" width="9" height="9" fill="#7fba00"/>
            <rect x="1" y="11" width="9" height="9" fill="#00a4ef"/>
            <rect x="11" y="11" width="9" height="9" fill="#ffb900"/>
        </svg>

        <span class="transition-colors duration-200">{{ __($label) }}</span>

        {{-- Hover arrow indicator --}}
        <svg class="ml-auto h-4 w-4 shrink-0 opacity-0 transition-all duration-200 group-hover:opacity-100 group-hover:translate-x-0.5 text-zinc-400 dark:text-zinc-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
        </svg>
    </a>

    @if(session('microsoft_entra_sso_error'))
        <div class="mt-3 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700 dark:border-red-800/50 dark:bg-red-950/50 dark:text-red-400">
            <div class="flex items-start gap-2">
                <svg class="mt-0.5 h-4 w-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                <span>{{ session('microsoft_entra_sso_error') }}</span>
            </div>
        </div>
    @endif
@endif
