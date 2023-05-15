<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // no longer need protected $fillable 
    // because Model::unguard() is added to AppServiceProvider.php;
    // protected $fillable = ['title', 'categories', 'description', 'location', 'price'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['category'] ?? false) {
            // where column categories in db matches req.query
            // SELECT * FROM `posts` WHERE `categories` like '%Elektronik%' (from clockwork chrome extensions)  %x% means it can be in the middle of sentence 
            $query->where('categories', 'like', '%' . request('category') . '%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('categories', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }

    // relationship to user (post belong to user)
    // https://laravel.com/docs/10.x/eloquent-relationships#one-to-many-inverse
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
