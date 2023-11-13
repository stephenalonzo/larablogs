<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'user_id',
        'description', 
        'category',
        'image',
        'mins_to_read'
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false)
        {

            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('category', 'like', '%' . request('search') . '%');

        }

        if ($filters['category'] ?? false)
        {

            $query->where('category', 'like', '%' . request('category') . '%');

        }

    }

    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function categories()
    {

        return $this->belongsToMany(Category::class);

    }

    public function comments()
    {

        return $this->belongsToMany(Comment::class);

    }

}
