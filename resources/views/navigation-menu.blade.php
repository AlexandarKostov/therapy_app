<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <span class="text-green-500 text-xl">&lt;Accesco&gt;</span> Medical
        </div>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">
                    {{ __('Services') }}
                </x-nav-link>

                <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')">
                    {{ __('About') }}
                </x-nav-link>

                <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog')">
                    {{ __('Advice') }}
                </x-nav-link>

                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Contact') }}
                </x-nav-link>

            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth()
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            @include('layouts.partials.header-auth')
        @else
            @include('layouts.partials.header-guest')
        @endauth
    </div>
</nav>
