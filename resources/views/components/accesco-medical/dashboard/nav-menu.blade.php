<div class="bg-white/10 col-span-3 rounded-lg p-4 ">
    <h1 class="font-bold text-lg lg:text-3xl text-black">Dashboard<span class="text-indigo-400">.</span></h1>
    <p class="text-slate-400 text-sm mb-2">Welcome back,</p>
   <x-nav-link href="{{ route('profile.show') }}" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
        <div>
            <img class="rounded-full w-10 h-10 relative object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="">
        </div>
        <div>
            <p class="font-medium group-hover:text-indigo-400 leading-4">{{ Auth::user()->name }}</p>
            <span class="text-xs text-slate-400">{{ Auth::user()->role }}</span>
        </div>
    </x-nav-link>
    <hr class="my-2 border-slate-700">
    @if(\Illuminate\Support\Facades\Auth::user()->role === 'admin')
        <div class="flex flex-col space-y-2 my-5">
            <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                    <div>
                        <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">{{ __('Dashboard') }}</p>
                        <p class="text-slate-400 text-sm hidden md:block">Data overview</p>
                    </div>
                </div>
            </x-nav-link>
            <x-nav-link href="{{ route('blog.create') }}" :active="request()->routeIs('about-us')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                    <div>
                        <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">{{ __('Blogs') }}</p>
                        <p class="text-slate-400 text-sm hidden md:block">Manage blogs</p>
                    </div>
                </div>
            </x-nav-link>
            <x-nav-link href="{{ route('user.index') }}" :active="request()->routeIs('user.index')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                    <div>
                        <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">{{ __('Users') }}</p>
                        <p class="text-slate-400 text-sm hidden md:block">Manage users</p>
                    </div>
                </div>
            </x-nav-link>
            <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                    <div>
                        <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">{{ __('Appointment') }}</p>
                        <p class="text-slate-400 text-sm hidden md:block">Edit appointments</p>
                    </div>
                </div>
            </x-nav-link>
        </div>
    @endif
    <x-nav-link href="{{ route('about-us') }}" :active="request()->routeIs('about-us')" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
        <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
            <div>
                <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">{{ __('Appointment') }}</p>
                <p class="text-slate-400 text-sm hidden md:block">Edit appointments</p>
            </div>
        </div>
    </x-nav-link>
</div>
