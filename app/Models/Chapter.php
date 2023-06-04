<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $guarded = ['chapter_id'];
    protected $primaryKey = 'chapter_id';

    public function Blogs(){
        return $this->hasMany(Blog::class, 'chapter_id');
    }
}
