<?php

namespace App\Models;

use App\Traits\HasAuthor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory, HasAuthor;

    const TABLE = 'articles';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'author_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function id(): string
    {
        return (string) $this->id;
    }


}
