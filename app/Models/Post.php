<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];     // Mendefinisikan apa yg boleh diisi
    protected $guarded = ['id'];                             // Mendefinisikan apa yang tidak boleh diisi
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false) {
        //    return $query->where('title', 'like', '%'.$filters['search'].'%')
        //     ->orWhere('body', 'like', '%'.$filters['search'].'%');
        // }

        // null coalescing operator ( kalau ada ?? kalau gk ada )
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%'.$search.'%')
                    ->orWhere('body', 'like', '%'.$search.'%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, function($query, $author) {
        //     return $query->whereHas('author', function($query) use ($author) {
        //         $query->where('username', $author);
        //     });
        // });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()  //category = nama relasi
    {
        return $this->belongsTo(Category::class);
    }    

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
