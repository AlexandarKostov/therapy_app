<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Blog;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use function PHPUnit\TestFixture\func;

class PostList extends Component
{

    use WithPagination;
    #[Url()]
    public string $sort = 'desc';

    #[Url()]
    public string $search = '';

    #[Url()]
    public string $article = '';

    public function setSort($sort): void
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
    }

    #[On('search')]
    public function updateSearch($search): void
    {
        $this->search = $search;
    }


    #[Computed]
    public function blogs()
    {
        return Blog::orderBy('published_at', $this->sort)
            ->when($this->activeArticle, function ($query){
                $query->WithArticle($this->article);
            })
            ->where('title', 'like', "%{$this->search}%")
            ->paginate(8);
    }

    #[Computed]
    public function activeArticle()
    {
        return Article::where('slug', $this->article)->first();
    }

    public function render(): View
    {
        return view('livewire.post-list');
    }
}
