<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['pseudo', 'score', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}