<x-app-layout>
    @section('hero')
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session()->get('message') }}
                </div>
                <button x-on:click="show = false" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <div class="my-4 mx-4">
              <div class="min-h-screen p-6 flex items-center justify-center">
                  <div class="container max-w-screen-lg mx-auto">
                      <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('POST')
                              <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                                  <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                      <div class="text-gray-600">
                                          <p class="font-medium text-lg">Blog Details</p>
                                          <p>Please fill out all the fields.</p>
                                      </div>

                                      <div class="lg:col-span-2">
                                          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                              <div class="md:col-span-5">
                                                  <label for="title">Title of Blog</label>
                                                  <input type="text" name="title" id="title" required
                                                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                  <x-input-error for="title" :messages="$errors->get('title')" class="mt-2"/>
                                              </div>


                                              <div class="md:col-span-5">
                                                  <label for="slug">Slug fot he blog something like hashtag</label>
                                                  <input type="text" name="slug" id="slug" required
                                                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                  <x-input-error for="title" :messages="$errors->get('slug')" class="mt-2"/>
                                              </div>


                                              <div class="md:col-span-5">
                                                  <label for="body">Description of the blog</label>
                                                  <textarea id="body" type="text" name="body" required
                                                            autocomplete="body"
                                                            class="block px-0 w-full text-sm text-black-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>
                                                  <x-input-error for="title" :messages="$errors->get('body')" class="mt-2"/>
                                              </div>

                                              <div class="md:col-span-5">
                                                  <label for="image">Image for the blog</label>
                                                  <input
                                                      class="cursor-pointer h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                                      id="image" name="image" type="file">
                                                  <x-input-error for="title" :messages="$errors->get('image')" class="mt-2"/>
                                              </div>
                                              <div class="md:col-span-5">
                                                  <label for="published_at">Select which date is published</label>
                                                  <input type="datetime-local" name="published_at" id="published_at" required
                                                         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                                  <x-input-error for="title" :messages="$errors->get('published_at')" class="mt-2"/>
                                              </div>

{{--                                              <div class="md:col-span-5">--}}
{{--                                                  <span>Featured ?</span>--}}
{{--                                                  <span>By default is not , so if you want just select Yes !</span>--}}
{{--                                                  <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">--}}
{{--                                                      <input checked id="featured" type="radio" value="featured" name="featured" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">--}}
{{--                                                      <label for="featured" class="w-full py-4 ms-2 text-sm font-medium text-black ">Yes</label>--}}
{{--                                                  </div>--}}
{{--                                              </div>--}}

                                              <div class="md:col-span-5 text-right">
                                                  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                                      @foreach($articles as $article)
                                                          <ul class="w-full">
                                                              <li>
                                                                  <input type="checkbox" id="article{{ $article->id }}"
                                                                         value="{{ $article->id }}" name="article[]"
                                                                         class="hidden peer">
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
                                                          class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                                          type="submit">
                                                          Create
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
        <div class="flex justify-center">
            <div class="flex flex-wrap justify-center">
                <!-- Card 1 -->
                @foreach($blogs as $blog)
                <div class="relative flex flex-col mt-6 mr-6 mb-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                    <div class="relative flex flex-col mt-6 text-gray-700">
                        <div
                            class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                            <img
                                src="{{ $blog->getImage() }}"
                                alt="card-image" />
                        </div>
                        <div class="p-6">
                            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                {{ $blog->title }}
                            </h5>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                {{ $blog->limitBody() }}
                            </p>
                        </div>
                        <div class="p-6 pt-0 mx-2 flex">
                            <a href="{{ route('blog.edit', $blog->id) }}"
                                class="mx-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                               >
                               Edit
                            </a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-red-900/10 hover:shadow-lg hover:shadow-red-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="submit">
                                    Delete
                                </button>
                            </form>
                            <a href="{{ route('dashboard') }}"
                               class="mx-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            >
                                Back
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endsection
</x-app-layout>
