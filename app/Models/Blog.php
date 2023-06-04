<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $primaryKey = 'blog_id';
    protected $guarded = ['blog_id'];

    public function Chapter(){
        return $this->belongsTo(Chapter::class, 'chapter_id');
    }

    public function Categories(){
        return $this->belongsToMany(Category::class, 'blog_categories', 'blog_id', 'category_id');
    }

    public function User() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
