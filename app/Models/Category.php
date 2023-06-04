<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $guarded = ['category_id'];

    public function Blogs(){
        return $this->belongsToMany(Blog::class, 'blog_categories', 'category_id', 'blog_id');
    }
}
