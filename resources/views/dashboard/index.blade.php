<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-full py-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if(\Illuminate\Support\Facades\Auth::user()->role === 'admin')
            @include('welcome')
        @endif
        @include('dashboard.guest')
    </div>
</x-app-layout>
