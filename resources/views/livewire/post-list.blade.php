<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-gray-500">
            @if($search)
                Searching {{$search}}
            @endif
            @if($this->activeArticle)
                    <x-badge wire:navigate href="{{ route('blog', ['article' => $this->activeArticle->title]) }}">
                        {{$this->activeArticle->title}}
                    </x-badge>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button class="text-gray-500 py-4" wire:click="setSort('desc')">Latest</button>
            <button class="text-gray-500 py-4" wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @foreach($this->blogs as $blog)
            <x-accesco-medical.blog.post-item wire:key="{{$blog->id}}" :blog="$blog"></x-accesco-medical.blog.post-item>
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->blogs->onEachSide(1)->links() }}
    </div>
</div>
