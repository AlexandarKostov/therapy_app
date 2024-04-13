<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComment extends Component
{
    use WithPagination;
    public Blog $blog;
    #[Rule('required|min:3|max:250')]
    public string $comment;

    /**
     * @throws ValidationException
     */
    public function blogComment(): void
    {
        $this->validateOnly('comment');
        $this->blog->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->id()
        ]);

        $this->reset('comment');
    }

    #[Computed()]
    public function comments(): ?\Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this?->blog?->comments()->latest()->paginate(5);
    }

    public function render(): View
    {
        return view('livewire.blog-comment');
    }
}
