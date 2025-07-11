<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query , array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                 $query->where('title', 'like', '%' . $search . '%')
                       ->orWhere('body', 'like', '%' . $search . '%');
             });
         });
 
         $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category',function($query) use ($category) {
                   $query->where('slug',$category);

             });
         });

         $query->when($filters['author'] ?? false, fn($query, $author) =>
              $query->whereHas('author',fn($query) =>
                   $query->where('username',$author) 
        )
        );
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
