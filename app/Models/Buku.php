<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters)
    {        
        // searching untuk judul atau deskripsi buku
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('judul', 'like', '%'. $search .'%')
                   ->orWhere('desc', 'like', '%'. $search .'%');
        });

        // searching jika pencarian memiliki kategori
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                   $query->where('slug', $category);
            });
        });

        //searching jika pencarian memiliki author
        $query->when($filters['author'] ?? false, fn($query, $author) => 
            $query->whereHas('user', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}