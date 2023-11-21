<?php

namespace App\Models;

use Overtrue\LaravelLike\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'material',
        'making',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
