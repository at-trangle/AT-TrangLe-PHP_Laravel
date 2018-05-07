<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	// protected $table = 'news_migration';
    protected $fillable = [
        'name', 'preview',
    ];
}
