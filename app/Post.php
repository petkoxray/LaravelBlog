<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Post
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create([
            'body' => $body,
            'user_id' => auth()->id()
        ]);
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', $filters['year']);
        }
    }

    public static function archives()
    {
        return Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->orderByRaw('min(created_at) desc')
            ->groupBy('year', 'month')->get()->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
