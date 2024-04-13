@props(['blog'])
<article
         class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a href="{{ route('blog.show', $blog->slug) }}" >
                <img class="mw-100 mx-auto rounded-xl"
                     src="{{ $blog->getImage() }}"
                     alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
{{--                <img src="" alt="" class="w-7 h-7 rounded-full mr-3">--}}
{{--                <span class="mr-1 text-xs">{{ $blog->author->name }}</span>--}}
                <span class="text-gray-500 text-xs"> {{ $blog->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a href="{{ route('blog.show', $blog->slug) }}" >
                    {{ $blog->title }}
                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                {{ $blog->limitBody() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex gap-x-2">
                    @foreach($blog->articles as $article)
                      <x-badge wire:navigate href="{{ route('blog.index', ['article' => $article->title]) }}">
                          {{ $article->title }}
                      </x-badge>
                    @endforeach
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-500 text-sm">{{ $blog->readTime() }} min</span>
                    </div>
                </div>
                <div>
                    <livewire:like-button :key="$blog->id" :$blog></livewire:like-button>
                </div>
            </div>
        </div>
    </div>
</article>
{{--<article  wire:key="{{$blog->id}} class="[&:not(:last-child)]:border-b border-gray-100 pb-10">--}}
{{--    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">--}}
{{--        <div class="article-thumbnail col-span-4 flex items-center">--}}
{{--            <a wire:navigate href="{{ route('blog.show', $blog->slug) }}" >--}}
{{--                <img class="mw-100 mx-auto rounded-xl"--}}
{{--                     src="{{ $blog->getImage() }}"--}}
{{--                     alt="thumbnail">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="col-span-8">--}}
{{--            <div class="article-meta flex py-1 text-sm items-center">--}}
{{--                <img class="w-7 h-7 rounded-full mr-3"--}}
{{--                     src="{{ $blog->author->profile_photo_url }}"--}}
{{--                     alt="avatar">--}}
{{--                <span class="mr-1 text-xs">{{ $blog->author->name }}</span>--}}
{{--                <span class="text-gray-500 text-xs">. {{ $blog->published_at->diffForHumans() }}</span>--}}
{{--            </div>--}}
{{--            <h2 class="text-xl font-bold text-gray-900">--}}
{{--                <a wire:navigate href="{{ route('blog.show', $blog->slug) }}" >--}}
{{--                    {{ $blog->title }}--}}
{{--                </a>--}}
{{--            </h2>--}}

{{--            <p class="mt-2 text-base text-gray-700 font-light">--}}
{{--                {{ $blog->limitBody() }}--}}
{{--            </p>--}}
{{--            <div class="article-actions-bar mt-6 flex items-center justify-between">--}}
{{--               <div class="flex gap-x-1.5">--}}
{{--                   @foreach($blog->articles as $article)--}}
{{--                       <x-badge--}}
{{--                           wire:navigate href="{{ route('blog', ['article' => $article->title]) }}">--}}
{{--                           {{$article->title}}--}}
{{--                       </x-badge>--}}
{{--                   @endforeach--}}
{{--                   <div class="flex items-center space-x-4">--}}
{{--                       <span class="text-gray-500 text-sm">{{ $blog->readTime() }} min read</span>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--                <div>--}}
{{--                    <livewire:like-button :key="$blog->id" :$blog></livewire:like-button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</article>--}}
