<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable: apa aja yang boleh diisi, berlaku untuk CRUD
    //protected $fillable = ['title', 'excerpt', 'body'];
    // guarded: apa aja yang harus dijagain, berlaku untuk CRUD
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
