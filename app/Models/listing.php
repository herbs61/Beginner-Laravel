<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class listing extends Model
{
    use HasFactory;

    // protected $table = "laragigs";
    // protected $id ="id";
    // public $timestamps = false;

    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags','logo'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if ($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags ', 'like', '%' . request('search') . '%');
        }
    }
}
