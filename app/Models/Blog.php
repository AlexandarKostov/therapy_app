<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'body',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function articles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    public function likes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'blog_user')->withTimestamps();
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function scopePublished($query): void
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeWithArticle($query, string $article): void
    {
        $query->whereHas('articles', function ($query) use ($article){
        $query->where('slug', $article);
        });
    }

    public function limitBody(): string
    {
        return Str::limit(strip_tags($this->body), 150);
    }
    public function readTime(): float
    {
        $words = round(str_word_count($this->body) / 250);
        return ($words < 1) ? 1 : $words;
    }

    public function getImage()
    {
        $isUrl = str_contains($this->image, 'http');
        return ($isUrl) ? $this->image : Storage::disk('public')->url($this->image);

//        if ($isUrl) {
//            return $this->image;
//        }
//
//        $thumbnailPath = 'blog/image/' . $this->id;
//
//        return asset('storage/' . $thumbnailPath . '/' . $this->image);

    }


    public function countPostsLast24Hours()
    {
        $last24Hours = Carbon::now()->subDay();
        return self::where('created_at', '>=', $last24Hours)->count();
    }

}
