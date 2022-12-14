<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class NewsItem extends Model
{
    use HasFactory, HasTranslations;

    /**
     * @var string[]
     */
    public array $translatable = ['name'];
    /**
     * @var string[]
     */
    protected $fillable = ['name'];
}
