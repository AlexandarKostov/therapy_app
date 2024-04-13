@props(['article'])
<x-badge wire:navigate href="{{ route('blog.index', ['article' => $article->slug]) }}">
    {{ $article->title }}
</x-badge>
