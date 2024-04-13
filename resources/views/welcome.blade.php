<!-- component -->
<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<style>
    :root { font-family: 'Inter', sans-serif; }
    @supports (font-variation-settings: normal) {
        :root { font-family: 'Inter var', sans-serif; }
    }
</style>
    <div class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
        <x-accesco-medical.dashboard.nav-menu></x-accesco-medical.dashboard.nav-menu>
        <div id="content" class="bg-white/10 col-span-9 rounded-lg p-6">
            <div id="24h">
                <h1 class="font-bold py-4 uppercase">Last 24h Statistics</h1>
                <div id="stats" class="grid gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white shadow-xl p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div id="stats-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-indigo-300 text-sm font-medium uppercase leading-4">Users</p>
                                <p class="text-black font-bold text-2xl inline-flex items-center space-x-2">
                                    <span>{{ Auth::user()->wholeDayUser() }}</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                          </svg>

                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div id="stats-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-black">
                                    <path d="M96 352V96c0-35.3 28.7-64 64-64H416c35.3 0 64 28.7 64 64V293.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7H160c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16v48H208c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V256h48c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H320V144c0-8.8-7.2-16-16-16H272zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24H136C60.9 512 0 451.1 0 376V152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88H296z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-black text-sm font-medium uppercase leading-4">Therapy</p>
                                <p class="text-black font-bold text-2xl inline-flex items-center space-x-2">
                                    <span>$2,873.88</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                          </svg>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-xl p-6 rounded-lg">
                        <div class="flex flex-row space-x-4 items-center">
                            <div id="stats-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>

                            </div>
                            <div>
                                <p class="text-black text-sm font-medium uppercase leading-4">Blogs</p>
                                <p class="text-black font-bold text-2xl inline-flex items-center space-x-2">
                                    <span>{{ $postCount }}</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                          </svg>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="last-blogs">
                <h1 class="font-bold py-4 uppercase">All blogs, short description</h1>
                <div id="stats" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach($blogs as $blog)
                        <div class="bg-white shadow-xl rounded-lg">
                            <div class="flex flex-row items-center">
                                <div class="text-3xl p-4">📚</div>
                                <div class="p-2">
                                    <p class="text-black font-medium">{{ $blog->title }}</p>
                                    <p class="text-black text-sm">{{ $blog->published_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="last-users">
                <h1 class="font-bold py-4 uppercase">All admins</h1>
                <div class="overflow-x-scroll">

                        <table class="w-full whitespace-nowrap">
                            <thead class="bg-black/60">
                            <th class="text-left py-3 px-2 rounded-l-lg">Name</th>
                            <th class="text-left py-3 px-2">Email</th>
                            <th class="text-left py-3 px-2">Role</th>
                            </thead>
                                @foreach($users as $user)
                                    <tr class="border-b border-gray-700">
                                       @if($user->role === 'admin')
                                            <td class="py-3 px-2 font-bold">
                                                <div class="inline-flex space-x-3 items-center">
                                                    <span><img class="rounded-full w-8 h-8" src="{{ $user->profile_photo_url }}" alt=""></span>
                                                    <span>{{ $user->name }}</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-2">{{ $user->email }}</td>
                                            <td class="py-3 px-2">{{ $user->role }}</td>
                                       @endif
                                    </tr>
                                @endforeach
{{--                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-indigo-400">No users found</p>--}}
                        </table>
                </div>
            </div>
        </div>
    </div>
