<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    public function visitors()
    {
        return $this->belongsTo(Visitor::class, "id_vist");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
