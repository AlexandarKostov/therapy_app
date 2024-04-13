<x-app-layout>
    @section('hero')
            <div class="my-4 mx-4">
                <div class="min-h-screen p-6 flex items-center justify-center">
                    <div class="container max-w-screen-lg mx-auto">
                        <form action="{{ route('blog.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                    <div class="text-gray-600">
                                        <p class="text-gray-500 mb-6">After filling the information, click "Update".</p>
                                        <div class="text-gray-600">
                                            <p class="font-medium text-lg">Blog Update</p>
                                            <p>Please fill out all the fields.</p>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-2">
                                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                            <div class="md:col-span-5">
                                                <label for="title">Title of Blog</label>
                                                <input type="text" name="title" id="title" required
                                                       value="{{ old('title',$blogs->title) }}"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                <x-input-error for="title" :messages="$errors->get('title')" class="mt-2"/>
                                            </div>


                                            <div class="md:col-span-5">
                                                <label for="slug">Slug fot he blog something like hashtag</label>
                                                <input type="text" name="slug" id="slug" required
                                                       value="{{ old('title',$blogs->slug) }}"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                <x-input-error for="title" :messages="$errors->get('slug')" class="mt-2"/>
                                            </div>


                                            <div class="md:col-span-5">
                                                <label for="body">Description of the blog</label>
                                                <textarea id="body" type="text" name="body" required
                                                          autocomplete="body"
                                                          class="block px-0 w-full text-sm text-black-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                                    {{ $blogs->body }}
                                                </textarea>
                                                <x-input-error for="title" :messages="$errors->get('body')" class="mt-2"/>
                                            </div>

                                            <div class="md:col-span-5">
                                                <label for="image">Image for the blog</label>
                                                <input
                                                    class="cursor-pointer h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                    id="image" name="image" type="file"
                                                    value="{{ old('image', $blogs->image) }}">
                                                <x-input-error for="title" :messages="$errors->get('image')" class="mt-2"/>

                                            </div>

                                            <div class="md:col-span-5">
                                                <label for="published_at">Select which date is published</label>
                                                <input type="datetime-local" name="published_at" id="published_at" required
                                                       value="{{ old('title',$blogs->published_at) }}"
                                                       class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                <x-input-error for="title" :messages="$errors->get('published_at')" class="mt-2"/>
                                            </div>
                                            @php
                                                $blogArticlesIds = $blogs->articles->pluck('id')->toArray();
                                            @endphp

                                            <div class="md:col-span-5 text-right">
                                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                                    @foreach($articles as $article)
                                                        <ul class="w-full">
                                                            <li>
                                                                <input type="checkbox" id="article{{ $article->id }}"
                                                                       value="{{ $article->id }}" name="article[]"
                                                                       class="hidden peer"
                                                                    {{ (in_array($article->id, $blogArticlesIds)) ? 'checked' : '' }}>
                                                                <label for="article{{ $article->id }}"
                                                                       class="inline-flex items-center justify-between w-full p-5 text-black bg-white border-2 border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-600 ">
                                                                    {{ $article->title }}
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="md:col-span-5 text-right">
                                                <div class="inline-flex items-end">
                                                    <button
                                                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-800 text-white shadow-md shadow-green-600 hover:shadow-lg hover:shadow-green-500 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                                        type="submit">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
    @endsection
</x-app-layout>
