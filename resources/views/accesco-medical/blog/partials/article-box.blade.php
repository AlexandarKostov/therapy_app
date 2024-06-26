<div>
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start gap-1">
        @foreach($articles as $article)
            <x-badge wire:navigate href="{{ route('blog.index', ['article' => $article->title]) }}">
                {{$article->title}}
            </x-badge>
        @endforeach
    </div>
</div>
