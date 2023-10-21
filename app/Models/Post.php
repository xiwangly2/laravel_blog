<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title', 'content'];

    // 如果你的文章表有用户ID字段，可以定义与用户的关联关系
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
