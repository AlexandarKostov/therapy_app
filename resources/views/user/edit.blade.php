<x-app-layout>
    <div class="container max-w-screen-lg mx-auto py-8">
        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">User Details</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $user->name }}"/>
                                </div>
                                <div class="md:col-span-5">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{ $user->email }}" id="email" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="$"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label for="role">Role</label>
                                    <input type="text" name="role" id="role" required class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $user->role }}"/>
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <a href="{{ \Illuminate\Support\Facades\URL::previous() }}"
                                           class="drop-shadow-lg text-[min(19vw,14px)] font-semibold text-black  border-red-700 rounded-full px-5 py-2.5 text-center uppercase">
                                            Back
                                        </a>
                                        <button type="submit" class="bg-green-400 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
